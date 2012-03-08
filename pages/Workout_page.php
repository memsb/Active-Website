<?php

require_once LIB . 'Page.php';
require_once LIB . 'Workout.php';
require_once LIB . 'Activities.php';
require_once LIB . 'Activity.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows a user to view a workout and to edit if it is theirs
 * @namespace active
 */
class Workout_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Workout';

	private $workout;
	private $activity;
	private $id = -1;
	private $edit;
	private $message = '';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Get request on page
	 * 
	 * @param Array of parameters
	 */
	public function get($data){
		if( isset($data['id']) )
			$this->id = intval($data['id']);
			
		if( isset($data['edit']) )
			$this->edit = True;
	}

	/*
	 * Post request on page
	 * Allows a user to update a workout
	 * @param Array of parameters
	 */
	public function post($data){
		if ( ! $this->valid_arg( $data['Start_date'] ) ){
			$this->message = 'Please select a date.<br/>';
			return;
		}	
		$workout = new Workout();
		$workout->id =		$this->id;
		$workout->user_id = 	$this->user->user_id;
		$workout->activity_id = intval($data['Activity']);
		
		$start_hours = 		intval($data['Start_time_hours']);
		$start_mins = 		str_pad($data['Start_time_mins'], 2, "0", STR_PAD_LEFT);
		$date = 		$data['Start_date'];
		$start = 		DateTime::createFromFormat('m/d/Y G i', "$date $start_hours  $start_mins");		

		$duration_hours = 	intval($data['Duration_hours']);
		$duration_mins = 	intval($data['Duration_mins']);

		$workout->start = 	$start->getTimestamp();
		$workout->duration = 	($duration_hours * 60) + $duration_mins;

		$xml_doc = $workout->getXML();		
		$response = $this->xmlPUT(EXERCISER . "workouts/$this->id", $xml_doc);
		//on update success show user workout
		header("Location: " . Workout_page::PAGE_NAME . "?id=$this->id");
		exit();
	}

	/*
	 * Show workout details	
	 * if logged in let them edit
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$content = '';		
		
		//if( $this->user->isLoggedIn() && $this->edit ){
		if( $this->edit ){
			$page->assign('javascript', SCRIPTS . 'workouts_page.js');
			$content = $this->edit_workout($this->id);
		}else{
			$content = $this->display_workout($this->id);
		}
	
		$page->assign('content', $content);
		$page->display();
	}

	/*
	 * Allows a user to modify the workout using a form
	 * @param Int the workout ID
	 * @return String the form
	 */
	private function edit_workout($id){
		try{
			$this->load_workout($id);
		}catch(Exception $e){
			return $e->getMessage();
		}
		$activities = new Activities();
		$response = $this->xmlGET(EXERCISER . 'activities/');
		switch ($response['code']) {
			case 200:
				$activities->parse($response['body']);
				break;
			default:
				break;
		}
		$template = $this->smarty->createTemplate('workout/workout_form.tpl');
		$template_list = $this->smarty->createTemplate('activity/select.tpl'); 
		$template_item = $this->smarty->createTemplate('activity/select_item.tpl');
		$template->assign('action', $this::PAGE_NAME .  "?id=$this->id");
		$template->assign('activities', $this->message . $activities->display($template_list, $template_item));
		return $template->fetch();
	}

	/*
	 * Displays a workout based on the ID given
	 * @param Int the workout ID
	 * @return String the workout
	 */
	private function display_workout($id){
		try{
			$this->load_workout($id);
		}catch(Exception $e){
			return $e->getMessage();
		}
		$content = '';
		if( $this->user->isLoggedIn() && $this->workout->user_id == $this->user->user_id ){
			$editable_template = $this->smarty->createTemplate('workout/editable.tpl');
			$editable_template->assign('edit_link', $this::PAGE_NAME . "?id=$id&edit=1");
			$editable_template->assign('delete_id', $id);
			$content .= $editable_template->fetch();
		}
			
		$workout_template = $this->smarty->createTemplate('workout/workout.tpl');
		$activity_template = $this->smarty->createTemplate('activity/activity.tpl');
		$content .= $this->workout->display($workout_template);
		$content .= $this->activity->display($activity_template);
		return $content;
	}

	/*
	 * Loads a workout based on the ID given
	 * @param Int the workout ID
	 */
	private function load_workout($id){
		$this->workout = new Workout();
		$response = $this->xmlGET(EXERCISER . "workouts/$id");		
		switch ($response['code']) {
			case 200:
				$this->workout->parse($response['body']);
				break;
			default:
				throw new Exception('Unable to load workout');
				break;
		}
		
		$this->activity = new Activity();
		$response = $this->xmlGET(EXERCISER . "activities/" . $this->workout->activity_id);
		switch ($response['code']) {
			case 200:
				$this->activity->parse($response['body']);
				break;
			default:
				throw new Exception('Unable to load workout activity');
				break;
		}
	}
}

?>
