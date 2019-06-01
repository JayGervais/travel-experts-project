<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="addAgent">
				<table>
				<tr>
				<td>* First Name</td>	
					<td><input type="text" name="firstname" maxlength="50" value="<?php echo $firstname; ?>" />
						<span class="error"><?php echo $firstnameErr; ?></span></td>
				</tr>
				<tr>
				<tr>
				<td>* Last Name</td>	
					<td><input type="text" name="lastname" maxlength="50" value="<?php echo $lastname; ?>" />
					<span class="error"><?php echo $lastnameErr; ?></span></td>
				</tr>
				<tr>
				<tr>
				<td>* Phone Number</td>	
					<td><input type="tel" name="phone" value="<?php echo $phone; ?>" />
						<span class="error"><?php echo $phoneErr; ?></span></td>
				</tr>
				<tr>
				<td>* Email</td>				
					<td><input type="email" name="email" maxlength="50" value="<?php echo $email; ?>"  />
						<span class="error"><?php echo $emailErr; ?></span></td>
				</tr>
				<tr>
				<td>* Address</td>	
					<td><input type="text" name="address" maxlength="50" value="<?php echo $address; ?>" />
						<span class="error"><?php echo $addressErr; ?></span></td>
				</tr>


				<tr>
				<td>* City</td>	
					<td><input type="text" name="city" maxlength="50" value="<?php echo $city; ?>" />
						<span class="error"><?php echo $cityErr; ?></span></td>
				</tr>
				<tr>
				<td>* Province</td>	
					<td><input type="text" name="province" maxlength="50" value="<?php echo $province; ?>" />
						<span class="error"><?php echo $provinceErr; ?></span></td>
				</tr>
				<tr>
				<td>Description</td>
					<td><textarea rows="20" cols="20" name="description" maxlength="500"><?php echo $description; ?></textarea>
						<span class="error"><?php echo $descriptionErr; ?></span></td>
				</tr>
				<td></td>
				<td><button type="submit" value="submit" onClick="return confirmSubmission();">Submit</button>
					<button type="reset" value="reset" onClick="return clearData();">Reset</button></td>
				</table>
			</form>

			<?php 
			// display submitted data to test
			echo $firstname;
			echo ' ';
			echo $lastname;
			echo '';
			echo $phone;
			echo '';
			echo $email;
			echo '';
			echo $address;
			echo '';
			echo $city;
			echo '';
			echo $province;
			echo '';
			echo $description;
			echo '';
			?>