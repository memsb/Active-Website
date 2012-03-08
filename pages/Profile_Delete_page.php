<?php

require_once LIB . 'Profile.php';
require_once PAGES . 'Home_page.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows a user to delete their account.
 * @namespace active
 */
class Profile_Delete_page extends Profile {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Delete_Profile';
	
	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}
	
	/*
	 * Post request on page
	 * Checks that the password provided is correct and the user is logged in before deleteing account and logging user out
	 * @param Array of parameters
	 */
	public function post($data){
		// User must have supplied a password
		if( ! $this->valid_arg($data['password']) || $this->valid_arg($data['password']) == 0 ){
			$this->message = 'Please provide a password';
			return;
		}
		
		// User must be logged in
		if( $this->user->isLoggedIn() ){
			$uid = $this->user->user_id;
			$pass = $data['password'];
			
			try {
				$person = $this->load_person($uid);
				// Check password is correct
				$this->user->login($person->email, $pass);
			}catch(Exception $e){
				$this->message = 'Password incorrect';
				return;
			}

			// send XML DELETE to service
			$response = $this->xmlDELETE(EXERCISER . "users/$uid");

			// Delete from database			
			$person->delete();

			// Log current user out
			$this->user->logout();

			header("Location: " . Home_page::PAGE_NAME);
			exit();
		}
	}

	/*
	 * Standard page visit
	 * Displays a form allowing the user to delete their profile
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

		// Request password confirmation
		$form = $this->smarty->createTemplate('close_account.tpl');
		$form->assign('action', $this::PAGE_NAME);		
		$page->assign('content', $this->message . $form->fetch());
		$page->display();
	}
}

?>
