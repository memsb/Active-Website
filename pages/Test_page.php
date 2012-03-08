<?php

require_once LIB . 'Page.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * The home page currently doesn't do very much and needs revision
 * @namespace active
 */
class Test_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Testpage';
	private $homepage;
	private $chart_count = 0;
		
	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Standard page visit
	 * Displays a welcome message
	 */
	public function visit(){
		die("wee");
	}
}

?>
