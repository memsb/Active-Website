<?php /* Smarty version Smarty-3.1.7, created on 2012-02-27 17:56:51
         compiled from "/var/www/Active-Website/smarty/templates/pagify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9436997114f4bc3e31e4091-12121368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebc373469a0ef9fef0488760f63ab4f011bec2e' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/pagify.tpl',
      1 => 1330365320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9436997114f4bc3e31e4091-12121368',
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
  'unifunc' => 'content_4f4bc3e321a14',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4bc3e321a14')) {function content_4f4bc3e321a14($_smarty_tpl) {?><div class="pages">
	<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

<div class="page_nav"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</div>
</div>

<?php }} ?>