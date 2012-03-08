<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 16:16:27
         compiled from "smarty/templates/activity/activity_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8121387504f58db5b66fb67-93602532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbffae12080e1b4bc82ca32757f814612eb4f93a' => 
    array (
      0 => 'smarty/templates/activity/activity_item.tpl',
      1 => 1331053816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8121387504f58db5b66fb67-93602532',
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
  'unifunc' => 'content_4f58db5baae54',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f58db5baae54')) {function content_4f58db5baae54($_smarty_tpl) {?><li>
	<div class="activity">
		<h3 class="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
		<p>Kcal/Hour: <?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
</p>
		<div class="entry">
			<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
		</div>
	</div>
</li>
<?php }} ?>