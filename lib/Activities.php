<?php
require_once LIB . 'Activity.php';

// Define the custom sort functions
function name_asc($a,$b) {
	return strcmp($a->name, $b->name);
}
function name_desc($a,$b) {
	return strcmp($b->name, $a->name);
}
function compare($a, $b){
	if($b == $a)
		return 0;
	else if($b < $a)
		return 1;
	else
		return -1;
}
function kcal_asc($a,$b) {
	return compare($a->kcal, $b->kcal);	
}
function kcal_desc($a,$b) {
	return compare($b->kcal, $a->kcal);
}

class Activities{

	public $activities = array();

	public function parse($xmlstr){
		try{
			$data = new SimpleXMLElement($xmlstr);
			foreach($data as $activity_data){
				$activity = new Activity();
				$activity->assign_data($activity_data);
				$this->activities[] = $activity;			
			}
		}catch(Exception $e){
		}
	}

	public function sort_asc_name(){
		usort($this->activities, "name_asc");
	}

	public function sort_desc_name(){
		usort($this->activities, "name_desc");
	}

	public function sort_asc_kcal(){
		usort($this->activities, "kcal_asc");
	}

	public function sort_desc_kcal(){
		usort($this->activities, "kcal_desc");
	}

	public function display($template_list, $template_item){
		$content = '';
		foreach($this->activities as $activity){
			$content .= $activity->display($template_item);
		}
		$template_list->assign('list', $content);
		return $template_list->fetch();
	}
}
?>
