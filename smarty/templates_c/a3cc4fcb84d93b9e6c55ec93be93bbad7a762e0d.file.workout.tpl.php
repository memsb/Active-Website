<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 21:33:41
         compiled from "/var/www/Active-Website/smarty/templates/workout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2721889694f2c709c9dbb06-63116617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3cc4fcb84d93b9e6c55ec93be93bbad7a762e0d' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout.tpl',
      1 => 1328391218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2721889694f2c709c9dbb06-63116617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2c709cbac30',
  'variables' => 
  array (
    'username' => 0,
    'start' => 0,
    'duration' => 0,
    'kcal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2c709cbac30')) {function content_4f2c709cbac30($_smarty_tpl) {?><div class="workout">
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