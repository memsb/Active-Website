<?php /* Smarty version Smarty-3.1.7, created on 2012-03-03 15:06:48
         compiled from "/var/www/Active-Website/smarty/templates/activity/select_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14893412554f5233881d84b4-79924319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4db3f2177f6206bc7f313a91af0ae8c0fbfea5e' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity/select_item.tpl',
      1 => 1330787074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14893412554f5233881d84b4-79924319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5233883d98b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5233883d98b')) {function content_4f5233883d98b($_smarty_tpl) {?><option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
<?php }} ?>