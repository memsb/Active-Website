<?php

require_once PAGES . 'Page.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * Login page handles login attempts and displays an error message with login box on login failure
 */
class Login_page extends Page{

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = 'Login';

	private $message = '';

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		parent::__construct();
	}

	/*
	 * Post request on page
	 * Attempts to log a user in. Forwards them to the requested page on success, produces error on failure.
	 * @param Array of parameters
	 */
	public function post($data){
		if( ! isset($data['email']) || ! isset($data['password']) )
			return;

		$destination = '';
		if( isset($data['reffer']) )
			$destination = $data['reffer'];

		try{
			$this->user->login($data['email'], $data['password']);
		}catch(Exception $e){
			$this->message = $e->getMessage();
			return;
		}
		header('Location: ' . $destination);
		exit();
	}

	/*
	 * Standard page visit
	 * Displays a login box and error message if apropriate
	 */
	public function visit(){
		$page = $this->smarty->createTemplate('index.tpl');
		$page->assign('page', $this::PAGE_NAME);

		$login = $this->smarty->createTemplate('login.tpl');		
		$login->assign('action', $this::PAGE_NAME);

		$menu  = $this->userMenu();
		$page->assign('menu', $menu->fetch());

		$page->assign('content', $this->message . $login->fetch());
		$page->display();
	}
}

?>
