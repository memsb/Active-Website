<?php /* Smarty version Smarty-3.1.7, created on 2012-02-03 20:34:14
         compiled from "/var/www/Active-Website/smarty/templates/chart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171692934f2c40e0600619-38499126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b09285761a051feb26c8b8d8273241173c602a' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/chart.tpl',
      1 => 1328301238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171692934f2c40e0600619-38499126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2c40e076396',
  'variables' => 
  array (
    'chart_call' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2c40e076396')) {function content_4f2c40e076396($_smarty_tpl) {?><!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table, 
// instantiates the chart, passes in the data and
// draws it.
function drawChart() {



<?php echo $_smarty_tpl->tpl_vars['chart_call']->value;?>

}
</script>
<?php }} ?>