<?php

require_once LIB . 'Workout.php';
require_once LIB . 'Activity.php';
require_once LIB . 'User.php';

class Stats {

	private $user_count = 0;
	private $longest_workout;
	private $biggest_workout;
	private $popular_activity;
	private $most_kcal;

	public function __construct($db){
		$this->longest_workout = new Workout();
		$this->biggest_workout = new Workout();
		$this->popular_activity = new Activity();
		$this->most_kcal = new Person($db);
	}

	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		$this->user_count = intval($data->user_count);
		$this->longest_workout->assign_data($data->longest_workout->workout);
		$this->biggest_workout->assign_data($data->biggest_workout->workout);
		$this->popular_activity->assign_data($data->popular_activity->activity);
		$this->most_kcal->assign_data($data->most_kcal->user);		
	}

	public function display($stats_template, $workout_template, $activity_template, $user_template){
		$stats_template->assign('user_count', $this->user_count);

		$longest_workout_template = clone $workout_template;
		$this->longest_workout->display($longest_workout_template);
		$stats_template->assign('longest_workout', $longest_workout_template->fetch());

		$biggest_workout_template = clone $workout_template;
		$this->biggest_workout->display($biggest_workout_template);
		$stats_template->assign('biggest_workout', $biggest_workout_template->fetch());

		$this->popular_activity->display($activity_template);
		$stats_template->assign('popular_activity', $activity_template->fetch());

		$this->most_kcal->display($user_template);
		$stats_template->assign('most_kcal', $user_template->fetch());

		return $stats_template->fetch();
	}
}
?>
