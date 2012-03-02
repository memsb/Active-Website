<?php

require_once PAGES . 'Page.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * The links page displays simple page content from a template file
 */
class Links_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Links';


	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Standard page visit
	 * Displays content from templates
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$links = $this->smarty->createTemplate('links.tpl');
		$page->assign('content', $links->fetch());
		$page->display();
	}
}

?>
