<?php /* Smarty version Smarty-3.1.7, created on 2012-02-28 19:16:49
         compiled from "/var/www/Active-Website/smarty/templates/change_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11555005634f4d2821bddb77-26361453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771cce49bf02eb847e2762afb7edfb2bf20489b6' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/change_email.tpl',
      1 => 1330455924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11555005634f4d2821bddb77-26361453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4d2821d3c32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4d2821d3c32')) {function content_4f4d2821d3c32($_smarty_tpl) {?><div class="post">
	<h2 class="title">Change Email</h2>
	<p>Please update your Email address and confirm your identity by entering your password.</p>
	<div class="entry">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<h3>Email</h3>
			<input type="text" name="email" size="40"/>
			<h3>Password</h3>
			<input type="password" name="password" size="40"/>
			<br>
			<input type="submit" value="Update" />
		</form>
	</div>
</div>
<?php }} ?>