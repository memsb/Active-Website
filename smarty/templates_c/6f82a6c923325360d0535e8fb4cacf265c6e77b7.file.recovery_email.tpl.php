<?php /* Smarty version Smarty-3.1.7, created on 2012-02-06 01:10:26
         compiled from "/var/www/Active-Website/smarty/templates/recovery_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15068215084f2f2882f3c248-27734392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f82a6c923325360d0535e8fb4cacf265c6e77b7' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/recovery_email.tpl',
      1 => 1328485184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15068215084f2f2882f3c248-27734392',
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
  'unifunc' => 'content_4f2f28831188d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2f28831188d')) {function content_4f2f28831188d($_smarty_tpl) {?>A request to reset your password has been sent from Active.com.
If you wish to reset your password please click the link below.
If this request was not submitted by you, please ignore it and your password will remain unchanged.
http://localhost/Active-Website/Recovery?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&activation=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>

<?php }} ?>