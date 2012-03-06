<?php /* Smarty version Smarty-3.1.7, created on 2012-03-04 16:25:36
         compiled from "/var/www/Active-Website/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20615714814f20fde2b25192-61777664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d3c8befaf81853addcafeb861ab9d708679c8da' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/index.tpl',
      1 => 1330878331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20615714814f20fde2b25192-61777664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f20fde2ba183',
  'variables' => 
  array (
    'page' => 0,
    'javascript' => 0,
    'heading' => 0,
    'content' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f20fde2ba183')) {function content_4f20fde2ba183($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Active <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? '' : $tmp);?>
</title>
<!--
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<link type="text/css" href="jquery-ui/css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="jquery-ui/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['javascript']->value)===null||$tmp==='' ? '' : $tmp);?>
"></script>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['heading']->value)===null||$tmp==='' ? '' : $tmp);?>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="banner">
				<div id="logo"><a href="homepage"></a></div>
				<h1><a href="#">Active</a></h1>
				<p>Where being active really counts</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='Homepage'){?>class="current_page_item"<?php }?>><a href="Homepage">Homepage</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='Users'){?>class="current_page_item"<?php }?>><a href="Users">Users</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='Workouts'){?>class="current_page_item"<?php }?>><a href="Workouts">Workouts</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='Activities'){?>class="current_page_item"<?php }?>><a href="Activities">Activities</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='About'){?>class="current_page_item"<?php }?>><a href="About">About</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='Links'){?>class="current_page_item"<?php }?>><a href="Links">Links</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value=='Contact'){?>class="current_page_item"<?php }?>><a href="Contact">Contact</a></li>
			</ul>
		</div>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
						
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<?php echo (($tmp = @$_smarty_tpl->tpl_vars['menu']->value)===null||$tmp==='' ? '' : $tmp);?>
						
						</ul>
					</div>
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2012 Active.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/"> CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
<?php }} ?>