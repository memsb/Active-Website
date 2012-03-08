<?php

require_once LIB . 'Page.php';
require_once LIB . 'Person.php';


/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows a user to recover a forgotton password to their email address
 * @namespace active
 */
class Recovery_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Recovery';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Get request on page
	 * 
	 * @param Array of parameters
	 */
	public function get($data){
		if( isset($data['id']) && isset($data['activation']) ){
			$page = $this->smarty->createTemplate('index.tpl');
			$page->assign('page', $this::PAGE_NAME);

			$menu  = $this->userMenu();
			$page->assign('menu', $menu->fetch());

			$reset = $this->smarty->createTemplate('reset.tpl');
			$reset->assign('action', $this::PAGE_NAME);
			$reset->assign('id', $data['id']);
			$reset->assign('activation', $data['activation']);
			$page->assign('content', $reset->fetch());
			$page->display();		
			exit();
		}		
	}

	/*
	 * Post request on page
	 * Sends out an update password email, or resets a password dependsing on passed parameters
	 * @param Array of parameters
	 */
	public function post($data){
		if( isset($data['email']) ){
			$this->reset_request();
		}
		if( isset($data['password']) ){
			$this->reset_password();
		}
	}

	/*
	 * Standard page visit
	 * Displays a form allowing a user to perform password recovery using their email address
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$recovery = $this->smarty->createTemplate('recovery.tpl');
		$recovery->assign('action', $this::PAGE_NAME);
		$page->assign('content', $recovery->fetch());
		$page->display();
	}

	/*
	 * Sends out an email containing a link that can be used to reset the users password
	 */
	private function reset_request(){
		$email = $data['email'];
		$person = new Person($this->db);
		$person->load_from_email($email);
		$template = $this->smarty->createTemplate('recovery_email.tpl');
		$person->send_activation($template);
	}

	/*
	 * Resets a users password
	 */
	private function reset_password(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());
		try{
			$this->validate();
			$person = new Person($this->db);
			$person->load($data['id']);
			$person->set_password($data['password'], $data['activation']);
			$recovered = $this->smarty->createTemplate('recovered.tpl');
			$page->assign('content', $recovered->fetch());
		}catch(Exception $e){
			$page->assign('content', $e->getMessage());
		}		
		$page->display();
	}

	/*
	 * Checks that the password is set and valid
	 */
	private function validate(){
		if( ! isset($data['password']) || ! isset($data['password_confirm']) )
			throw new Exception('Please specify a password.');

		if( strcmp($data['password'], $data['password_confirm']) )
			throw new Exception("Passwords do not match.");

		if( strlen($data['password']) < 6 )
			throw new Exception("Password must be at least 6 characters");
	}
}

?>
