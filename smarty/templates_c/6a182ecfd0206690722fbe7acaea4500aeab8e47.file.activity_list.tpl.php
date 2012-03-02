<?php /* Smarty version Smarty-3.1.7, created on 2012-02-04 22:47:43
         compiled from "/var/www/Active-Website/smarty/templates/activity_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3032551174f2db58f4ea7a5-38570758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a182ecfd0206690722fbe7acaea4500aeab8e47' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/activity_list.tpl',
      1 => 1328395366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3032551174f2db58f4ea7a5-38570758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f2db58f5e85b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2db58f5e85b')) {function content_4f2db58f5e85b($_smarty_tpl) {?><div class="activities">
	<h3>Activities</h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	</ul>
</div>

<?php }} ?>