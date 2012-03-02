<?php /* Smarty version Smarty-3.1.7, created on 2012-02-05 23:32:05
         compiled from "/var/www/Active-Website/smarty/templates/recovery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5950290724f257126e3f9f0-60107626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be2a770d235d5ae8cbab9cf017ed443d58da04f9' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/recovery.tpl',
      1 => 1328483474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5950290724f257126e3f9f0-60107626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f25712705e38',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f25712705e38')) {function content_4f25712705e38($_smarty_tpl) {?><div class="post">
	<h2 class="title">Password Recovery</h2>
	<div class="entry">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<p>To recover your password a verification email will be sent to your email.</p>
			<h3>Email</h3>
			<input type="text" name="email" size="40"/>
			<br>
			<input type="submit" value="Send" />
		</form>
	</div>
</div>
<?php }} ?>