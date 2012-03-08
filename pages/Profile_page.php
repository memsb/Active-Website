<?php

require_once LIB . 'Profile.php';
require_once PAGES . 'Users_page.php';
require_once PAGES . 'Profile_page.php';
require_once LIB . 'Workouts.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * Profile page displays information on the user specified by GET.
 * @namespace active
 */
class Profile_page extends Profile {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Profile';
	private $person;

	private $required = array('username', 'age', 'weight', 'gender');

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Get request on page
	 * Specifies the user id of the profile to display
	 * @param Array of parameters
	 */
	public function get($data){
		$this->id = $data['id'];
	}

	/*
	 * Post request on page
	 * Provided a user s logged in and valid data is submitted, updates users profile
	 * @param Array of parameters
	 */
	public function post($data){
		try{
			$this->validate($data);
		}catch(Exception $e){
			$this->message = $e->getMessage();
			return;
		}
		if( $this->user->isLoggedIn() ){
			$uid = $this->user->user_id;
			$person = $this->load_person($uid);
			foreach( $this->required as $field )
				$person->$field = $data[$field];
			$person->update();
			$xml_doc = $person->getXML();
			$response = $this->xmlPUT(EXERCISER . "users/$uid", $xml_doc);
			header('Location: ' . Profile_page::PAGE_NAME . "?id=$uid");
			exit();
		}
	}

	/*
	 * Standard page visit
	 * Displays a user details
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());			

		if( isset($this->id) ){
			$page->assign('content', $this->display_user($this->id));
		}elseif( $this->user->isLoggedIn() ){
			$page->assign('content', $this->display_self($this->user->user_id));
		}else{
			header('Location: ' . Users_page::PAGE_NAME);
			exit();
		}
		$page->display();
	}

	/*
	 * Displays the profile data for the specified user
	 * @param Int the users ID
	 * @return String the users profile data
	 */
	public function display_user($id){
		$content = '';
		try{
			$person = $this->load_person($id);
			$template = $this->smarty->createTemplate('person.tpl');
			$content .= $person->display($template);
		}catch(Exception $e){
			return 'User not found.';
		}
		$workouts = $this->load_workouts($id);
		$workout_list = $this->smarty->createTemplate('workout/workout_list.tpl');
		$workout_item = $this->smarty->createTemplate('workout/workout_item.tpl');
		$content .= $workouts->display($workout_list, $workout_item);		
		return $content;
	}

	/*
	 * Displays the users own profile data
	 * @param Int the users ID
	 * @return String the users profile data
	 */
	public function display_self($id){
		$content = '';
		try{
			$person = $this->load_person($id);
			$template = $this->smarty->createTemplate('edit_person.tpl');
			$template->assign('action', $this::PAGE_NAME);
			$content .= $person->display($template);
		}catch(Exception $e){
			return 'User not found.';
		}
		return $content;
	}

	/*
	 * Loads the workouts for the specified user
	 * @param Int users id
	 * @return Workouts instance
	 */
	private function load_workouts($id){
		$workouts = new Workouts();
		$response = $this->xmlGET(EXERCISER . "users/$id/workouts");
		switch($response['code']){
			case 200:
				$workouts->parse($response['body']);
				break;
			default:
				break;
		}
		return $workouts;
	}

	/*
	 * Validates the specified user data
	 * @param Array of user data
	 */
	private function validate($data){
		foreach($this->required as $requirement)
			if( isset($data[$requirement]) ){
				if(strlen($data[$requirement]) == 0)
					throw new Exception("Field: $requirement must not be empty.");
			}else{
				throw new Exception("Field: $requirement must not be empty.");
			}
	}
}

?>
