<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:34:10
         compiled from "smarty/templates/pagify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19656852494f5925d2bc1959-54399690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eb87ed2cf4febf2fbf19212dab61d8f63fb6cda' => 
    array (
      0 => 'smarty/templates/pagify.tpl',
      1 => 1331056783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19656852494f5925d2bc1959-54399690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5925d2bfbe0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5925d2bfbe0')) {function content_4f5925d2bfbe0($_smarty_tpl) {?><div class="pages">
	<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

<div class="clear"></div>
<div id="page_nav"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</div>
</div>

<?php }} ?>