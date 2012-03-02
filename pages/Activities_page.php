<?php

require_once PAGES . 'Page.php';
require_once LIB . 'Activities.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 *
 *
 */
class Activities_page extends Page {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Activities';

	private $activities;

	/*
	 * Page constructor
	 * Calls constructor on Page
	 * Creates and attempts to load activities
	 */
	public function __construct(){
		parent::__construct();
		$this->activities = new Activities();
		$response = $this->xmlGET(EXERCISER . 'activities/');
		switch ($response['code']) {
			case 200:
				$this->activities->parse($response['body']);
				break;
			default:
				break;
		}			
	}

	/*
	 * Get request on page
	 * Uses get parameters to sort the data based on the selected field
	 * @param Array of parameters
	 */
	public function get($data){
		if( isset($data['name']) )
			if( strcmp($data['name'], 'asc') == 0 )
				$this->activities->sort_asc_name();
			else
				$this->activities->sort_desc_name();

		if( isset($data['kcal']) )
			if( strcmp($data['kcal'], 'asc') == 0 )
				$this->activities->sort_asc_kcal();
			else
				$this->activities->sort_desc_kcal();
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
		$page->assign('content', $this->list_activities());
		$page->display();
	}

	/*
	 * Prints the currently loaded activities
	 * @return String the printed activities
	 */
	private function list_activities(){
		$activity_item = $this->smarty->createTemplate('activity/activity_item.tpl');
		$activity_list = $this->smarty->createTemplate('activity/activity_list.tpl');		
		return $this->activities->display($activity_list, $activity_item);
	}
}

?>
