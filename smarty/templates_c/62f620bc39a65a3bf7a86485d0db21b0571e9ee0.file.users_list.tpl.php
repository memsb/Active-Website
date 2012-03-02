<?php /* Smarty version Smarty-3.1.7, created on 2012-02-27 17:56:51
         compiled from "/var/www/Active-Website/smarty/templates/user/users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21028086804f4bc3e31c0518-48057555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f620bc39a65a3bf7a86485d0db21b0571e9ee0' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/user/users_list.tpl',
      1 => 1330364619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21028086804f4bc3e31c0518-48057555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4bc3e31d946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4bc3e31d946')) {function content_4f4bc3e31d946($_smarty_tpl) {?><div class="users">
	<h3>Users</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>