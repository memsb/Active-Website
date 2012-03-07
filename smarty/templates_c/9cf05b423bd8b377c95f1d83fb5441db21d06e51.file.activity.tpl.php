<?php /* Smarty version Smarty-3.1.7, created on 2012-03-07 12:32:04
         compiled from "/var/www/Active-Website/smarty/templates/activity/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9164092524f2db8da64da74-96480076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf05b423bd8b377c95f1d83fb5441db21d06e51' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity/activity.tpl',
      1 => 1331123450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9164092524f2db8da64da74-96480076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db8da7c000',
  'variables' => 
  array (
    'name' => 0,
    'kcal' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db8da7c000')) {function content_4f2db8da7c000($_smarty_tpl) {?><div class="activity">
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