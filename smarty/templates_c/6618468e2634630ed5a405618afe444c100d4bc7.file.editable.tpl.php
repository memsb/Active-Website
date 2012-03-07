<?php /* Smarty version Smarty-3.1.7, created on 2012-03-07 12:56:21
         compiled from "/var/www/Active-Website/smarty/templates/workout/editable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11905503974f4fec582437f8-66457468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6618468e2634630ed5a405618afe444c100d4bc7' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout/editable.tpl',
      1 => 1331124977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11905503974f4fec582437f8-66457468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4fec584988b',
  'variables' => 
  array (
    'edit_link' => 0,
    'delete_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4fec584988b')) {function content_4f4fec584988b($_smarty_tpl) {?><div class="edit">
	<a href="<?php echo $_smarty_tpl->tpl_vars['edit_link']->value;?>
">Edit Workout</a>
</div>
<div class="delete">
	<form method="POST" action="Delete_Workout">
		<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['delete_id']->value;?>
">
		<input type="submit" value="Delete Workout" />
	</form>
</div>
<?php }} ?>