<?php /* Smarty version Smarty-3.1.7, created on 2012-03-07 13:24:41
         compiled from "/var/www/Active-Website/smarty/templates/workout/workout_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11621756714f526f6c2cec50-12471976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0aeed8fb5f0fd4a39040ad7b3162fd3d3179c04' => 
    array (
      0 => '/var/www/Active-Website/smarty/templates/workout/workout_form.tpl',
      1 => 1331126680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11621756714f526f6c2cec50-12471976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f526f6c58266',
  'variables' => 
  array (
    'action' => 0,
    'activities' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f526f6c58266')) {function content_4f526f6c58266($_smarty_tpl) {?><div id="workout_details">
	<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
		<h3>Activity</h3>
		<?php echo $_smarty_tpl->tpl_vars['activities']->value;?>

		<br>
		<div class="Date">
			<h3>Date</h3>
			<div id="datepicker"></div>
			<input type="hidden" id="Start_date" name="Start_date">
		</div>

		<div class="Time">
			<h3>Time</h3>

			<div class="Slider">
				<label for="Start_time_hours">Hours</label>
				<div class="text_box">
					<input type="hidden" class="Start_time_hours" name="Start_time_hours">
					<input type="text" class="Start_time_hours" name="Start_time_hours" size="2" disabled="disabled">
				</div>
				<div class="bar">
					<div id="start-hours" style="height:150px;"></div>
				</div>
			</div>
			<div class="Slider">
				<label for="Start_time_mins">Minutes</label>
				<div class="text_box">
					<input type="hidden" class="Start_time_mins" name="Start_time_mins">
					<input type="text" class="Start_time_mins" name="Start_time_mins" size="2" disabled="disabled">
				</div>
				<div class="bar">
					<div id="start-mins" style="height:150px;"></div>
				</div>
			</div>
		</div>

		<div class="Time">
			<h3>Duration</h3>

			<div class="Slider">
				<label for="Duration_hours">Hours</label>
				<div class="text_box">
					<input type="hidden" class="Duration_hours" name="Duration_hours">
					<input type="text" class="Duration_hours" name="Duration_hours" size="2" disabled="disabled">
				</div>
				<div class="bar">
					<div id="duration-hours" style="height:150px;"></div>
				</div>
			</div>
			<div class="Slider">
				<label for="Duration_mins">Minutes</label>
				<div class="text_box">
					<input type="hidden" class="Duration_mins" name="Duration_mins">
					<input type="text" class="Duration_mins" name="Duration_mins" size="2" disabled="disabled">
				</div>
				<div class="bar">
					<div id="duration-mins" style="height:150px;"></div>
				</div>
			</div>
		</div>

		<div class="clear"></div>

		<input type="submit" value="Submit" />
	</form>
</div>

<?php }} ?>