<div class="edit">
	<a href="{$edit_link}">Edit Workout</a>
</div>
<div class="delete">
	<form method="POST" action="Delete_Workout">
		<input type="hidden" id="id" name="id" value="{$delete_id}">
		<input type="submit" value="Delete Workout" />
	</form>
</div>
