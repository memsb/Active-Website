<?php

// put full path to Smarty.class.php
require(LIB . 'php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(SMARTY . 'templates');
$smarty->setCompileDir(SMARTY . 'templates_c');
$smarty->setCacheDir(SMARTY . 'cache');
$smarty->setConfigDir(SMARTY . 'configs');


?>
