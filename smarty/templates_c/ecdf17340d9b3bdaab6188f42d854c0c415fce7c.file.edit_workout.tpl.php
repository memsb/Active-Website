<?php /* Smarty version Smarty-3.1.7, created on 2012-03-01 21:30:12
         compiled from "/var/www/Active-Website/smarty/templates/workout/edit_workout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8549380124f4fe956dd7084-28981734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecdf17340d9b3bdaab6188f42d854c0c415fce7c' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout/edit_workout.tpl',
      1 => 1330637277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8549380124f4fe956dd7084-28981734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f4fe95717441',
  'variables' => 
  array (
    'action' => 0,
    'activity' => 0,
    'start' => 0,
    'duration' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4fe95717441')) {function content_4f4fe95717441($_smarty_tpl) {?><div class="edit_workout">
	<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
		<h3>Activity</h3>
		<input type="text" name="Activity" size="40" value="<?php echo $_smarty_tpl->tpl_vars['activity']->value;?>
"/>
		<br>
		<h3>Start Time</h3>
		<input type="text" name="Start" size="40" value="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"/>
		<br>
		<h3>Duration</h3>
		<input type="text" name="Duration" size="40" value="<?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
"/>
		<br>
		<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
">
		<input type="submit" value="Update" />
	</form>
</div>

<?php }} ?>