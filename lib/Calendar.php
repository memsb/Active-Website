<?php

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Calendar stores a representation of the month along with any events occuring
 */
class Calendar {

	const COMPACT = 1;
	const FULL = 2;
	private $weekdays_long = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	private $weekdays_short = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
	private $data = array();
	private $month_name = "";
	private $year = "";
	private $smarty;

	/*
	 * Constructor generates a new Calendar for the given offset in months. Uses smarty templates
	 * @param Smarty Instance
	 * @param Int the month offset
	 */
	function __construct($smarty, $month=0){
		$this->smarty = $smarty;
		$this->calendar_template = $this->smarty->createTemplate('calendar/calendar.tpl');
		$this->heading_template = $this->smarty->createTemplate('calendar/heading.tpl');
		$this->day_template = $this->smarty->createTemplate('calendar/day.tpl');
		$this->current_day_template = $this->smarty->createTemplate('calendar/current_day.tpl');
		$this->current_month_template = $this->smarty->createTemplate('calendar/current_month.tpl');
		$this->create($month);
	}

	/*
	 * Generates a new Calendar for the specified month
	 * @param Int the offset in months from the current month
	 */
	public function create($month_offset){
		// Links to previous and next month
		$this->prev = $month_offset-1;
		$this->next = $month_offset+1;

		// Get todays date
		$today = date('d-m-Y');

		// Find the start of desired month
		$month_start_timestamp = mktime(0, 0, 0, date("m")+$month_offset, 1, date("Y") );
		$date = getdate($month_start_timestamp);		
		$this->month = intval($date['mon']);
		$this->month_name = $date['month'];
		$this->year = $date['year'];
		$days_in_month = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);

		// The 1st of the month falls how many days into the week?
		$day_offset = intval($date['wday'])-1;

		// How many weeks must be displayed?
		$weeks = ceil(($days_in_month + $day_offset) / 7);
		$days = $weeks * 7;

		// Build 2d array of calendar data
		$this->data = array();
		for($week = 0; $week < $weeks; $week++){
			$week_array = array();
			for($weekday = 0; $weekday < 7; $weekday++){
				// Get day relative to start of month, so -2 is 2 days before
				$month_day = $week * 7 + $weekday - $day_offset;
				$timestamp = mktime(0, 0, 0, $this->month, $month_day, $this->year );
				$day = intval(date('d', $timestamp));
				$month = intval(date('m', $timestamp));
				$year = intval(date('Y', $timestamp));

				// Add dates to week
				$week_array[] = array(
							'day' => $day,
							'month' => $month,
							'year' => $year,
							'current_month' => $month == $this->month,
							'today' => $today == date('d-m-Y', $timestamp)
							);
			}
			// Add week
			$this->data[] = $week_array;
		}
	}

	/*
	 * Adds an Event to the calendar
	 * @param Event to add
	 */
	public function addEvent($event){
		$y = $event->getYear();
		$m = $event->getMonth();
		$d = $event->getDay();
		if( isset($this->events[$y][$m][$d]) )
			$this->events[$y][$m][$d][] = $event;
		else
			$this->events[$y][$m][$d] = array($event);
	}

	/*
	 * Prints out the Calendar
	 * @param Enum the calendar size
	 * @return String the calendar
	 */
	public function draw($size = Calendar::FULL){		
		$this->heading_template->assign('title', "$this->month_name $this->year");
		$heading = $this->heading_template->fetch();
		$rows = "<tr>$heading</tr>";
		switch($size){
			case Calendar::FULL:
				$weekdays = $this->weekdays_long;
				break;
			case Calendar::COMPACT:
				$weekdays = $this->weekdays_short;
				break;
			default:
				$weekdays = $this->weekdays_long;
				break;
		}
		$heading = '';
		foreach($weekdays as $weekday){
			$heading .= "<th>$weekday</th>";
		}
		$rows .= "<tr>$heading</tr>";
		foreach($this->data as $week){
			$week_output = '';
			foreach($week as $day){
				$date = $day['day'];
				$month = $day['month'];
				$year = $day['year'];
				$event_text = '';
				if( isset($this->events[$year][$month][$date]) ){
					$events = $this->events[$year][$month][$date];					
					foreach($events as $event){
						$desc = $event->getText();
						$event_text .= "<br>$desc";
					}					
				}
				$week_output .= $this->print_day($day, $event_text);
			}
			$rows .= "<tr>$week_output</tr>\n";
		}
		$this->calendar_template->assign('body', $rows);
		return $this->calendar_template->fetch();
	}

	/*
	 * Prints out a single day as a part of the calendar
	 * @param Array the day parameters
	 * @param String the event Text
	 * @return String the day
	 */
	private function print_day($day, $event_text=''){
		$date = $day['day'];
		$tpl = $this->day_template;

		if( $day['current_month'] )
			$tpl = $this->current_month_template;

		if( $day['today'] )
			$tpl = $this->current_day_template;		

		$tpl->assign('body', "$date<br>$event_text");
		return $tpl->fetch();
	}
}

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Event class stores text and a timestamp for an event
 */
class Event {

	private $timestamp = 0;
	private $text = '';

	/*
	 * Sets the timestamp of the event
	 * @param Int the timestamp
	 */
	public function setTime($timestamp){
		$this->timestamp = $timestamp;
	}
	
	/*
	 * Sets the text to represent the event
	 * @param String the text
	 */
	public function setText($text){
		$this->text = $text;
	}

	/*
	 * Gets the unix timestamp of the event
	 * @return Int the timestamp
	 */
	public function getTime(){
		return $this->timestamp;
	}
	
	/*
	 * Gets the year on which an event occurs
	 * @return Int the year
	 */
	public function getYear(){
		$year = intval(date('Y', $this->timestamp));
		return $year;
	}

	/*
	 * Gets the month on which an event occurs
	 * @return Int the month
	 */
	public function getMonth(){
		$month = intval(date('m', $this->timestamp));
		return $month;
	}
	
	/*
	 * Gets the day on which an event occurs
	 * @return Int the day
	 */
	public function getDay(){
		return intval(date('d', $this->timestamp));
	}
	
	/*
	 * Gets the text representation of the event
	 * @return String the event
	 */
	public function getText(){
		return $this->text;
	}
}

?>
