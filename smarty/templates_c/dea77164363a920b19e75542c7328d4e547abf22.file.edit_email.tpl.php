<?php /* Smarty version Smarty-3.1.7, created on 2012-02-06 04:50:51
         compiled from "/var/www/Active-Website/smarty/templates/edit_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13812402894f2f5c2b435f86-52395320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea77164363a920b19e75542c7328d4e547abf22' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/edit_email.tpl',
      1 => 1328503316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13812402894f2f5c2b435f86-52395320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2f5c2b5e7b2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2f5c2b5e7b2')) {function content_4f2f5c2b5e7b2($_smarty_tpl) {?><div class="post">
	<h2 class="title">Update Your Email Address</h2>
	<div class="entry">
		<form id="register" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<h3>Email</h3>
			<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 "size="30"/>
			<br>&nbsp;
			<input type="submit" value="Update" />
		</form>
	</div>
</div>
<?php }} ?>