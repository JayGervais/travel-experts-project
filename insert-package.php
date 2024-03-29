<?php 
# JAY GERVAIS
// page used to add new Travel Packages to database.

include 'includes/header.php'; 
include 'includes/functions.php'; 

// checks if session is set with Agent id
if(!isset($_SESSION['AgentId'])) {
	header("Location: login.php");
}
?>
	<div class="padding-top padding-bottom">
		
	<?php
		// give variable to database table
		$table = "packages";
		// collect data from form submission for adding new packages
		$packagename = testdata($_POST['packagename']);
		$packagestartdate = testdata($_POST['packagestartdate']);
		$packageenddate = testdata($_POST['packageenddate']);
		$packagedescription = testdata($_POST['packagedescription']);
		// check if image uploaded
		if(isset($_FILES['packageimage'])) {

			$uploadOK = 1;
			// assign variable to file name
			$packageImageName = $_FILES['packageimage']['name'];

			// Check if image is empty
			if($packageImageName != "") {
				// set target directory for image upload
				$targetDir = "img/";
				// add a unique id to image name to avoid overwriting files
				$packageImageName = $targetDir . uniqid() . basename($packageImageName);
				// get filetype extension
				$imageFileType = pathinfo($packageImageName, PATHINFO_EXTENSION);
				// limit filesize for upload
				if($_FILES['packageimage']['size'] > 100000000) {
					$errorMessage = "File is too large";
					$uploadOK = 0;
				}
				// check filetype and change text to lowercase
				if(strtolower($imageFileType) != "jpeg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpg" && strtolower($imageFileType)) {
				      $errorMessage = "Only images allowed.";
				      $uploadOK = 0;
	    		}
	    		// if upload is okay, move files
	    		if($uploadOK) {
	    				if(move_uploaded_file($_FILES['packageimage']['tmp_name'], $packageImageName)) {
			        	// image uploaded
			      } else {
			      		// image did not upload
	       		 		$uploadOK = 0;
			      }
	    		}
    		}
		} else {
			$packageImageName = "";
		}

		$packagebaseprice = testdata($_POST['packagebaseprice']);
		$packagecommission = testdata($_POST['packagecommission']);

		if($conn->connect_error) {

			die("Connection failed: " . $conn->connect_error);
			}
			// insert Travel Package data into database
			$insertPackageQuery = "INSERT INTO packages (PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgImage, PkgBasePrice, PkgAgencyCommission) VALUES ('$packagename', '$packagestartdate', '$packageenddate', '$packagedescription', '$packageImageName', '$packagebaseprice', '$packagecommission')";
			// display confirm message
	    	if ($conn->query($insertPackageQuery) === TRUE) { 
	    		echo "<p class='confirm'>New package has been successfully added</p>";
			} else {
				echo "Error: " . $insertPackageQuery . "<br>" . $conn->error;
			}
			$conn->close();
		
		?>
		<div class="agentcard">
		
			<h2><?php echo $packagename; ?></h2>
			<p>
				<strong>Start Date:</strong> <?php echo $packagestartdate; ?><br>
				<strong>End Date:</strong> <?php echo $packageenddate; ?><br>
				<strong>Description:</strong> <?php echo $packagedescription; ?><br>
				<strong>Price:</strong> <?php echo $packagebaseprice; ?>
			</p>

		</div> 
		<p class="addanother"><a href='addpackage.php'>Add another package...</a></p>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>