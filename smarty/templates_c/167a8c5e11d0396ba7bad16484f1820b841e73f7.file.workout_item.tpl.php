<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:34:13
         compiled from "smarty/templates/workout/workout_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5052016904f5925d5a9d359-03736416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '167a8c5e11d0396ba7bad16484f1820b841e73f7' => 
    array (
      0 => 'smarty/templates/workout/workout_item.tpl',
      1 => 1331065122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5052016904f5925d5a9d359-03736416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'start' => 0,
    'duration' => 0,
    'kcal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5925d5c6e3c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5925d5c6e3c')) {function content_4f5925d5c6e3c($_smarty_tpl) {?><li>
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