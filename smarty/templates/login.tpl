<h2>Login</h2>
<div id="login">
	<form method="POST" action="{$action}">
		<input type="hidden" name="reffer" value="{$reffer|default:''}">
		<h4>Email Address</h4>
		<input type="text" name="email" size="15" /><br>
		<h4>Password</h4>
		<input type="password" name="password" size="15" /><input type="submit" value="Login" /><br>	
		<a href="register">Register</a> | <a href="recovery">Password Recovery</a>
	</form>
</div>
