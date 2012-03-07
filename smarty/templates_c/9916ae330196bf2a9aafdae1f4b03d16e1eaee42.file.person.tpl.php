<?php /* Smarty version Smarty-3.1.7, created on 2012-03-07 12:32:05
         compiled from "/var/www/Active-Website/smarty/templates/person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1312526474f2c7ee9389092-38912641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9916ae330196bf2a9aafdae1f4b03d16e1eaee42' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/person.tpl',
      1 => 1331123519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1312526474f2c7ee9389092-38912641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2c7ee952e9b',
  'variables' => 
  array (
    'username' => 0,
    'gender' => 0,
    'age' => 0,
    'weight' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2c7ee952e9b')) {function content_4f2c7ee952e9b($_smarty_tpl) {?><div class="user">
	<h3><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
 years old</p>
	<p>Weight: <?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
kg</p>
</div>
<?php }} ?>