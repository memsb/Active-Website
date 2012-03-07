<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 20:46:26
         compiled from "/var/www/Active-Website/smarty/templates/workout/workout_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20127096424f2db82e4dc2f1-74363042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddda8647a70e4f8a18cc02c770c551f201d651cd' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout/workout_item.tpl',
      1 => 1331065122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20127096424f2db82e4dc2f1-74363042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db82e7a8e9',
  'variables' => 
  array (
    'username' => 0,
    'start' => 0,
    'duration' => 0,
    'kcal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db82e7a8e9')) {function content_4f2db82e7a8e9($_smarty_tpl) {?><li>
	<div class="workout">
		<h3><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
		<p>Start: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
</p>
		<p>Duration: <?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
</p>
		<p>Calories Burned: <?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
</p>
	</div>
</li>

<?php }} ?>