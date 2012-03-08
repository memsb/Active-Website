<?php

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Workout encapulates the methods and attributes for a workout
 * @namespace active
 */
class Workout {
	
	private $id;
	private $username;
	private $user_id;
	private $activity_id;
	private $activity_name;
	private $start;
	private $duration;
	private $kcal;

	/*
	 * Magic method setter
	 */
	public function __set($name, $value){
		$this->$name = $value;
	}

	/*
	 * Magic method getter
	 */
	public function __get($name){
		return $this->$name;
	}

	/*
	 * Parses an XML document containing an activity
	 * @param String the XML document
	 */
	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		$this->assign_data($data);
	}

	/*
	 * Transfers the parsed XML into the internal structure
	 * @param SimpleXML Object
	 */
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

	/*
	 * returns an XML representation of the object
	 * @return String XML 
	 */
	public function getXML(){
		$writer = new XMLWriter();
		$writer->openMemory();
		$writer->setIndent(true);
		$writer->setIndentString(' ');

		// builds xml document	
		$writer->startDocument('1.0', 'UTF-8');
		
		$writer->startElement('workout');

		$writer->startElement('workout_id');
		$writer->text($this->id);
		$writer->endElement();

		$writer->startElement('user_id');
		$writer->text($this->user_id);
		$writer->endElement();
		
		$writer->startElement('activity_id');
		$writer->text($this->activity_id);
		$writer->endElement();

		$writer->startElement('start');
		$writer->text($this->start);
		$writer->endElement();

		$writer->startElement('duration');
		$writer->text($this->duration);
		$writer->endElement();

		$writer->endElement();

		$writer->endDocument();
		
		return $writer->outputMemory();
	}

	/*
	 * Prints out the Workout into a template
	 * @param Smarty Template
	 * @return String the output text
	 */
	public function display($template){
		$template->assign('username', $this->username);
		$template->assign('activity', $this->activity_name);
		$template->assign('start', date('jS M Y', $this->start) );
		$template->assign('time', date('H:iA', $this->start) );
		$template->assign('duration', $this->duration);
		$template->assign('kcal', $this->kcal);
		return $template->fetch();
	}
}
?>
