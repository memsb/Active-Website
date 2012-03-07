<div id="workout_details">
	<form method="POST" action="{$action}">
		<h3>Activity</h3>
		{$activities}
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

