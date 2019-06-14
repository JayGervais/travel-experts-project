<!-- Registration Form with JS Error Handling -->
<form action="insert-customer.php" onsubmit="return validateRegistrationForm(this)" method="post" name="registerForm" id="registerForm">

	<p id="formError" class="errorForm"></p>
	<table>

	<tr>
	<td>First Name *</td>
		<td class="widetd">
			<span id="firstNameTip" class="tip"></span>
			<input type="text" id="firstname" name="CustFirstName" maxlength="50" onfocus="firstNameTip()" onblur="checkFirstName()" />
		<span class="error" id="firstNameError"></span></td>
	</tr>

	<tr>
	<td>Last Name *</td>
		<td class="widetd">
			<span id="lastNameTip" class="tip"></span>
			<input type="text" id="lastname" name="CustLastName" maxlength="50" onfocus="lastNameTip()" onblur="checkLastName()" />
		<span class="error" id="lastNameError"></span></td>
	</tr>

	<tr>
	<td>Address *</td>
		<td class="widetd">
			<span id="addressTip" class="tip"></span>
			<input type="text" onfocus="addressTip()" onblur="checkAddress()" id="address" name="CustAddress" maxlength="50" />
			<span id="addressError" class="error"></span></td>
	</tr>

	<tr>
	<td>City *</td>
		<td class="widetd">
			<span id="cityTip" class="tip"></span>
			<input type="text" onfocus="cityTip()" onblur="checkCity()" id="city" name="CustCity" maxlength="50" />
			<span id="cityError" class="error"></span></td>
	</tr>

	<tr>
	<td>Province *</td>
		<td class="widetd">
			<span id="provinceTip" class="tip"></span>
			<input type="text" onfocus="provinceTip()" onblur="checkProvince()" id="province" name="CustProv" maxlength="50" />
			<span id="provinceError" class="error"></span></td>
	</tr>

	<tr>
	<td>Country *</td>
		<td class="widetd">
			<span id="countryTip" class="tip"></span>
			<input type="text" onfocus="countryTip()" onblur="checkCountry()" id="country" name="CustCountry" maxlength="50" />
			<span id="countryError" class="error"></span></td>
	</tr>

	<tr>
	<td>Postal Code *</td>
		<td class="widetd"><span id="postalCodeTip" class="tip"></span>
			<input type="text" onfocus="postalCodeTip()" onblur="checkPostalCode()" id="postalcode" name="CustPostal" maxlength="50" />
			<span id="postalCodeError" class="error"></span></td>
	</tr>

	<tr>
	<td>Home Phone Number *</td>
		<td class="widetd">
			<span id="phoneTip" class="tip"></span>
			<input type="tel" onfocus="phoneTip()" onblur="checkPhone()" id="phone" name="CustHomePhone" />
			<span id="phoneError" class="error"></span></td>
	</tr>

	<tr>
	<td>Buniness Phone Number *</td>
		<td class="widetd">
			<span id="phone2Tip" class="tip"></span>
			<input type="tel" onfocus="phone2Tip()" onblur="checkPhone2()" id="phone2" name="CustBusPhone" />
			<span id="phone2Error" class="error"></span></td>
	</tr>

	<tr>
	<td>Email *</td>
		<td class="widetd">
			<span id="emailTip" class="tip"></span>
			<input type="email" onfocus="emailTip()" onblur="checkEmail()" id="email" name="CustEmail" maxlength="50" />
			<span id="emailError" class="error"></span></td>
	</tr>

	<tr>
	<td>Password *</td>
		<td class="widetd"><span id="passwordTip" class="tip"></span>
			<input type="password" id="password" name="CustPassword" onblur="checkAgentPassword()" onfocus="passwordTip()" maxlength="50" />
			<span class="error" id="passwordError"></span></td>
	</tr>

	<tr>
	<td>Password Again *</td>
		<td class="widetd"><span id="password2Tip" class="tip"></span>
			<input type="password" id="password2" name="password2" onblur="checkAgentPassword2()" onfocus="password2Tip()" maxlength="50" />
			<span class="error" id="passwordError2"></span></td>
	</tr>

	<tr>
	<td></td>
		<td class="widetd">
			<button type="submit" value="submit" >Submit</button>
			<button type="reset" value="reset" >Reset</button></td>
	</tr>

	</table>
</form>
