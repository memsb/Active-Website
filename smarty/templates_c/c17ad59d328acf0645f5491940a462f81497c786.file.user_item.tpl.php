<?php /* Smarty version Smarty-3.1.7, created on 2012-02-27 17:56:51
         compiled from "/var/www/Active-Website/smarty/templates/user/user_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5247692644f4bc3e304ac62-96311207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17ad59d328acf0645f5491940a462f81497c786' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/user/user_item.tpl',
      1 => 1328367421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5247692644f4bc3e304ac62-96311207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4bc3e319ea9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4bc3e319ea9')) {function content_4f4bc3e319ea9($_smarty_tpl) {?><li><a href="Profile?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>

<?php }} ?>