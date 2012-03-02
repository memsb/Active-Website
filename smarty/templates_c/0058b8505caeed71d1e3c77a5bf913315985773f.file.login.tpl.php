<?php /* Smarty version Smarty-3.1.7, created on 2012-02-05 21:31:37
         compiled from "/var/www/Active-Website/smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13225523314f242b434eb729-33469296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0058b8505caeed71d1e3c77a5bf913315985773f' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/login.tpl',
      1 => 1328477489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13225523314f242b434eb729-33469296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f242b435e1dd',
  'variables' => 
  array (
    'action' => 0,
    'reffer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f242b435e1dd')) {function content_4f242b435e1dd($_smarty_tpl) {?><h2>Login</h2>
<div id="login">
	<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
		<input type="hidden" name="reffer" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['reffer']->value)===null||$tmp==='' ? '' : $tmp);?>
">
		<h4>Email Address</h4>
		<input type="text" name="email" size="15" /><br>
		<h4>Password</h4>
		<input type="password" name="password" size="15" /><input type="submit" value="Login" /><br>	
		<a href="register">Register</a> | <a href="recovery">Password Recovery</a>
	</form>
</div>
<?php }} ?>