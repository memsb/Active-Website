<?php

require_once PAGES . 'Page.php';
require_once LIB . 'Stats.php';
require_once LIB . 'Workouts.php';
require_once LIB . 'Workout.php';
require_once LIB . 'Activities.php';
require_once LIB . 'Activity.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Lets a user view and manage their workouts
 */
class Workouts_page extends Page {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Workouts';

	private $message = '';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Post request handler
	 * Adds a new workout using the post data provided
	 * @param Array of data
	 */
	public function Post($data){
		if ( ! $this->valid_arg( $data['Start_date'] ) ){
			$this->message = 'Please select a date.<br/>';
			return;
		}	
		$workout = new Workout();
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
		$id = 			$this->user->user_id;

		$xml_doc = $workout->getXML();		
		$response = $this->xmlPOST(EXERCISER . "users/$id/workouts/", $xml_doc);
	}

	/*
	 * Standard page visit
	 * Displays site usage stats to non logged in users
	 * Displays details on a logged in users workouts
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$content = '';

		if( $this->user->isLoggedIn() ){
			$page->assign('javascript', SCRIPTS . 'workouts_page.js');
			$content .= $this->add_workout();
			$content .= $this->add_calendar();
		}else{
			$content .= $this->display_stats();
		}
		$page->assign('content', $content);
		$page->display();
	}	

	/*
	 * Displays Site usages statistics
	 * @return String displaying site usage stats
	 */
	private function display_stats(){
		try{
			$stats = $this->load_stats();
		}catch(Exception $e){
			return $e->getMessage();
		}
		$stats_template = $this->smarty->createTemplate('stats.tpl');
		$workout_template = $this->smarty->createTemplate('workout/workout.tpl');
		$activity_template = $this->smarty->createTemplate('activity/activity.tpl');
		$user_template = $this->smarty->createTemplate('person.tpl');
		return $stats->display($stats_template, $workout_template, $activity_template, $user_template);
	}
	
	/*
	 * Loads site usage stats
	 * @return Stats instance
	 */
	private function load_stats(){
		$stats = new Stats($this->db);
		$response = $this->xmlGET(EXERCISER);
		switch ($response['code']) {
			case 200:
				$stats->parse($response['body']);
				break;
			default:
				throw new Exception('Unable to load site stats.');
				break;
		}		
		return $stats;
	}

	/*
	 * Loads int he form to add a workout from template
	 * @return String add workout form
	 */
	private function add_workout(){
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
		$template->assign('action', $this::PAGE_NAME);
		$template->assign('activities', $this->message . $activities->display($template_list, $template_item));
		return $template->fetch();
	}

	/*
	 * Loads in the form to add a workout from template
	 * @return String add workout form
	 */
	private function add_calendar(){
		$template = $this->smarty->createTemplate('calendar/calendar_area.tpl');
		return $template->fetch();
	}

	/*
	 * Loads workouts for a specified user
	 * @param Int user id
	 * @return Workouts instance
	 */
	private function load_workouts($id){
		$workouts = new Workouts();
		$response = $this->xmlGET(EXERCISER . "users/$id/workouts");
		switch ($response['code']) {
			case 200:
				$workouts->parse($response['body']);
				break;
			default:
				break;
		}		
		return $workouts;
	}
}

?>
