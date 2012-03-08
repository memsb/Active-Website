<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:14:59
         compiled from "smarty/templates/calendar/heading.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17762629794f592153f40596-42815040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eebf0693914c17c9b3fe4c09d226724cee63f30' => 
    array (
      0 => 'smarty/templates/calendar/heading.tpl',
      1 => 1331127414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17762629794f592153f40596-42815040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f592154245f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f592154245f5')) {function content_4f592154245f5($_smarty_tpl) {?><tr>
	<form>
		<th id="calendar_title" colspan="7">
			<div class="left">	
				<input type="button" value="< prev" onclick="view_month(-1)" />
			</div> 
			<div id="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
			<div class="right">
				<input type="button" value="next >" onclick="view_month(+1)" />
			</div> 	
		</th>
	</form>
</tr>
<?php }} ?>