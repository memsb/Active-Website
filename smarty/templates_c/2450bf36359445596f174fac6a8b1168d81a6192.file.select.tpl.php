<?php /* Smarty version Smarty-3.1.7, created on 2012-03-03 15:09:02
         compiled from "/var/www/Active-Website/smarty/templates/activity/select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12711699264f523326de04c6-57335630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2450bf36359445596f174fac6a8b1168d81a6192' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity/select.tpl',
      1 => 1330787337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12711699264f523326de04c6-57335630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f52332702040',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f52332702040')) {function content_4f52332702040($_smarty_tpl) {?><select id="Activity" name="Activity">
<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

</select>
<?php }} ?>