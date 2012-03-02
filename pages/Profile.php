<?php

require_once PAGES . 'Page.php';
require_once LIB . 'Person.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * USed as a base class for profile functionality
 */
class Profile extends Page {

	protected $message = '';
	
	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Loads a person from the given ID
	 * @param Int the user ID
	 * @return Person instance
	 */
	protected function load_person($id){
		$person = new Person($this->db);
		$person->load($id);
		return $person;
	}
}

?>