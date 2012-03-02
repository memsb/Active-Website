<?php

require_once LIB . 'Person.php';

class Persons{

	private $persons = array();
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		foreach($data->user as $person_data){
			$person = new Person($this->db);
			$person->assign_data($person_data);
			$this->persons[] = $person;
		}
	}

	public function size(){
		return count($this->persons);
	}

	public function display($list_template, $template, $start=0, $count=5){
		$content = '';

		$start = intval($start);
		$count = intval($count);

		if( $start < 0 )
			$start = 0;

		if( $count < 0 )
			$count = 0;
		
		$end = $start + $count;
		if( $start > count($this->persons) )
			$start = count($this->persons);

		if( $end > count($this->persons) )
			$end = count($this->persons);

		for($i=$start; $i<$end; $i++){
			$content .= $this->persons[$i]->display_list($template);
		}
		$list_template->assign('list', $content);
		return $list_template->fetch();
	}
}
?>
