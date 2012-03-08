<?php

require_once LIB . 'Page.php';
require_once LIB . 'Person.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows new users to register with the site
 */
class Register_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Register';
	private $message = '';

	private $required = array('username', 'email', 'password', 'password_confirm', 'age', 'weight', 'gender');

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Post request on page
	 * PRocesses the users registration data and creates a new user
	 * @param Array of parameters
	 */
	public function post($data){
		try{
			$this->validate($data);
		}catch(Exception $e){
			$this->message = $e->getMessage();
			return;
		}

		$person = $this->make_person($data);
		$xml_doc = $person->getXML();
		$response = $this->xmlPOST(EXERCISER . 'users/', $xml_doc);
		switch($response['code']){
			case 201:
				$person->parse_registration($response['body']);
				$person->save();
				$this->user->login($person->email, $person->password);
				$registered = $this->smarty->createTemplate('registered.tpl');
				$result = $registered->fetch();
				break;
			default:
				$result = 'Unable to register.';
				break;
		}

		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());
		
		$page->assign('content', $result);

		$page->display();
		exit();
	}

	/*
	 * Standard page visit
	 * Displays a form allowing a user to register
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$register = $this->smarty->createTemplate('register.tpl');
		$register->assign('action', $this::PAGE_NAME);
		$page->assign('content', $this->message . $register->fetch());

		$page->display();
	}

	/*
	 * Checks that the person data provided is valid
	 * @param Array of person data
	 */
	private function validate($data){
		foreach($this->required as $requirement)
			if( isset($data[$requirement]) ){
				if(strlen($data[$requirement]) == 0)
					throw new Exception("Field: $requirement must not be empty.");
			}else{
				throw new Exception("Field: $requirement must not be empty.");
			}

		if( strcmp($data['password'], $data['password_confirm']) )
			throw new Exception("Passwords do not match.");

		if( strlen($data['password']) < 6 )
			throw new Exception("Password must be at least 6 characters");

		if( Person::exists($this->db, $data['email']) )
			throw new Exception('An account is already registered with that email, <a href="Recovery">recover password?</a>');
	}

	/*
	 * Creates a new person instance using the data provided
	 * @param Array of person data
	 * @return Person instance created
	 */
	private function make_person($data){
		$person = new Person($this->db);
		$person->create($data);
		return $person;
	}
}

?>
