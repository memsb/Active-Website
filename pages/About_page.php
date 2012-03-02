<?php

require_once PAGES . 'Page.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * The about page displays simple content form the about template
 */
class About_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'About';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Standard page visit
	 * Loads and displays templates
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());
		
		$about = $this->smarty->createTemplate('about.tpl');

		$page->assign('content', $about->fetch());
		$page->display();
	}
}

?>
