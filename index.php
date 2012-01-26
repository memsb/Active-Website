<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');

class test {

	private $name = 'Martin';

	public function get(){
		$this->name = $_GET['name'];
	}

	public function post(){
	}

	public function visit(){
		$smarty = new Smarty();

		$smarty->setTemplateDir('/var/www/active/smarty/templates');
		$smarty->setCompileDir('/var/www/active/smarty/templates_c');
		$smarty->setCacheDir('/var/www/active/smarty/cache');
		$smarty->setConfigDir('/var/www/active/smarty/configs');


		$page = $smarty->createTemplate('index.tpl');
		$page->assign('title', $this->name);

		$account = $smarty->createTemplate('account.tpl');
		$menu = $smarty->createTemplate('menu.tpl');
		$page->assign('right', $account->fetch());

		$content = $smarty->createTemplate('post.tpl');		
		$content->assign('title', 'Title');
		$content->assign('name', 'Name');
		$content->assign('date', '25th January 2012');
		$content->assign('body', 'WEEEEEEEEEEeeeeeeeeeeeeeeeeee');
		$page->assign('content', $content->fetch());
		$page->display();
	}
}

$test = new test();

if( count($_POST) != 0 )
	$test->post();

if( count($_GET) != 0 )
	$test->get();

$test->visit();

?>
