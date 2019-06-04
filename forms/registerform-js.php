<!-- Registration Form with JS Error Handling -->
<form action="" onsubmit="return validateRegistrationForm(this);" method="post" name="registerForm" id="registerForm">

	<p id="formError" class="errorForm"></p>
	<table>
	<tr>
	<td>* First Name</td>			
		<td class="widetd"><span id="firstNameTip" class="tip"></span>
			<input type="text" id="firstname" name="firstname" maxlength="50" onfocus="firstNameTip()" onblur="checkFirstName()" />
		<span class="error" id="firstNameError"></span></td>
	</tr>
	<tr>
	<td>* Last Name</td>	
		<td class="widetd"><span id="lastNameTip" class="tip"></span>
			<input type="text" id="lastname" name="lastname" maxlength="50" onfocus="lastNameTip()" onblur="checkLastName()" />
		<span class="error" id="lastNameError"></span></td>
	</tr>
	<tr>
	<td>* Phone Number</td>		
		<td class="widetd"><span id="phoneTip" class="tip"></span>
			<input type="tel" onfocus="phoneTip()" onblur="checkPhone()" id="phone" name="phone" />
			<span id="phoneError" class="error"></span></td>
	</tr>
	<tr>
	<td>* Email</td>						
		<td class="widetd"><span id="emailTip" class="tip"></span>
			<input type="email" onfocus="emailTip()" onblur="checkEmail()" id="email" name="email" maxlength="50" />
			<span id="emailError" class="error"></span></td>
	</tr>
	<tr>
	<td>* Address</td>			
		<td class="widetd"><span id="addressTip" class="tip"></span>
			<input type="text" onfocus="addressTip()" onblur="checkAddress()" id="address" name="address" maxlength="50" />
			<span id="addressError" class="error"></span></td>
	</tr>
	<tr>
	<td>* City</td>			
		<td class="widetd"><span id="cityTip" class="tip"></span>
			<input type="text" onfocus="cityTip()" onblur="checkCity()" id="city" name="city" maxlength="50" />
			<span id="cityError" class="error"></span></td>
	</tr>
	<tr>
	<td>* Province</td>			
		<td class="widetd"><span id="provinceTip" class="tip"></span>
			<input type="text" onfocus="provinceTip()" onblur="checkProvince()" id="province" name="province" maxlength="50" />
			<span id="provinceError" class="error"></span></td>
	</tr>
	<tr>
	<td>* Postal Code</td>			
		<td class="widetd"><span id="postalCodeTip" class="tip"></span>
			<input type="text" onfocus="postalCodeTip()" onblur="checkPostalCode()" id="postalcode" name="postalcode" maxlength="50" />
			<span id="postalCodeError" class="error"></span></td>
	</tr>
	<tr>
	<td>Description</td>
		<td class="widetd"><span id="descriptionTip" class="tip"></span>
			<textarea rows="10" onfocus="descriptionTip()" onblur="checkDescription()" cols="20" id="description" name="description" maxlength="500"></textarea>
			<span id="descriptionError" class="error"></span></td>
	</tr>
	<td></td>
		<td class="widetd"><button type="submit" value="submit" onClick="return confirmSubmission();">Submit</button>
		<button type="reset" value="reset" onClick="return clearData();">Reset</button></td>
	</table>

</form>