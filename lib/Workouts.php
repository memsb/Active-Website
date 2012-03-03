<?php

require_once LIB . 'Workout.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Workouts stores an internal list of Workout
 */
class Workouts{

	public $workouts = array();

	/*
	 * Parses an XML document containing workouts
	 * @param String the XML document
	 */
	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		foreach($data->workout as $workout_data){
			$workout = new Workout();
			$workout->assign_data($workout_data);
			$this->workouts[] = $workout;
		}
	}

	/*
	 * Returns the number of internally stored workouts
	 * @param Int the number of workouts
	 */
	public function size(){
		return count($this->workouts);
	}

	/*
	 * Iterates over all workouts printing them out
	 * @param Smarty Template for the list
	 * @param Smarty Template for each item
	 * @return String containing the output text
	 */
	public function display($template_list, $template_item){
		$content = '';
		foreach($this->workouts as $workout){
			$content .= $workout->display($template_item);
		}
		if( $this->size() == 0 )
			$content = 'No workouts present';
		$template_list->assign('list', $content);
		return $template_list->fetch();
	}
}
?>
