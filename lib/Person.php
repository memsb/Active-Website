<?php

/*
*	This class represents an individual on the website / web service.
*
*
*/
class Person{

	protected $user_id;
	protected $username;
	protected $password;
	protected $api_key;
	protected $email;
	protected $gender;
	protected $age;
	protected $weight;

	protected $db;

	public function __construct($db){
		$this->db = $db;
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
		$this->user_id = 	intval($data->user_id);
		$this->gender = 	strval($data->gender);	
		$this->age = 		intval($data->age);
		$this->weight = 	(float)$data->weight;
		$this->username = 	strval($data->username);
	}

	public function parse_registration($xmlstr){
		$data = new SimpleXMLElement($xmlstr);
		$this->api_key = $data->api_key;
		$this->user_id = $data->user_id;
	}

	public function create($data){
		$this->username = 	$data['username'];
		$this->password = 	$data['password'];
		$this->email = 		$data['email'];
		$this->gender = 	$data['gender'];	
		$this->age = 		$data['age'];
		$this->weight = 	$data['weight'];		
	}

	public function update(){
		$user_id = 	$this->db->clean($this->user_id);
		$username = 	$this->db->clean($this->username);
		$password = 	$this->get_hash();
		$email = 	$this->db->clean($this->email);
		$api_key = 	$this->db->clean($this->api_key);
		$result = $this->db->query("UPDATE Users SET 	Username	= '$username', 
								Password	= '$password', 
								Email		= '$email',									
								API_Key		= '$api_key'
								WHERE User_ID	= '$user_id'");
	}

	public function save(){
		$user_id = 	$this->db->clean($this->user_id);
		$username = 	$this->db->clean($this->username);
		$password = 	$this->get_hash();
		$email = 	$this->db->clean($this->email);
		$api_key = 	$this->db->clean($this->api_key);
		$result = $this->db->query("INSERT INTO Users (	User_ID,
								Username, 
								Password, 
								Email,									
								API_Key
								) VALUES (	
								'$user_id',
								'$username',
								'$password',
								'$email',									
								'$api_key'
								)");
		$this->id = $this->db->insert_id();
	}

	public function delete(){
		$user_id = $this->db->clean($this->user_id);		
		$result = $this->db->query("DELETE FROM Users WHERE User_ID=$user_id");
	}

	public function load($theID){
		$id = $this->db->clean($theID);
		$result = $this->db->query("SELECT * FROM Users WHERE User_ID=$id");

		if( count($result) == 0 )
			throw new Exception('User not found.');

		$row = $result[0];
		$this->user_id = 	$row['User_ID'];
		$this->username = 	$row['Username'];
		$this->password = 	$row['Password'];
		$this->api_key = 	$row['API_Key'];
		$this->email = 		$row['Email'];
	}

	public function load_from_email($theEmail){
		$email = $this->db->clean($theEmail);
		$result = $this->db->query("SELECT User_ID FROM Users WHERE Email='$email'");

		if( count($result) == 0 )
			throw new Exception('User not found');

		$row = $result[0];
		$this->load($row['User_ID']);
	}

	protected function get_hash(){
		return hash('sha256', $this->email . $this->password);
	}

	public static function exists($db, $email){
		$result = $db->query("SELECT User_ID FROM Users WHERE Email='$email'");
		if( count($result) == 0 )
			return False;
		return True;
	}

	public function set_password($password, $activation){
		$user_id = 	$this->db->clean($this->user_id);
		$password = 	$this->db->clean($thePassword);
		$activation = 	$this->db->clean($theActivation);
		$result = $this->db->query("UPDATE Users SET 	Password	= '$password', 
								Activation	= NULL
								WHERE User_ID	= '$user_id'
								AND Activation	= '$activation' ");
	}

	public function getXML(){
		$writer = new XMLWriter();
		$writer->openMemory();
		$writer->setIndent(true);
		$writer->setIndentString(' ');

		// builds xml document	
		$writer->startDocument('1.0', 'UTF-8');
		
		$writer->startElement('user');

		$writer->startElement('username');
		$writer->text($this->username);
		$writer->endElement();
		
		$writer->startElement('age');
		$writer->text($this->age);
		$writer->endElement();

		$writer->startElement('weight');
		$writer->text($this->weight);
		$writer->endElement();

		$writer->startElement('gender');
		$writer->text($this->gender);
		$writer->endElement();

		$writer->endElement();

		$writer->endDocument();
		
		return $writer->outputMemory();
	}

	public function display($template){
		$template->assign('username', $this->username);
		$template->assign('age', $this->age);
		$template->assign('weight', $this->weight);
		$template->assign('gender', $this->gender);
		return $template->fetch();
	}

	public function display_list($template){
		$template->assign('id', $this->user_id);
		$template->assign('username', $this->username);
		return $template->fetch();
	}

}
?>
