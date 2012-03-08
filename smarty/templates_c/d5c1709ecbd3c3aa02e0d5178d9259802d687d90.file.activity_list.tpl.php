<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 16:16:27
         compiled from "smarty/templates/activity/activity_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20780811954f58db5baf3194-53811174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c1709ecbd3c3aa02e0d5178d9259802d687d90' => 
    array (
      0 => 'smarty/templates/activity/activity_list.tpl',
      1 => 1331055948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20780811954f58db5baf3194-53811174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f58db5bb8ab7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f58db5bb8ab7')) {function content_4f58db5bb8ab7($_smarty_tpl) {?><div id="activities">
	<h3>Activities</h3>	
	<h4>Order by:</h4>
	<div id="order">
		<div class="order-option">
			Name<br/>
			<a href="activities?name=asc"><img src="images/up.png"/></a>
			<a href="activities?name=desc"><img src="images/down.png"/></a>
		</div>
		<div class="order-option">
			Kcal<br/>
			<a href="activities?kcal=asc"><img src="images/up.png"/></a>
			<a href="activities?kcal=desc"><img src="images/down.png"/></a>
		</div>
	</div>
	<div class="clear"></div>
	<ul id="">
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>