<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 22:58:18
         compiled from "/var/www/Active-Website/smarty/templates/workout/workout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10620883574f2db80ae9c938-73672568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126192fca9d65dfb46962893c04daccb037e163b' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout/workout.tpl',
      1 => 1328391218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10620883574f2db80ae9c938-73672568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'start' => 0,
    'duration' => 0,
    'kcal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db80b0fbfe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db80b0fbfe')) {function content_4f2db80b0fbfe($_smarty_tpl) {?><div class="workout">
	<h3><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
	<p>Start: <?php echo $_smarty_tpl->tpl_vars['start']->value;?>
</p>
	<p>Duration: <?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
</p>
	<p>Calories Burned: <?php echo $_smarty_tpl->tpl_vars['kcal']->value;?>
</p>
</div>

<?php }} ?>