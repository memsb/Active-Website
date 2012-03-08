<?php

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Activity encapsulates the properties and functions of an activity
 * @namespace active
 */
class Activity{

	private $id;
	private $name;
	private $description;
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
		$this->id = 		intval($data->activity_id);
		$this->name = 		strval($data->activity_name);
		$this->description = 	strval($data->description);
		$this->kcal = 		intval($data->kcal_hour);
	}

	/*
	 * Prints out the Activity into a template
	 * @param Smarty Template
	 * @return String the output text
	 */
	public function display($template){
		$template->assign('id', $this->id);
		$template->assign('name', $this->name);
		$template->assign('kcal', $this->kcal);
		$template->assign('description', $this->description);
		return $template->fetch();
	}
}
?>
