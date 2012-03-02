<?php /* Smarty version Smarty-3.1.7, created on 2012-02-28 20:36:34
         compiled from "/var/www/Active-Website/smarty/templates/change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5397180384f4d3ad2c3cf38-99076359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c131505190a9b1350b40174b57980f2c0736e00' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/change_password.tpl',
      1 => 1330461362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5397180384f4d3ad2c3cf38-99076359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4d3ad2dbc80',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4d3ad2dbc80')) {function content_4f4d3ad2dbc80($_smarty_tpl) {?><div class="post">
	<h2 class="title">Change Password</h2>
	<p>Please confirm your identity by entering your password.</p>
	<div class="entry">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<h3>New Password</h3>
			<input type="password" name="new_password" size="40"/>
			<h3>Repeat Password</h3>
			<input type="password" name="new_password_confirm" size="40"/>
			<h3>Current Password</h3>
			<input type="password" name="password" size="40"/>
			<br>
			<input type="submit" value="Update" />
		</form>
	</div>
</div>
<?php }} ?>