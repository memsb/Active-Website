<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:15:00
         compiled from "smarty/templates/calendar/current_day.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8003782284f5921542f9ec1-49555930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf18a65897a31062129c97e7881056160ccd982' => 
    array (
      0 => 'smarty/templates/calendar/current_day.tpl',
      1 => 1331128571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8003782284f5921542f9ec1-49555930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f592154319ee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f592154319ee')) {function content_4f592154319ee($_smarty_tpl) {?><td class="today"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</td>
<?php }} ?>