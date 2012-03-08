<?php

require_once LIB . 'Page.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * The contact page allows users registered and unregisterd to submit feedback
 * @namespace active
 */
class Contact_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Contact';

	private $form_submitted = False;
	private $required_fields = array('Username', 'Email', 'Message');
	private $fail_message = '';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Post request on page
	 * Processes the submitted form
	 * @param Array of data parameters
	 */
	public function post($data){
		foreach($this->required_fields as $field){
			if( ! $this->valid_arg($data[$field]) ){
				$this->fail_message .= "$field must not be blank.<br />";
				return;
			}
		}
		try{
			$username = 	$this->db->clean($data['Username']);
			$email = 	$this->db->clean($data['Email']);
			$message = 	$this->db->clean($data['Message']);
			$this->db->query("INSERT INTO Contact (Username, Email, Message) VALUES (\"$username\", \"$email\", \"$message\")");
		} catch(Exception $e){
			$this->fail_message .= "An error prevented your message from being submitted.<br />";
			return;
		}
		$this->form_submitted = True;
	}

	/*
	 * Standard page visit
	 * Displays a form allowing the submission of feedback
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		if( $this->form_submitted ){
			$contact = $this->smarty->createTemplate('contact_submitted.tpl');
		}else{
			$contact = $this->smarty->createTemplate('contact_form.tpl');
			$contact->assign('action', $this::PAGE_NAME);
			if( $this->user->isLoggedIn() ){
				$contact->assign('username', $this->user->username);
				$contact->assign('email', $this->user->email);
			}
		}

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$page->assign('content', $this->fail_message . $contact->fetch());
		$page->display();
	}
}

?>
