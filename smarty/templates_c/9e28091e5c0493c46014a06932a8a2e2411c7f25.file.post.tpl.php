<?php /* Smarty version Smarty-3.1.7, created on 2012-01-26 07:16:50
         compiled from "/var/www/Active-Website/smarty/templates/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94853904f20fde2aaf690-32608915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e28091e5c0493c46014a06932a8a2e2411c7f25' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/post.tpl',
      1 => 1327559097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94853904f20fde2aaf690-32608915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'date' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f20fde2b1b04',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f20fde2b1b04')) {function content_4f20fde2b1b04($_smarty_tpl) {?><div class="post">
	<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	<p class="meta">Posted by <a href="#"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a> on <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
	<div class="entry">
		<p><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</p>
	</div>
</div>
<?php }} ?>