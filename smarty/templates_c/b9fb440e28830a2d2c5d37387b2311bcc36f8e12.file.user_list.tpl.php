<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 14:58:22
         compiled from "/var/www/Active-Website/smarty/templates/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7150307604f2d46e70acde9-06156242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9fb440e28830a2d2c5d37387b2311bcc36f8e12' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/user_list.tpl',
      1 => 1328367421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7150307604f2d46e70acde9-06156242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2d46e72594b',
  'variables' => 
  array (
    'id' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2d46e72594b')) {function content_4f2d46e72594b($_smarty_tpl) {?><li><a href="Profile?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>

<?php }} ?>