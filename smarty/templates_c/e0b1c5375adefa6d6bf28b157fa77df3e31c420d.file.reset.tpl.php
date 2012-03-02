<?php /* Smarty version Smarty-3.1.7, created on 2012-02-06 03:30:05
         compiled from "/var/www/Active-Website/smarty/templates/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:509329474f2f2dd330c3f9-27478891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0b1c5375adefa6d6bf28b157fa77df3e31c420d' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/reset.tpl',
      1 => 1328492279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509329474f2f2dd330c3f9-27478891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2f2dd34e74a',
  'variables' => 
  array (
    'action' => 0,
    'id' => 0,
    'activation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2f2dd34e74a')) {function content_4f2f2dd34e74a($_smarty_tpl) {?><div class="post">
	<h2 class="title">Reset your password</h2>
	<form id="reset" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<input type="hidden" name="activation" value="<?php echo $_smarty_tpl->tpl_vars['activation']->value;?>
">			
		<h3>Password</h3>
		<input type="password" name="password" size="30"/> 
		<br>&nbsp;
		<h3>Confirm Password</h3>
		<input type="password" name="password_confirm" size="30"/>
		<br>&nbsp;
		<input type="submit" value="Reset" />
	</form>

</div>
<?php }} ?>