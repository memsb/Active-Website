<?php /* Smarty version Smarty-3.1.7, created on 2012-01-29 22:00:19
         compiled from "/var/www/Active-Website/smarty/templates/activity_large.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1326270804f25c173ee8566-61030461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb0c28d4385602c0f6a63c853163e6334098bcf' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity_large.tpl',
      1 => 1327874333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1326270804f25c173ee8566-61030461',
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
  'unifunc' => 'content_4f25c1741275e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f25c1741275e')) {function content_4f25c1741275e($_smarty_tpl) {?><div class="activity">
	<h2 class="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
	<p><?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
</p>
	<div class="entry">
		<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
	</div>
</div>
<?php }} ?>