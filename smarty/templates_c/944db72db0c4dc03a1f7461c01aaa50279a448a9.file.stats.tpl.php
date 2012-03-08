<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:32:57
         compiled from "smarty/templates/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18576193344f592589dd1ef6-42229012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '944db72db0c4dc03a1f7461c01aaa50279a448a9' => 
    array (
      0 => 'smarty/templates/stats.tpl',
      1 => 1331062889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18576193344f592589dd1ef6-42229012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_count' => 0,
    'biggest_workout' => 0,
    'longest_workout' => 0,
    'most_kcal' => 0,
    'popular_activity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f592589ed296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f592589ed296')) {function content_4f592589ed296($_smarty_tpl) {?><div id="stats">
	<h1>Site Usage Statistics</h1>
	<div id="user_count">
		<h3>This site currently has <?php echo $_smarty_tpl->tpl_vars['user_count']->value;?>
 users.</h3>
	</div>
	<div id="biggest_workout">
		<h3>Biggest Workout</h3>		
		<?php echo $_smarty_tpl->tpl_vars['biggest_workout']->value;?>

	</div>
	<div id="longest_workout">
		<h3>Longest Workout</h3>		
		<?php echo $_smarty_tpl->tpl_vars['longest_workout']->value;?>

	</div>
	<div id="most_kcal">
		<h3>Most Kcal burned</h3>		
		<?php echo $_smarty_tpl->tpl_vars['most_kcal']->value;?>

	</div>
	<div id="popular_activity">
		<h3>Most Popular Activity</h3>	
		<?php echo $_smarty_tpl->tpl_vars['popular_activity']->value;?>

	</div>
</div>
<?php }} ?>