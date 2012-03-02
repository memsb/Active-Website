<div class="edit_workout">
	<form method="POST" action="{$action}">
		<h3>Activity</h3>
		<input type="text" name="Activity" size="40" value="{$activity}"/>
		<br>
		<h3>Start Time</h3>
		<input type="text" name="Start" size="40" value="{$start}"/>
		<br>
		<h3>Duration</h3>
		<input type="text" name="Duration" size="40" value="{$duration}"/>
		<br>
		<input type="hidden" name="id" value="{$id|default:''}">
		<input type="submit" value="Update" />
	</form>
</div>

