<?php /* Smarty version Smarty-3.1.7, created on 2012-02-06 04:47:29
         compiled from "/var/www/Active-Website/smarty/templates/edit_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1833502854f2f5ae8b36074-73043097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33df571cf09753880fb02cc4ec5229a3a74add2' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/edit_password.tpl',
      1 => 1328503551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833502854f2f5ae8b36074-73043097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2f5ae8c7905',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2f5ae8c7905')) {function content_4f2f5ae8c7905($_smarty_tpl) {?><div class="post">
	<h2 class="title">Update Your Password</h2>
	<div class="entry">
		<form id="register" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<h3>Password</h3>
			<input type="password" name="password" size="30"/>
			<br>&nbsp;
			<h3>Confirm Password</h3>
			<input type="password" name="password_confirm" size="30"/>
			<br>&nbsp;
			<input type="submit" value="Update" />
		</form>
	</div>
</div>
<?php }} ?>