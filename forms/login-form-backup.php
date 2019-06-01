<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="userLoginForm" id="userLoginForm">
	<table>
	<tr>
	<td>Email</td>			
		<td class="widetd">
			<input type="text" id="email" name="email" onblur="userEmail()" maxlength="50" />
			<span class="error" id="userEmailError"></span></td>
	</tr>
	<tr>
	<td>Password</td>	
		<td class="widetd">
			<input type="password" id="password" name="password" onblur="loginPassword()" maxlength="50" />
		<span class="error" id="passwordError"></span></td>
	</tr>
	<tr>
	<td></td>
		<td class="widetd"><button type="submit" name="login" value="Login">Login</button>
		<button type="reset" value="reset">Reset</button></td></tr>
	</table>
</form>