<?php

require_once LIB . 'Profile.php';
require_once PAGES . 'Home_page.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Allows a user to update their password
 * @namespace active
 */
class Profile_Password_page extends Profile {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Profile_Password';
	
	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}
	
	/*
	 * Post request on page
	 * Updates the users password provided that they are logged in, provide a new password along with confirming their current
	 * @param Array of parameters
	 */
	public function post($data){
		// User must have supplied a password
		if( ! $this->valid_arg($data['new_password']) || ! $this->valid_arg($data['new_password_confirm']) ){
			$this->message = 'Please specify and repeat a new password<br/>';
			return;
		}
		if( ! $this->valid_arg($data['password']) ){
			$this->message = 'Please provide your current password<br/>';
			return;
		}
		$pass = $data['password'];
		$new_pass = $data['new_password'];
		$new_pass_confirm = $data['new_password_confirm'];
		if( strcmp($new_pass, $new_pass_confirm) != 0 ){
			$this->message = 'Passwords do not match<br/>';
			return;
		}
		
		// User must be logged in
		if( $this->user->isLoggedIn() ){
			$uid = $this->user->user_id;			
			try {
				$person = $this->load_person($uid);
				// Check password is correct
				$this->user->login($person->email, $pass);
				//update password
				$person->password = $new_pass;
				$person->update();				
			}catch(Exception $e){
				$this->message = 'Password incorrect';
				return;
			}
			$this->message = 'Password updated.';
		}
	}

	/*
	 * Standard page visit
	 * Displays a form allowing the user to change their password
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
		$form = $this->smarty->createTemplate('change_password.tpl');
		$form->assign('action', $this::PAGE_NAME);		
		$page->assign('content', $this->message . $form->fetch());
		$page->display();
	}
}

?>
