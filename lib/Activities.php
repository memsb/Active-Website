<?php
require_once LIB . 'Activity.php';

/*
 * Custom sorting functions
 */
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

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Manages a list of Activity
 */
class Activities{

	public $activities = array();

	/*
	 * PArses and XML document containing a list of activities
	 * @param String the XML document
	 */
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

	/*
	 * Sorts the activities in to Ascending order by name
	 */
	public function sort_asc_name(){
		usort($this->activities, "name_asc");
	}

	/*
	 * Sorts the activities in to Descending order by name
	 */
	public function sort_desc_name(){
		usort($this->activities, "name_desc");
	}

	/*
	 * Sorts the activities in to Ascending order by kcal
	 */
	public function sort_asc_kcal(){
		usort($this->activities, "kcal_asc");
	}

	/*
	 * Sorts the activities in to Descending order by kcal
	 */
	public function sort_desc_kcal(){
		usort($this->activities, "kcal_desc");
	}

	/*
	 * Iterates over all activities printing them out
	 * @param Smarty Template for the list
	 * @param Smarty Template for each item
	 * @return String containing the output text
	 */
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
