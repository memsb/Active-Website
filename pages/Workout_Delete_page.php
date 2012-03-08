<?php

require_once LIB . 'Page.php';
require_once PAGES . 'Workouts_page.php';
require_once LIB . 'Workout.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows a user to Delete their own workout
 * @namespace active
 */
class Workout_Delete_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Delete_Workout';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Post request on page
	 * Allows a logged in user to delete their own workout
	 * @param Array of parameters
	 */
	public function post($data){
		if ( ! $this->valid_arg( $data['id'] ) )
			return;
		
		if ( ! $this->user->isLoggedIn() )
			return;
		
		$id = $data['id'];
		$workout = $this->load_workout($id);
		if( $workout->user_id = $this->user->user_id )
			$response = $this->xmlDELETE(EXERCISER . "workouts/$id");
	}

	/*
	 * Forwards the visiter back to the workouts page
	 */
	public function visit(){
		header("Location: " . Workouts_page::PAGE_NAME);
		exit();
	}

	/*
	 * Loads a workout based on the ID given
	 * @param Int the workout ID
	 */
	private function load_workout($id){
		$workout = new Workout();
		$response = $this->xmlGET(EXERCISER . "workouts/$id");		
		switch ($response['code']) {
			case 200:
				$workout->parse($response['body']);
				break;
			default:
				throw new Exception('Unable to load workout');
				break;
		}
		return $workout;
	}
}

?>
