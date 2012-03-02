<?php

require_once PAGES . 'Page.php';
require_once LIB . 'Workout.php';
require_once LIB . 'Activity.php';


/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Workout page is non functional
 *
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
	 * 
	 * @param Array of parameters
	 */
	public function post($data){
		//update workout
		die(var_dump($data['id']));

		try{
			$this->validate($data);
		}catch(Exception $e){
			$this->message = $e->getMessage();
			return;
		}
		if( 1 ) {//$this->user->isLoggedIn() ){
			$this->workout = $this->load_workout($id);
			foreach( $this->required as $field )
				$this->workout->$field = $data[$field];
			$xml_doc = $this->workout->getXML();
			$response = $this->xmlPUT(EXERCISER . "workouts/$id", $xml_doc);
		}

		//on update success show user workout
		header("Location: Workout?id=$this->id");
		exit();
	}

	/*
	Show workout details	
	if logged in let them edit
	*/
	/*
	 * Standard page visit
	 * Displays a list of activities
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$content = '';		
		
		//if( $this->user->isLoggedIn() && $this->edit ){
		if( $this->edit ){
			$content = $this->edit_workout($this->id);
		}else{
			$content = $this->display_workout($this->id);
		}
	
		$page->assign('content', $content);
		$page->display();
	}

	private function edit_workout($id){
		try{
			$this->load_workout($id);
		}catch(Exception $e){
			return $e->getMessage();
		}
		$edit_template = $this->smarty->createTemplate('workout/edit_workout.tpl');
		$edit_template->assign('action', $this::PAGE_NAME);
		$edit_template->assign('activity', $this->activity->name);
		$edit_template->assign('start', $this->workout->start);
		$edit_template->assign('duration', $this->workout->duration);
		$edit_template->assign('id', $id);
		return $edit_template->fetch();
	}

	private function display_workout($id){
		try{
			$this->load_workout($id);
		}catch(Exception $e){
			return $e->getMessage();
		}
		$content = '';
		if( $this->user->isLoggedIn() && $this->workout->user_id == $this->user->user_id ){
			$editable_template = $this->smarty->createTemplate('workout/editable.tpl');
			$editable_template->assign('link', $this::PAGE_NAME . "?id=$id&edit=1");
			$content .= $editable_template->fetch();
		}
			
		$workout_template = $this->smarty->createTemplate('workout/workout.tpl');
		$activity_template = $this->smarty->createTemplate('activity/activity.tpl');
		$content .= $this->workout->display($workout_template);
		$content .= $this->activity->display($activity_template);
		return $content;
	}

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
