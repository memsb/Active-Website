<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:34:10
         compiled from "smarty/templates/user/users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17971396204f5925d2b3dac2-58913212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01238c9e300fdafc887adbabeb978e6833280d4' => 
    array (
      0 => 'smarty/templates/user/users_list.tpl',
      1 => 1331056516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17971396204f5925d2b3dac2-58913212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5925d2b8de7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5925d2b8de7')) {function content_4f5925d2b8de7($_smarty_tpl) {?><div id="users">
	<h3>Users</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>