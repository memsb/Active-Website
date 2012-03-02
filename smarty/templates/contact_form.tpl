<div class="post">
	<h2 class="title">Contact us</h2>
	<div class="entry">
		<form method="POST" action="{$action}">
			<h3>Name</h3>
			<input type="text" name="Username" size="40" value="{$username|default:''}"/>
			<br>&nbsp;
			<h3>Email</h3>
			<input type="text" name="Email" size="40" value="{$email|default:''}"/>
			<br>&nbsp;
			<h3>Message</h3>
			<textarea rows="20" cols="40" name="Message"></textarea>
			<br>&nbsp;
			<input type="submit" value="Send" /><br />
		</form>
	</div>
</div>
