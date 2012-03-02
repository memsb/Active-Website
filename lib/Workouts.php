<?php

require_once LIB . 'Workout.php';

class Workouts{

	public $workouts = array();

	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		foreach($data->workout as $workout_data){
			$workout = new Workout();
			$workout->assign_data($workout_data);
			$this->workouts[] = $workout;
		}
	}

	public function size(){
		return count($this->workouts);
	}

	public function display($template_list, $template_item){
		$content = '';
		foreach($this->workouts as $workout){
			$content .= $workout->display_list($template_item);
		}
		if( $this->size() == 0 )
			$content = 'No workouts present';
		$template_list->assign('list', $content);
		return $template_list->fetch();
	}
}
?>
