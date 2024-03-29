<?php
# JAY GERVAIS
// (Not used in group project) - I wrote this code to create a solution for the order functionality so I could give advice on how to complete.

include 'includes/header.php';
include 'includes/classes/CustomerAccount.php';
//include 'includes/functions.php';
?>
<div class="padding-top padding-bottom">
		<div class="agentcard">
		
		<h1>Thank you for your purchase</h1>

		<?php  
		// select all data collected from the form for an order submission
		$customerFirstName = $_POST['customerFirstName'];
		$customerLastName = $_POST['customerLastName'];
		$customerAddress = $_POST['customerAddress'];
		$customerCity = $_POST['customerCity'];
		$customerProvince = $_POST['customerProvince'];
		$customerCountry = $_POST['customerCountry'];
		$customerPostalCode = $_POST['customerPostalCode'];
		$customerHomePhone = $_POST['customerHomePhone'];
		$customerBusinessPhone = $_POST['customerBusinessPhone'];
		$customerEmail = $_POST['customerEmail'];

		$packageId = $_POST['packageId'];
		$packageName = $_POST['packageName'];
		$packageStartDateDB = $_POST['packageStartDateDB'];
		$packageEndDateDB = $_POST['packageEndDateDB'];
		$packageDescription = $_POST['packageDescription'];
		$packageImage = $_POST['packageImage'];
		$packageBasePrice = $_POST['packageBasePrice'];
		$packageAgencyCommission = $_POST['packageAgencyCommission'];
		$numberTravellers = $_POST['numberTravellers'];

		// create a new customer account
		$createCustomerQuery = "INSERT INTO customers (CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal, CustCountry, CustHomePhone, CustBusPhone, CustEmail) VALUES ('$customerFirstName', '$customerLastName', '$customerAddress', '$customerCity', '$customerProvince', '$customerPostalCode', '$customerCountry', '$customerHomePhone', '$customerBusinessPhone', '$customerEmail')";
		$conn->query($createCustomerQuery);
		$customerID = $conn->insert_id;

		$tripDate = $packageStartDateDB;

		// insert new record into booking database
		$insertRecordQuery = "INSERT INTO booking (BookingDate, TravelerCount, CustomerId, PackageId) VALUES ('$tripDate', '$numberTravellers', '$customerID', '$packageId')";	
    	$conn->query($insertRecordQuery);

		$conn->close();	
		?>
		
		<h5 class="card-title"><?php echo $customerFirstName . " " . $customerLastName; ?></h5>
	    <p class="card-text"><strong><?php echo $customerAddress . ", " . $customerCity . ", " . $customerProvince; ?></strong><br>
	    <?php echo $customerCountry . ", " . $customerPostalCode; ?><br>
	    	<?php echo $customerHomePhone . " | " . $customerBusinessPhone; ?><br>
	    	<?php $customerEmail; ?></p>

		<h1>Package</h1>
		
		<h5 class="card-title"><?php echo $packageName; ?></h5>
	    <p class="dates"><strong>Start Date:</strong> <?php 
	    	if(date_format(new DateTime($packageStartDateDB), 'Y/m/d') <= date_format(new DateTime(), 'Y/m/d')) {
				echo "<span class='date-warning'>" . $packageStartDateDB . '</span>';
			} else {
		    	echo $packageStartDateDB; 
			}?><br>
	    	<strong>End Date:</strong> <?php echo $packageEndDateDB; ?></p>
	    <p class="card-text"><?php echo $packageDescription; ?></p>
	    <p class="price">$<?php echo number_format((float)$packageBasePrice, 2, '.', ','); ?></p>

		</div>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>