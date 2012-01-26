<?php /* Smarty version Smarty-3.1.7, created on 2012-01-26 06:30:37
         compiled from "/var/www/active/smarty/templates/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:819374864f20efd54ab2e2-35630108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd853852a39bb0969baa4206bc22229a5b23b72a' => 
    array (
      0 => '/var/www/active/smarty/templates/account.tpl',
      1 => 1327559359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819374864f20efd54ab2e2-35630108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f20efd580e1f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f20efd580e1f')) {function content_4f20efd580e1f($_smarty_tpl) {?><li>
	<h2>Login</h2>
	<div id="login">
		<form method="POST" action="login.php">
			<input type="text" value="Username" name="username" size="15" /><br />
			<input type="password" name="password" size="15" /><input type="submit" value="Login" /><br />	
			<a href="">Register</a> | <a href="">Password Recovery</a>
		</form>
	</div>
</li>
<?php }} ?>