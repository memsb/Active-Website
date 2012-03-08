<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:34:13
         compiled from "smarty/templates/workout/workout_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4075568204f5925d5c8a375-17698704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b20c70ce2d2a9ae4d4744e8484dd959acb9218b' => 
    array (
      0 => 'smarty/templates/workout/workout_list.tpl',
      1 => 1331067517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4075568204f5925d5c8a375-17698704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5925d5d0fc5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5925d5d0fc5')) {function content_4f5925d5d0fc5($_smarty_tpl) {?><div id="workouts">
	<h3>Workouts</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>