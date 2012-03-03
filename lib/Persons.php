<?php

require_once LIB . 'Person.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Persons stores an internal list of Person
 */
class Persons {

	private $persons = array();
	private $db;

	/*
	 * Constructor requires a Database object to pass to each Person
	 * @param Database
	 */
	public function __construct($db){
		$this->db = $db;
	}

	/*
	 * Parses an XML document containing a Person
	 * @param String the XML document
	 */
	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		foreach($data->user as $person_data){
			$person = new Person($this->db);
			$person->assign_data($person_data);
			$this->persons[] = $person;
		}
	}

	/*
	 * Returns the number of internally stored Persons
	 * @param Int the number of workouts
	 */
	public function size(){
		return count($this->persons);
	}

	/*
	 * Iterates over all Persons printing them out
	 * @param Smarty Template for the list
	 * @param Smarty Template for each item
	 * @return String containing the output text
	 */
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
			$content .= $this->persons[$i]->display($template);
		}
		$list_template->assign('list', $content);
		return $list_template->fetch();
	}
}
?>
