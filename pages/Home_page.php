<?php

require_once LIB . 'Page.php';

/**
 * @author Martin Buckley - MBuckley@gmail.com
 * The home page displays graphs summerising a users week. Defaults to show user 1 if not logged in
 * @namespace active
 */
class Home_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Homepage';
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
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);
		$page->assign('javascript', SCRIPTS . 'home_page.js');

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$content = '';
		$content .= $this->logged_out();	
		$page->assign('content', $content);
		$page->display();
	}

	/*
	 * Displays a message to not logged in users.
	 * @return String the message
	 */
	private function logged_out(){
		$welcome = $this->smarty->createTemplate('welcome.tpl');
		return $welcome->fetch();
	}
}

?>
