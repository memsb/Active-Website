<?php /* Smarty version Smarty-3.1.7, created on 2012-02-03 20:33:17
         compiled from "/var/www/Active-Website/smarty/templates/chart_call.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16094107364f2c448d192545-58662285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0c5dccf7c5759c9bb805c0089c9ef1122a2943' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/chart_call.tpl',
      1 => 1328299685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16094107364f2c448d192545-58662285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'id' => 0,
    'data' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2c448d2d8ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2c448d2d8ac')) {function content_4f2c448d2d8ac($_smarty_tpl) {?>// Instantiate and draw our chart, passing in some options.
var chart = new google.visualization.<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
(document.getElementById('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'));
chart.draw(<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['options']->value;?>
);
<?php }} ?>