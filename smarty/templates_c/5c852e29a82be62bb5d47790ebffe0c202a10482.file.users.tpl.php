<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 20:56:59
         compiled from "/var/www/Active-Website/smarty/templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8047974524f2d9b9b2beda9-32017070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c852e29a82be62bb5d47790ebffe0c202a10482' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/users.tpl',
      1 => 1328388927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8047974524f2d9b9b2beda9-32017070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2d9b9b81281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2d9b9b81281')) {function content_4f2d9b9b81281($_smarty_tpl) {?><div class="users">
	<h3>Users</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>