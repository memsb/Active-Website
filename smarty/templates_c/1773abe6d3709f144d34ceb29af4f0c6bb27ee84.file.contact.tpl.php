<?php /* Smarty version Smarty-3.1.7, created on 2012-01-28 19:39:17
         compiled from "/var/www/Active-Website/smarty/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10082669354f244dbceccf06-39823814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1773abe6d3709f144d34ceb29af4f0c6bb27ee84' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/contact.tpl',
      1 => 1327779501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10082669354f244dbceccf06-39823814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f244dbd0cd91',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f244dbd0cd91')) {function content_4f244dbd0cd91($_smarty_tpl) {?><div class="post">
	<h2 class="title">Contact us</h2>
	<div class="entry">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<input type="textarea" cols=20 rows=10 value="Username" name="username" size="15" /><br />
			<input type="password" name="password" size="15" /><br />
			<input type="submit" value="Login" /><br />
		</form>
	</div>
</div>
<?php }} ?>