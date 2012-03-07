<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 16:53:58
         compiled from "/var/www/Active-Website/smarty/templates/contact_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14632500594f24504cc18d06-53990117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3aa74487c7a963581d159fd36a384f5658b0a28' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/contact_form.tpl',
      1 => 1331052835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14632500594f24504cc18d06-53990117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f24504cd557d',
  'variables' => 
  array (
    'action' => 0,
    'username' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f24504cd557d')) {function content_4f24504cd557d($_smarty_tpl) {?><div id="contact">
	<h2 class="title">Contact us</h2>
	<div class="entry">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
			<h3>Name</h3>
			<input type="text" name="Username" size="40" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['username']->value)===null||$tmp==='' ? '' : $tmp);?>
"/>
			<br>&nbsp;
			<h3>Email</h3>
			<input type="text" name="Email" size="40" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
"/>
			<br>&nbsp;
			<h3>Message</h3>
			<textarea rows="20" cols="40" name="Message"></textarea>
			<br>&nbsp;
			<input type="submit" value="Send" /><br />
		</form>
	</div>
</div>
<?php }} ?>