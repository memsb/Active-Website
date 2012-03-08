<?php

require_once LIB . 'Page.php';
require_once LIB . 'Workouts.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Graph page is used to return JSON data for display in charts
 * @namespace active
 */
class Graph_page extends Page {	

	private $chart = 0;
	private $week = 0;
	private $period = '';
	private $week_days = array();
	private $uid = 1;

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){		
		parent::__construct();

		if( $this->user->isLoggedIn() )
			$this->uid = $this->user->user_id;		
	}

	/*
	 * Get request on page
	 * Allows a week to be specified relative to the current week. e.g. -4 = 4 weeks ago
	 * Specify chart type using an int
	 * @param Array of parameters
	 */
	public function get($data){
		if( $this->valid_arg( $data['chart'] ) )
			$this->chart = intval($data['chart']);

		if( $this->valid_arg( $data['week'] ) )
			$this->week = intval($data['week']);
	}

	/*
	 * Standard page visit
	 * Displays JSON formatted graph data
	 */
	public function visit(){
		$first = 7 * ($this->week - 1) + 1;
		$last = 7 * ($this->week);
		for( $i = $first; $i <= $last; $i++ )
			$this->week_days[] = mktime(0, 0, 0, date("m"), date("d") + $i, date("Y"));

		$this->start = $this->week_days[0];
		$this->end = $this->week_days[count($this->week_days)-1];
		$this->period = date('D jS M', $this->start ) . ' - ' . date('D jS M', $this->end );

		$json = '';
		switch( $this->chart ){
			case 1:
				$json = $this->chart1();
				break;
			case 2:
				$json = $this->chart2();
				break;
			case 3:
				$json = $this->chart3();
				break;
			case 4:
				$json = $this->chart4();
				break;
			case 5:
				$json = $this->chart5();
				break;
			case 6:
				$json = $this->chart6();
				break;
			default:
				break;
		}
		echo $json;	
	}

	/*
	 * Gauge showing kcal per week
	 * @return JSON graph data
	 */
	private function chart1(){		
		$total_kcal = 0;

		$days = $this->workouts_by_date();
		foreach($days as $day => $workouts){
			$kcal = 0;
			foreach($workouts as $workout)
				$kcal += $workout->kcal;
			$total_kcal += $kcal;
		}
		
		$data = array(
				array('Kcal', $total_kcal)
			);
		$chart = array(
				'title' => $this->period,
				'format' => array(
						array('string', 'Title'),
						array('number', 'Value')
						),
				'data' => $data
				);
		return json_encode($chart);
	}

	/*
	 * Gauge showing active days per week
	 * @return JSON graph data
	 */
	private function chart2(){
		$total_days = 0;

		$days = $this->workouts_by_date();
		foreach($days as $day => $workouts)
			if( count($workouts) > 0 )
				$total_days++;		
		
		$data = array( 
				array('Active Days', $total_days)
			);
		$chart = array(
				'title' => $this->period,
				'format' => array(
						array('string', 'Title'),
						array('number', 'Value')
						),
				'data' => $data
				);
		return json_encode($chart);
	}

	/*
	 * Gauge showing total time per week
	 * @return JSON graph data
	 */
	private function chart3(){
		$total_duration = 0;

		$days = $this->workouts_by_date();
		foreach($days as $day => $workouts){
			$duration = 0;
			foreach($workouts as $workout)
				$duration += $workout->duration;
			$total_duration += $duration;
		}
		
		$data = array(
				array('Duration', $total_duration)
			);
		$chart = array(
				'title' => $this->period,
				'format' => array(
						array('string', 'Title'),
						array('number', 'Value')
						),
				'data' => $data
				);
		return json_encode($chart);
	}

	/*
	 * Line chart showing kcal per day per week
	 * @return JSON graph data
	 */
	private function chart4(){
		$days = $this->workouts_by_date();

		$data = array();
		foreach($days as $day => $workouts){
			$kcal = 0;
			foreach($workouts as $workout)
				$kcal += $workout->kcal;
			$data[] = array($day, $kcal);
		}

		$chart = array(
				'title' => $this->period,
				'format' => array(
						array('string', 'Day'),
						array('number', 'Kcal')
						),
				'data' => $data
				);
		return json_encode($chart);
	}

	/*
	 * Bar chart showing workout counts per activity
	 * @return JSON graph data
	 */
	private function chart5(){
		$days = $this->workouts_by_date();
		$data = array();
		$activities = array();
		foreach($days as $day => $workouts)
			foreach($workouts as $workout)
				if( isset($activities[$workout->activity_name]) )
					$activities[$workout->activity_name] += 1;
				else
					$activities[$workout->activity_name] = 0; 			
		
		foreach($activities as $key => $value)
			$data[] = array($key, $value);

		if( count($data) == 0 )
			$data[] = array('Nothing', 1);

		$chart = array(
				'title' => $this->period,
				'format' => array(
						array('string', 'Activity'),
						array('number', 'Workouts')
						),
				'data' => $data
				);
		return json_encode($chart);
	}

	/*
	 * Pie chart showing total kcal per activity
	 * @return JSON graph data
	 */
	private function chart6(){
		$days = $this->workouts_by_date();
		$data = array();
		$activities = array();
		foreach($days as $day => $workouts)
			foreach($workouts as $workout)
				if( isset($activities[$workout->activity_name]) )
					$activities[$workout->activity_name] += $workout->kcal;
				else
					$activities[$workout->activity_name] = 0; 			
		
		foreach($activities as $key => $value)
			$data[] = array($key, $value);

		if( count($data) == 0 )
			$data[] = array('Nothing', 1);

		$chart = array(
				'title' => $this->period,
				'format' => array(
						array('string', 'Activity'),
						array('number', 'Kcal')
						),
				'data' => $data
				);
		return json_encode($chart);
	}

	private function workouts_by_date(){
		$days = array();
		foreach( $this->week_days as $week_day ){
			$day = array();
			$workouts = $this->load_workouts_date($this->uid, $week_day);
			foreach( $workouts->workouts as $workout )
				$day[] = $workout;
			$days[date('D', $week_day )] = $day;
		}
		return $days;
	}

	/*
	 * Loads workouts for a specified user
	 * @param Int user id
	 * @return Workouts instance
	 */
	private function load_workouts_date($id, $day){
		$workouts = new Workouts();
		$date = date('d-M-Y', $day );
		$response = $this->xmlGET(EXERCISER . "users/$id/workouts?date=$date");
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
