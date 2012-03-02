<?php

require_once LIB . 'Person.php';

/**
* A user is the current user of the site.
* @Author MARTIN
* @author martin
*/
class User extends Person {	

	public function __construct($db){
		parent::__construct($db);
	}

	public function isLoggedIn(){
		return isset($_SESSION['user_id']);
	}

	public function login($email, $password){
		$hash = $this->get_hash($email, $password);
		$result = $this->database->query('SELECT User_IDFROM Users WHERE Email="' . $email . '" AND Password="' . $hash . '" LIMIT 0,1');
		if( count($result) == 0 ){
			throw new Exception("Incorrect password.");
		}
		$row = $result[0];
		$_SESSION['user_id'] = $row['User_ID'];
	}	

	public function logout(){
		session_destroy();
	}
}
?>
