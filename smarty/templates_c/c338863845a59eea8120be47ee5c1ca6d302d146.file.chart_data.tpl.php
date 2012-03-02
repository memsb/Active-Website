<?php /* Smarty version Smarty-3.1.7, created on 2012-02-03 21:01:51
         compiled from "/var/www/Active-Website/smarty/templates/chart_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7722484224f2c471750e419-12472614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c338863845a59eea8120be47ee5c1ca6d302d146' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/chart_data.tpl',
      1 => 1328302305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7722484224f2c471750e419-12472614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2c471764af3',
  'variables' => 
  array (
    'name' => 0,
    'category' => 0,
    'units' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2c471764af3')) {function content_4f2c471764af3($_smarty_tpl) {?>var <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 = new google.visualization.DataTable();
			data.addColumn('string', '<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
');
			data.addColumn('number', '<?php echo $_smarty_tpl->tpl_vars['units']->value;?>
');
			data.addRows(<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
);
<?php }} ?>