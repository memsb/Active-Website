<?php

require_once PAGES . 'Page.php';
require_once PAGES . 'Home_page.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * The logout page logs out a user and redirects them to the home page
 */
class Logout_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Logout';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}
	
	/*
	 * Standard page visit
	 * Logs the user out and redirects to home page
	 */
	public function visit(){		
		$this->user->logout();
		header('Location: ' . Home_page::PAGE_NAME);
		exit();
	}
}

?>
