<?php /* Smarty version Smarty-3.1.7, created on 2012-01-25 12:03:50
         compiled from "/var/www/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14430579144f1fefa685cb36-04042614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af94a78cb5992041f7726a1fdc753354de3c024' => 
    array (
      0 => '/var/www/smarty/templates/index.tpl',
      1 => 1327492333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14430579144f1fefa685cb36-04042614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f1fefa697027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1fefa697027')) {function content_4f1fefa697027($_smarty_tpl) {?><html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
  </body>
</html>
<?php }} ?>