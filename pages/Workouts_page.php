<?php

require_once PAGES . 'Page.php';
require_once LIB . 'Stats.php';
require_once LIB . 'Workouts.php';
require_once LIB . 'Workout.php';
require_once LIB . 'Activity.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Lets a user view and manage their workouts
 */
class Workouts_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Workouts';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
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
			$page->assign('javascript', 'scripts/home_page.js');
			$content = $this->list_own_workouts($this->user->user_id);
		}else{
			$content = $this->display_stats();
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
	 * Loads a users own workouts
	 * @param Int user ID
	 * @return String formatted list of workouts
	 */
	private function list_own_workouts($uid){
		$workouts = $this->load_workouts($uid);
		$template_list = $this->smarty->createTemplate('workout/workout_list.tpl');
		$template_item = $this->smarty->createTemplate('workout/workout_item.tpl');
		return $workouts->display($template_list, $template_item);
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
