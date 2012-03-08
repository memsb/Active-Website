<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:32:57
         compiled from "smarty/templates/activity/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9456353184f592589ce5170-42510051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15bd7bc9cbf0bc584f7e0ecd7a57a03e67af63b' => 
    array (
      0 => 'smarty/templates/activity/activity.tpl',
      1 => 1331123450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9456353184f592589ce5170-42510051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'kcal' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f592589d5e19',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f592589d5e19')) {function content_4f592589d5e19($_smarty_tpl) {?><div class="activity">
	<h3 class="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
 Kcal/Hour</p>
	<div class="entry">
		<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
	</div>
</div>
<?php }} ?>