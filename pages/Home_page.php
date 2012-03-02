<?php

require_once PAGES . 'Page.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * The home page currently doesn't do very much and needs revision
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

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$content = $this->logged_out();	
		$page->assign('content', $content);
		$page->display();
	}

	private function logged_out(){
		$welcome = $this->smarty->createTemplate('welcome.tpl');
		return $welcome->fetch();
	}

}

?>
