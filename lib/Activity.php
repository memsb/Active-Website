<?php

/**
* A test class description
* @Author MARTIN
* @author martin
*/
class Activity{

	private $id;
	private $name;
	private $description;
	private $kcal;	

	public function __construct(){
	}

	public function __set($name, $value){
		$this->$name = $value;
	}

	public function __get($name){
		return $this->$name;
	}

	public function parse($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		$this->assign_data($data);
	}

	public function assign_data($data){	
		$this->id = 		intval($data->activity_id);
		$this->name = 		strval($data->activity_name);
		$this->description = 	strval($data->description);
		$this->kcal = 		intval($data->kcal_hour);
	}

	public function display($template){
		$template->assign('name', $this->name);
		$template->assign('kcal', $this->kcal);
		$template->assign('description', $this->description);
		return $template->fetch();
	}
}
?>
