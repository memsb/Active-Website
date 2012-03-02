<?php /* Smarty version Smarty-3.1.7, created on 2012-02-05 21:28:04
         compiled from "/var/www/Active-Website/smarty/templates/activation_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8083116854f2ef4642d8145-33001158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0636c90a94af30b0d6fdf91ca46d97d2438cc2d1' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activation_email.tpl',
      1 => 1328476898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8083116854f2ef4642d8145-33001158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2ef4644cce6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2ef4644cce6')) {function content_4f2ef4644cce6($_smarty_tpl) {?>Thank you for registering at Active.com. To confirm this as your email address please click on the following link:
http://localhost/Active-Website/Register?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&activation=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>

<?php }} ?>