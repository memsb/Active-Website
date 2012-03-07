<?php

require_once PAGES . 'Page.php';
require_once LIB . 'Person.php';
require_once LIB . 'Persons.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Displays a full list of site users split in to multiple pages
 */
class Users_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Users';

	const SIZE = 30;
	private $start = 0;
	private $persons;

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();		
		$this->persons = new Persons($this->db);
		$response = $this->xmlGET(EXERCISER . 'users/');		
		switch ($response['code']) {
			case 200:
				$this->persons->parse($response['body']);
				break;
			default:
				break;
		}
	}

	/*
	 * Get request on page
	 * uses passed parameters to display requested page of users list
	 * @param Array of parameters
	 */
	public function get($data){
		if( isset($data['start']) ){
			$this->start = intval($data['start']);
			if( $this->start < 0 )
				$this->start = 0;
		}
	}

	/*
	 * Standard page visit
	 * Displays a list of activities
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$page->assign('content', $this->list_users());
		$page->display();
	}

	/*
	 * Creates a list of users in multiple pages.
	 * @return String the users list
	 */
	public function list_users(){		
		$template_list = $this->smarty->createTemplate('user/users_list.tpl');
		$template = $this->smarty->createTemplate('user/user_item.tpl');
		$pager = $this->smarty->createTemplate('pagify.tpl');

		$num = $this->persons->size();
		$page = floor($this->start / Users_page::SIZE)+1;
		$pages = ceil($num / Users_page::SIZE);		

		$next = $this->start + Users_page::SIZE;
		$prev = $this->start - Users_page::SIZE;

		$pager->assign('nav', "<a href=\"users?start=$prev\">< Previous</a> Page $page of $pages <a href=\"users?start=$next\">Next ></a>");

		if( $page <= 1 )			
			$pager->assign('nav', " Page $page of $pages <a href=\"users?start=$next\">Next ></a>");

		if( $page >= $pages )
			$pager->assign('nav', "<a href=\"users?start=$prev\">< Previous</a> Page $page of $pages ");
		
		$list = $this->persons->display($template_list, $template, $this->start, Users_page::SIZE);
		$pager->assign('list', $list);
		return $pager->fetch();
	}
}

?>
