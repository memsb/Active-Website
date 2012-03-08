<?php

require_once LIB . 'Profile.php';
require_once PAGES . 'Home_page.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows a user to update their email address
 * @namespace active
 */
class Profile_Email_page extends Profile {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Profile_Email';
	
	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}
	
	/*
	 * Post request on page
	 * Changes the users email address provided that the user is logged in and has provided their password.
	 * A new password hash must be created using the users email address
	 * @param Array of parameters
	 */
	public function post($data){
		// User must have supplied a password
		if( ! $this->valid_arg($data['password']) || ! $this->valid_arg($data['email']) ){
			$this->message = 'Please provide an Email address and password';
			return;
		}
		$email = $data['email'];
		$pass = $data['password'];
		
		// User must be logged in
		if( $this->user->isLoggedIn() ){
			$uid = $this->user->user_id;
			
			try {
				$person = $this->load_person($uid);
				// Check password is correct
				$this->user->login($person->email, $pass);
				//update email
				$person->email = $email;
				$person->password = $pass;
				$person->update();				
			}catch(Exception $e){
				$this->message = 'Password incorrect';
				return;
			}
			$this->message = 'Email updated.';
		}
	}

	/*
	 * Standard page visit
	 * Displays a form allowing the user to update their email address
	 */
	public function visit(){
		// User must be logged in to view this page
		if( ! $this->user->isLoggedIn() ){
			header('Location: ' . Home_page::PAGE_NAME);
			exit();
		}

		// Display text telling user what they are about to do
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		// Request new email address & password confirmation
		$form = $this->smarty->createTemplate('change_email.tpl');
		$form->assign('action', $this::PAGE_NAME);		
		$page->assign('content', $this->message . $form->fetch());
		$page->display();
	}
}

?>
