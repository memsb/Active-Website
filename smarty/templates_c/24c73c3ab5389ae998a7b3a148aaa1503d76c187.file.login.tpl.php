<?php /* Smarty version Smarty-3.1.7, created on 2012-03-07 21:11:34
         compiled from "smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10410465924f57cf06211146-29697832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24c73c3ab5389ae998a7b3a148aaa1503d76c187' => 
    array (
      0 => 'smarty/templates/login.tpl',
      1 => 1328477489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10410465924f57cf06211146-29697832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'reffer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f57cf064313b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f57cf064313b')) {function content_4f57cf064313b($_smarty_tpl) {?><h2>Login</h2>
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