<?php

require_once LIB . 'Calendar.php';
require_once LIB . 'Workouts.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Calendar page allows access to the calendar class passing it attributes through GET
 */
class Calendar_page extends Page{

	private $calendar;
	private $month = 0;

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){		
		parent::__construct();
	}

	/*
	 * Get request on page
	 * allows a month to be specified relative to the current month. e.g. -4 = 4 months ago
	 * @param Array of parameter
	 */
	public function get($data){
		$this->month = $data['month'];
	}

	/*
	 * Standard page visit
	 * Displays a calendar
	 */
	public function visit(){		
		echo $this->build_calendar();
	}

	/*
	 * Creates and populates a calendar with workout events
	 * @return String the calendar
	 */
	private function build_calendar(){
		$this->calendar = new Calendar($this->smarty, $this->month);
		$workouts = $this->load_workouts($this->user->user_id);
		foreach($workouts as $workout){
			$e = new Event();
			$e->setTime($workout->start);
			$name = $workout->activity_name;
			$id = $workout->id;
			$e->setText("<a href=\"Workout?id=$id\">$name</a>");
			$this->calendar->addEvent($e);
		}
		return $this->calendar->draw(Calendar::COMPACT);
	}

	/*
	 * Loads the users workouts
	 * @param Int the user ID
	 * @return Workouts class instance
	 */
	private function load_workouts($id){
		$workouts = new Workouts();
		$response = $this->xmlGET(EXERCISER . "users/$id/workouts");
		switch($response['code']){
			case 200:
				$workouts->parse($response['body']);
				break;
			default:
				break;
		}
		return $workouts->workouts;
	}
}

?>
