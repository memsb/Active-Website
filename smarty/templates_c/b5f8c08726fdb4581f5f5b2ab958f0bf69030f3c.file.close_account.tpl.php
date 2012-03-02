<?php /* Smarty version Smarty-3.1.7, created on 2012-02-28 18:22:04
         compiled from "/var/www/Active-Website/smarty/templates/close_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2072544114f4d1b4c51ec28-50670084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f8c08726fdb4581f5f5b2ab958f0bf69030f3c' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/close_account.tpl',
      1 => 1330453006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2072544114f4d1b4c51ec28-50670084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4d1b4c64487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4d1b4c64487')) {function content_4f4d1b4c64487($_smarty_tpl) {?><div class="post">
	<h2 class="title">Account Deletion</h2>
	<p>In order to close your account please confirm your identity by entering your password. Once closed all details will be deleted and can not be recovered.</p>
	<div class="entry">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<h3>Password</h3>
			<input type="password" name="password" size="40"/>
			<br>
			<input type="submit" value="Close Account" />
		</form>
	</div>
</div>
<?php }} ?>