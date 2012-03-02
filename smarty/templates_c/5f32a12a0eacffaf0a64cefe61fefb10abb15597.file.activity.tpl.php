<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 14:59:25
         compiled from "/var/www/Active-Website/smarty/templates/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5552108284f25b384681114-56529542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f32a12a0eacffaf0a64cefe61fefb10abb15597' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity.tpl',
      1 => 1328367561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5552108284f25b384681114-56529542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f25b3849e27a',
  'variables' => 
  array (
    'name' => 0,
    'kcal' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f25b3849e27a')) {function content_4f25b3849e27a($_smarty_tpl) {?><div class="activity">
	<h3 class="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
	<p>Kcal/Hour: <?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
</p>
	<div class="entry">
		<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
	</div>
</div>
<?php }} ?>