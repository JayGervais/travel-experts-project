<!-- JAY GERVAIS -->
<!-- Registration form to add agents to database with JS Error Handling -->
<form action="insert-agent.php" onsubmit="return validateAddAgentForm(this)" method="post" name="addAgentForm" id="addAgentForm" name="addAgentForm"> 
	
	<p id="formError" class="errorForm"></p>
	<table>

	<tr>
	<td>First Name *</td>			
		<td class="widetd">
			<input type="text" id="firstname" name="firstname" onblur="checkAgentFirstName()" value="<?php echo $firstname; ?>" maxlength="50" />
			<span class="error" id="firstNameError"><?php echo $firstnameErr; ?></span></td>
	</tr>

	<tr>
	<td>Middle Initial</td>	
		<td class="widetd">
			<input type="text" id="middlename" name="middlename" onblur="checkAgentMiddleName()" value="<?php echo $middlename; ?>" maxlength="1" />
		<span class="error" id="middleNameError"><?php echo $middlenameErr; ?></span></td>
	</tr>

	<tr>
	<td>Last Name *</td>	
		<td class="widetd">
			<input type="text" id="lastname" name="lastname" onblur="checkAgentLastName()" value="<?php echo $lastname; ?>" maxlength="50" />
		<span class="error" id="lastNameError"><?php echo $lastnameErr; ?></span></td>
	</tr>

	<tr>
	<td>Phone *</td>		
		<td class="widetd">
			<input type="tel" id="phone" name="phone" onblur="checkAgentPhone()" value="<?php echo $phone; ?>" />
			<span class="error" id="phoneError"><?php echo $phoneErr; ?></span></td>
	</tr>

	<tr>
	<td>Email *</td>						
		<td class="widetd">
			<input type="email" id="email" name="email" onblur="checkAgentEmail()" value="<?php echo $email; ?>" maxlength="50" />
			<span class="error" id="emailError"><?php echo $emailErr; ?></span></td>
	</tr>

	<tr>
	<td>Position *</td>			
		<td class="widetd">
			<input type="text" id="position" name="position" onblur="checkAgentPosition()" value="<?php echo $position; ?>" maxlength="50" />
			<span class="error" id="positionError"><?php echo $positionErr; ?></span></td>
	</tr>

	<tr>
	<td>Agency *</td>			
		<td class="widetd">
			<select id="agency" name="agency" onblur="checkAgentAgency()" value="Choose an Angency" maxlength="50" />
				<option label=" " value="">Select an Option</option>
				<option value="1">Calgary</option>
				<option value="2">Okotoks</option>
			</select>
			<span class="error" id="agencyError"></span></td>
			</td>
	</tr>

	<tr>
	<td>Password *</td>			
		<td class="widetd">
			<input type="password" id="password" name="password" onblur="checkAgentPassword()" maxlength="50" />
			<span class="error" id="passwordError"><?php echo $passwordErr; ?></span></td>
	</tr>

	<tr>
	<td>Password Again *</td>			
		<td class="widetd">
			<input type="password" id="password2" name="password2" onblur="checkAgentPassword2()" maxlength="50" />
			<span class="error" id="passwordError2"><?php echo $passwordErr2; ?></span></td>
	</tr>

	<tr>
	<td></td>
		<td class="widetd"><button type="submit" value="submit">Submit</button>
		<button type="reset" value="reset">Reset</button></td></tr>
	</table>

	</form>