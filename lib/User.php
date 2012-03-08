<?php

require_once LIB . 'Person.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * User extends Person to become the object that handles the current site user
 * @namespace active
 */
class User extends Person {	

	/*
	 * Constructor requries a database
	 * @param Database
	 */
	public function __construct($db){
		parent::__construct($db);
	}

	/*
	 * Checks if a user is currently logged in
	 * @return Boolean is the person logged in
	 */
	public function isLoggedIn(){
		return isset($_SESSION['user']);
	}

	/*
	 * Attempts to log a user in
	 * @param String password
	 * @param String email address
	 */
	public function login($email, $password){
		$hash = $this->hash($email, $password);
		$result = $this->db->query("SELECT User_ID FROM Users WHERE Email='$email' AND Password='$hash' LIMIT 0,1");
		if( count($result) == 0 )
			throw new Exception("Incorrect password.");
		
		$id = $result[0]['User_ID'];
		$this->load($id);
		$_SESSION['user'] = $this;
	}	

	public function logout(){
		session_destroy();
	}
}
?>
