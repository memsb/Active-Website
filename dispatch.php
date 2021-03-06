<?php
namespace active;

require_once 'config.php';
require_once LIB . 'smarty.php';

//Class autoloader automatically attempts to find and include undeclared classes
function autoload($class_name) {
	include PAGES . $class_name . '.php';
}

spl_autoload_register(__NAMESPACE__ . '\autoload');


// Parses the URI to find the requested page name
// Requires that the dispatcher is placed in the root directory
$root = dirname($_SERVER['SCRIPT_NAME']);
$uri = pathinfo($_SERVER['REDIRECT_URL']);
$page_requested = '';

if( strcmp($root, $uri['dirname']) == 0 )
	$page_requested = strtolower( $uri['filename'] );

// 404 if page not found.
if( ! isset($pages[$page_requested]) ){	
	header('Location: ' . NOT_FOUND);
	exit();
}

$controller = new $pages[$page_requested];
$controller->setSmarty($smarty);

if( count($_GET) != 0 )
	$controller->get($_GET);

if( count($_POST) != 0 )
	$controller->post($_POST);

$controller->visit();

?>
