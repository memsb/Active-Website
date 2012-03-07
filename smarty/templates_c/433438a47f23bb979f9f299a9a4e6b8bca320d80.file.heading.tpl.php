<?php /* Smarty version Smarty-3.1.7, created on 2012-03-07 13:37:26
         compiled from "/var/www/Active-Website/smarty/templates/calendar/heading.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4474791984f4b80f790a3c2-67211573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433438a47f23bb979f9f299a9a4e6b8bca320d80' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/calendar/heading.tpl',
      1 => 1331127414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4474791984f4b80f790a3c2-67211573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4b80f7a6ebc',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4b80f7a6ebc')) {function content_4f4b80f7a6ebc($_smarty_tpl) {?><tr>
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