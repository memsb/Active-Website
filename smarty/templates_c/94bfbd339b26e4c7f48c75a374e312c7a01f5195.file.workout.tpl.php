<?php /* Smarty version Smarty-3.1.7, created on 2012-03-08 21:32:57
         compiled from "smarty/templates/workout/workout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20299148644f592589b3ab93-95762258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94bfbd339b26e4c7f48c75a374e312c7a01f5195' => 
    array (
      0 => 'smarty/templates/workout/workout.tpl',
      1 => 1331123587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20299148644f592589b3ab93-95762258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'start' => 0,
    'time' => 0,
    'duration' => 0,
    'kcal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f592589cca6e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f592589cca6e')) {function content_4f592589cca6e($_smarty_tpl) {?><div class="workout">
	<h3><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
	<p>Date: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
</p>
	<p>Time: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</p>
	<p>Duration: <?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
 minutes</p>
	<p>Calories Burned: <?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
kcal</p>
</div>

<?php }} ?>