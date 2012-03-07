<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 17:45:51
         compiled from "/var/www/Active-Website/smarty/templates/activity/activity_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5935547414f2db55fac05f2-51354083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5a49937b5564e74299010d61d0b23eb3d18be35' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity/activity_list.tpl',
      1 => 1331055948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5935547414f2db55fac05f2-51354083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db55fbb5cb',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db55fbb5cb')) {function content_4f2db55fbb5cb($_smarty_tpl) {?><div id="activities">
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