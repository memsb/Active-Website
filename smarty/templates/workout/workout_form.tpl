<div id="workout_details">
	<form method="POST" action="{$action}">
		<h3>Activity</h3>
		{$activities}
		<br>
		<h3>Date</h3>
		<div id="datepicker"></div>
		<input type="hidden" id="Start_date" name="Start_date">
		<br>

		<h3>Time</h3>

		<label for="Start_time_hours">Hours</label>
		<br>
		<input type="hidden" class="Start_time_hours" name="Start_time_hours">
		<input type="text" class="Start_time_hours" name="Start_time_hours" size="2" disabled="disabled">
		<div id="start-hours" style="height:100px;"></div>
		<br>

		<label for="Start_time_mins">Minutes</label>
		<br>
		<input type="hidden" class="Start_time_mins" name="Start_time_mins">
		<input type="text" class="Start_time_mins" name="Start_time_mins" size="2" disabled="disabled">
		<div id="start-mins" style="height:100px;"></div>
		<br>

		<h3>Duration</h3>

		<label for="Duration_hours">Hours</label>
		<br>
		<input type="hidden" class="Duration_hours" name="Duration_hours">
		<input type="text" class="Duration_hours" name="Duration_hours" size="2" disabled="disabled">
		<div id="duration-hours" style="height:100px;"></div>
		<br>

		<label for="Duration_mins">Minutes</label>
		<br>
		<input type="hidden" class="Duration_mins" name="Duration_mins">
		<input type="text" class="Duration_mins" name="Duration_mins" size="2" disabled="disabled">
		<div id="duration-mins" style="height:100px;"></div>
		<br>

		<input type="submit" value="Submit" />
	</form>
</div>

