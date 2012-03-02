<?php /* Smarty version Smarty-3.1.7, created on 2012-01-26 07:16:50
         compiled from "/var/www/Active-Website/smarty/templates/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9877598864f20fde29ce7b0-69560564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f81099aab8f6bf7a91778a6a826551bc1b049b' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/account.tpl',
      1 => 1327561988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9877598864f20fde29ce7b0-69560564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f20fde2a9f8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f20fde2a9f8d')) {function content_4f20fde2a9f8d($_smarty_tpl) {?><li>
	<h2>Login</h2>
	<div id="login">
		<form method="POST" action="index.php">
			<input type="text" value="Username" name="username" size="15" /><br />
			<input type="password" name="password" size="15" /><input type="submit" value="Login" /><br />	
			<a href="">Register</a> | <a href="">Password Recovery</a>
		</form>
	</div>
</li>
<?php }} ?>