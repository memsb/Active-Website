<div class="post">
	<h2 class="title">Change Password</h2>
	<p>Please confirm your identity by entering your password.</p>
	<div class="entry">
		<form method="POST" action="{$action}">
			<h3>New Password</h3>
			<input type="password" name="new_password" size="40"/>
			<h3>Repeat Password</h3>
			<input type="password" name="new_password_confirm" size="40"/>
			<h3>Current Password</h3>
			<input type="password" name="password" size="40"/>
			<br>
			<input type="submit" value="Update" />
		</form>
	</div>
</div>
