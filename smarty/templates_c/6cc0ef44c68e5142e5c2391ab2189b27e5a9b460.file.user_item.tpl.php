<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:34:10
         compiled from "smarty/templates/user/user_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12191947674f5925d29116b0-08106939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc0ef44c68e5142e5c2391ab2189b27e5a9b460' => 
    array (
      0 => 'smarty/templates/user/user_item.tpl',
      1 => 1331063692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12191947674f5925d29116b0-08106939',
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
  'unifunc' => 'content_4f5925d2a7bd2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5925d2a7bd2')) {function content_4f5925d2a7bd2($_smarty_tpl) {?><li><div class="user"><a href="Profile?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></div></li>

<?php }} ?>