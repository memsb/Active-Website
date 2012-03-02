<div class="post">
	<h2 class="title">Reset your password</h2>
	<form id="reset" method="POST" action="{$action}">
		<input type="hidden" name="id" value="{$id}">
		<input type="hidden" name="activation" value="{$activation}">			
		<h3>Password</h3>
		<input type="password" name="password" size="30"/> 
		<br>&nbsp;
		<h3>Confirm Password</h3>
		<input type="password" name="password_confirm" size="30"/>
		<br>&nbsp;
		<input type="submit" value="Reset" />
	</form>

</div>
