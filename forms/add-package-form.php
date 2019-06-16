<!-- JAY GERVAIS -->
<!-- Form with JS Error Handling used to add Travel Package information to database -->
<form action="insert-package.php" enctype="multipart/form-data" onsubmit="return validateAddPackageForm(this)" method="post" name="addPackageForm" id="addPackageForm" name="addPackageForm"> 
	
	<p id="formError" class="errorForm"></p>
	<table>

	<tr>
	<td>Package Name *</td>			
		<td class="widetd">
			<input type="text" id="packagename" name="packagename" onblur="checkPackageName()" value="" maxlength="50" />
			<span class="error" id="packageNameError"></span></td>
	</tr>

	<tr>
	<td>Package Start Date *</td>			
		<td class="widetd">
			<input type="date" id="packagestartdate" name="packagestartdate" onblur="checkPackageStartDate()" value="" maxlength="50" />
			<span class="error" id="packageStartDateError"></span></td>
	</tr>

	<tr>
	<td>Package End Date *</td>			
		<td class="widetd">
			<input type="date" id="packageenddate" name="packageenddate" onblur="checkPackageEndDate()" value="" maxlength="50" />
			<span class="error" id="packageEndDateError"></span></td>
	</tr>

	<tr>
	<td>Package Description *</td>			
		<td class="widetd">
			<input type="text" id="packagedescription" name="packagedescription" onblur="checkPackageDescription()" value="" maxlength="50" />
			<span class="error" id="packageDescriptionError"></span></td>
	</tr>

	<tr>
	<td>Package Image *</td>			
		<td class="widetd">
			<input type="file" id="packageimage" name="packageimage" onblur="checkPackageImage()" value="" maxlength="50" />
			<span class="error" id="packageImageError"></span></td>
	</tr>

	<tr>
	<td>Package Base Price *</td>			
		<td class="widetd">
			<input type="number" min="1" step="any" id="packagebaseprice" name="packagebaseprice" onblur="checkPackageBasePrice()" value="" maxlength="50" />
			<span class="error" id="packageBasePriceError"></span></td>
	</tr>

	<tr>
	<td>Agency Commission *</td>			
		<td class="widetd">
			<input type="number" min="1" step="any" id="packagecommission" name="packagecommission" onblur="checkPackageCommission()" value="" maxlength="50" />
			<span class="error" id="packageCommissionError"></span></td>
	</tr>

	<tr>
	<td></td>
		<td class="widetd"><button type="submit" value="submit" name="post">Submit</button>
		<button type="reset" value="reset">Reset</button></td></tr>
	</table>

</form>