<?php /* Smarty version Smarty-3.1.7, created on 2012-01-26 06:25:01
         compiled from "/var/www/active/smarty/templates/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5635262104f205b67a61cb4-04357839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fba387e4905b64b67ae672b53bc03dd08b5ed85' => 
    array (
      0 => '/var/www/active/smarty/templates/post.tpl',
      1 => 1327559097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5635262104f205b67a61cb4-04357839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f205b67b8ba3',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'date' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f205b67b8ba3')) {function content_4f205b67b8ba3($_smarty_tpl) {?><div class="post">
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