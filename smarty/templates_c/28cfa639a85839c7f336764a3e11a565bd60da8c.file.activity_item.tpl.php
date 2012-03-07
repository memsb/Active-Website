<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 17:10:22
         compiled from "/var/www/Active-Website/smarty/templates/activity/activity_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20594053024f2db78cdfece9-51294250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28cfa639a85839c7f336764a3e11a565bd60da8c' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity/activity_item.tpl',
      1 => 1331053816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20594053024f2db78cdfece9-51294250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db78d00b08',
  'variables' => 
  array (
    'name' => 0,
    'kcal' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db78d00b08')) {function content_4f2db78d00b08($_smarty_tpl) {?><li>
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