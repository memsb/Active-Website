<?php /* Smarty version Smarty-3.1.7, created on 2012-03-02 19:05:16
         compiled from "/var/www/Active-Website/smarty/templates/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5059469124f511192449169-01071071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dceb63d942b30374d59dfb533eda02f6d6a88d55' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/stats.tpl',
      1 => 1330714870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5059469124f511192449169-01071071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f51119280fe3',
  'variables' => 
  array (
    'user_count' => 0,
    'biggest_workout' => 0,
    'longest_workout' => 0,
    'most_kcal' => 0,
    'popular_activity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f51119280fe3')) {function content_4f51119280fe3($_smarty_tpl) {?><div id="stats">
	<h1>Site Usage Statistics</h1>
	<div id="user_count">
		<h2>This site currently has <?php echo $_smarty_tpl->tpl_vars['user_count']->value;?>
 users.</h2>
	</div>
	<div id="biggest_workout">
		<h2>Biggest Workout</h2>		
		<?php echo $_smarty_tpl->tpl_vars['biggest_workout']->value;?>

	</div>
	<div id="longest_workout">
		<h2>Longest Workout</h2>		
		<?php echo $_smarty_tpl->tpl_vars['longest_workout']->value;?>

	</div>
	<div id="most_kcal">
		<h2>Most Kcal burned</h2>		
		<?php echo $_smarty_tpl->tpl_vars['most_kcal']->value;?>

	</div>
	<div id="popular_activity">
		<h2>Most Popular Activity</h2>	
		<?php echo $_smarty_tpl->tpl_vars['popular_activity']->value;?>

	</div>
</div>
<?php }} ?>