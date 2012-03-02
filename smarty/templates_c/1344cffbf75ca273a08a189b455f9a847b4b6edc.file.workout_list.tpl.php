<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 22:56:21
         compiled from "/var/www/Active-Website/smarty/templates/workout_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5608146574f2d546248bb34-53017385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1344cffbf75ca273a08a189b455f9a847b4b6edc' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout_list.tpl',
      1 => 1328370843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5608146574f2d546248bb34-53017385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2d54626b175',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2d54626b175')) {function content_4f2d54626b175($_smarty_tpl) {?><div class="workouts">
	<h3>Workouts</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>