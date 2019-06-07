<!-- Registration Form with JS Error Handling -->
<form action="" onsubmit="" method="post" name="addAgentForm" id="addAgentForm" name="addAgentForm"> 
	
	<p id="formError" class="errorForm"></p>
	<table>

	<tr>
	<td>First Name *</td>			
		<td class="widetd">
			<input type="text" id="firstname" name="firstname" onblur="" value="" maxlength="50" />
			<span class="error"></span></td>
	</tr>

	<tr>
	<td>Last Name *</td>	
		<td class="widetd">
			<input type="text" id="lastname" name="lastname" onblur="" value="" maxlength="50" />
		<span class="error"></span></td>
	</tr>

	<tr>
	<td>Email *</td>						
		<td class="widetd">
			<input type="email" id="email" name="email" onblur="" value="" maxlength="50" />
			<span class="error"></span></td>
	</tr>

	<tr>
	<td></td>
		<td class="widetd"><button type="submit" value="submit">Place Order</button>
		<button type="reset" value="reset">Reset</button></td></tr>
	</table>

	</form>