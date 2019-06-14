<!-- Registration Form with JS Error Handling -->
<form action="complete-order.php?id=<?php echo $packageId; ?>" onsubmit="" method="post" name="addAgentForm" id="addAgentForm" name="addAgentForm"> 

	<p id="formError" class="errorForm"></p>
	<table class="orderForm">

	<tr>
		<td>Package</td>
		<td class="op60"><?php echo $packageName; ?></td> 
		<input type="hidden" name="packageId" value="<?php echo $packageId; ?>">
		<input type="hidden" name="packageName" value="<?php echo $packageName; ?>">
		<input type="hidden" name="packageStartDateDB" value="<?php echo $packageStartDateDB; ?>">
		<input type="hidden" name="packageEndDateDB" value="<?php echo $packageEndDateDB; ?>">
		<input type="hidden" name="packageDescription" value="<?php echo $packageDescription; ?>">
		<input type="hidden" name="packageImage" value="<?php echo $packageImage; ?>">
		<input type="hidden" name="packageBasePrice" value="<?php echo $packageBasePrice; ?>">
		<input type="hidden" name="packageAgencyCommission" value="<?php echo $packageAgencyCommission; ?>">
		<span class="error"></span>
	</tr>

	<tr>
		<td>Total</td>
		<td class="op60" id="op60"><?php echo number_format((float)$packageBasePrice, 2, '.', ',') . "/Traveller"; ?>
		</td>
		<span class="error"></span>
	</tr>

	<tr>
	<td>Number of Travellers *</td>
		<td class="widetd">
			<input type="number" value="1" id="numberTravellers" name="numberTravellers" maxlength="50" />
		<span class="error" id="numberTravellersError"></span></td>
	</tr>

	<tr>
	<td>First Name *</td>
		<td class="widetd">
			<span id="firstNameTip" class="tip"></span>
			<input type="text" id="firstname" name="customerFirstName" maxlength="50" onblur="checkFirstName()" />
		<span class="error" id="firstNameError"></span></td>
	</tr>

	<tr>
	<td>Last Name *</td>
		<td class="widetd">
			<span id="lastNameTip" class="tip"></span>
			<input type="text" id="lastname" name="customerLastName" maxlength="50" onblur="checkLastName()" />
		<span class="error" id="lastNameError"></span></td>
	</tr>
	<tr>
	<td>Address *</td>
		<td class="widetd">
			<span id="addressTip" class="tip"></span>
			<input type="text" onblur="checkAddress()" id="address" name="customerAddress" maxlength="50" />
			<span id="addressError" class="error"></span></td>
	</tr>

	<tr>
	<td>City *</td>
		<td class="widetd">
			<span id="cityTip" class="tip"></span>
			<input type="text" onblur="checkCity()" id="city" name="customerCity" maxlength="50" />
			<span id="cityError" class="error"></span></td>
	</tr>

	<tr>
	<td>Province *</td>
		<td class="widetd">
			<span id="provinceTip" class="tip"></span>
			<input type="text" onblur="checkProvince()" id="province" name="customerProvince" maxlength="50" />
			<span id="provinceError" class="error"></span></td>
	</tr>

	<tr>
	<td>Country *</td>
		<td class="widetd">
			<span id="countryTip" class="tip"></span>
			<input type="text" onblur="checkCountry()" id="country" name="customerCountry" maxlength="50" />
			<span id="countryError" class="error"></span></td>
	</tr>

	<tr>
	<td>Postal Code *</td>
		<td class="widetd"><span id="postalCodeTip" class="tip"></span>
			<input type="text" onblur="checkPostalCode()" id="postalcode" name="customerPostalCode" maxlength="50" />
			<span id="postalCodeError" class="error"></span></td>
	</tr>

	<tr>
	<td>Home Phone Number *</td>
		<td class="widetd">
			<span id="phoneTip" class="tip"></span>
			<input type="tel" onblur="checkPhone()" id="phone" name="customerHomePhone" />
			<span id="phoneError" class="error"></span></td>
	</tr>

	<tr>
	<td>Buniness Phone Number *</td>
		<td class="widetd">
			<span id="phone2Tip" class="tip"></span>
			<input type="tel" onblur="checkPhone2()" id="phone2" name="customerBusinessPhone" />
			<span id="phone2Error" class="error"></span></td>
	</tr>

	<tr>
	<td>Email *</td>
		<td class="widetd">
			<span id="emailTip" class="tip"></span>
			<input type="email" onblur="checkEmail()" id="email" name="customerEmail" maxlength="50" />
			<span id="emailError" class="error"></span></td>
	</tr>

	<tr>
	<td></td>
		<td class="widetd"><button type="submit" value="submit">Place Order</button>
		<button type="reset" value="reset">Reset</button></td></tr>
	</table>

	</form>