<?php
/*
 * @author Martin Buckley - MBuckley@gmail.com
 *
 *
 */
class Workout{

	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		$this->assign_data($data);
	}

	public function assign_data($data){
		$this->id =		intval($data->workout_id);
		$this->username = 	strval($data->username);
		$this->user_id = 	intval($data->user_id);
		$this->activity_id = 	intval($data->activity_id);
		$this->activity_name = 	strval($data->activity_name);
		$this->start = 		intval($data->start);
		$this->duration = 	intval($data->duration);
		$this->kcal = 		intval($data->kcal);
	}

	public function display($template){
		$template->assign('username', $this->username);
		$template->assign('activity', $this->activity_name);
		$template->assign('start', date('d-m-Y h:m', $this->start) );
		$template->assign('duration', $this->duration);
		$template->assign('kcal', $this->kcal);
		return $template->fetch();
	}

	public function display_list($template){
		$template->assign('start', date('d-m-Y h:m', $this->start));
		$template->assign('activity', $this->activity_name);
		$template->assign('duration', $this->duration);
		$template->assign('kcal', $this->kcal);
		return $template->fetch();
	}
}
?>
