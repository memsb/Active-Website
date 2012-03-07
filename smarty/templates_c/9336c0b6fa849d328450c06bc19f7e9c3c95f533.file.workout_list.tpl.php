<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 20:59:02
         compiled from "/var/www/Active-Website/smarty/templates/workout/workout_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19536998164f2db7f7841887-32450245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9336c0b6fa849d328450c06bc19f7e9c3c95f533' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout/workout_list.tpl',
      1 => 1331067517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19536998164f2db7f7841887-32450245',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db7f7991e3',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db7f7991e3')) {function content_4f2db7f7991e3($_smarty_tpl) {?><div id="workouts">
	<h3>Workouts</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>