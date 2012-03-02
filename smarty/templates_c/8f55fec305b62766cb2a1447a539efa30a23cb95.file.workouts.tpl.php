<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 15:54:06
         compiled from "/var/www/Active-Website/smarty/templates/workouts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14444823614f2d4c8bc4cd66-40855914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f55fec305b62766cb2a1447a539efa30a23cb95' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workouts.tpl',
      1 => 1328370843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14444823614f2d4c8bc4cd66-40855914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2d4c8bda585',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2d4c8bda585')) {function content_4f2d4c8bda585($_smarty_tpl) {?><div class="workouts">
	<h3>Workouts</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>