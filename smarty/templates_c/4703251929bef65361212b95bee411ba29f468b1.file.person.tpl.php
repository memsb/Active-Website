<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:32:57
         compiled from "smarty/templates/person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13151003224f592589d6b9f6-54309545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4703251929bef65361212b95bee411ba29f468b1' => 
    array (
      0 => 'smarty/templates/person.tpl',
      1 => 1331123519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13151003224f592589d6b9f6-54309545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'gender' => 0,
    'age' => 0,
    'weight' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f592589dc6ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f592589dc6ef')) {function content_4f592589dc6ef($_smarty_tpl) {?><div class="user">
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