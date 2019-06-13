<?php
include 'includes/header.php';
//include 'includes/classes/Agent.php';
include 'includes/functions.php';
if(!isset($_SESSION['customId'])) {
	header("Location: login.php");
}
?>
	<div class="padding-top padding-bottom">

		<?php
		//$agent->insertAgent($conn);


		$CustFirstName = testdata($_POST['CustFirstName']);
		$CustLastName = testdata($_POST['CustLastName']);
		$CustAddress = testdata($_POST['CustAddress']);
		$CustCity = testdata($_POST['CustCity']);
		$CustProv = testdata($_POST['CustProv']);
		$CustCountry = testdata($_POST['CustCountry']);
		$CustPostal = testdata($_POST['CustPostal']);
		$CustHomePhone = testdata($_POST['CustHomePhone']);
		$CustBusPhone = testdata($_POST['CustBusPhone']);
		$CustEmail = testdata($_POST['CustEmail']);
		$CustPassword  = testdata($_POST['CustPassword']);

		$form_data = array(
			'CustomerId' => '',
			'CustFirstName' => $CustFirstName,
			'CustLastName' => $CustLastName,
			'CustAddress' => $CustAddress,
			'CustCity' => $CustCity,
			'CustProv' => $CustProv,
			'CustCountry' => $CustCountry,
			'CustPostal' => $CustPostal,
			'CustHomePhone' => $CustHomePhone,
			'CustBusPhone' => $CustBusPhone,
			'CustEmail' => $CustEmail,
			'CustPassword' => $CustPassword

		);

		$dbh = mysqli_connect("localhost","root","","travelexperts");
		$table_name = "customers";

		$fields = array_keys($form_data);

		$sql = "INSERT INTO customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustCountry,CustPostal,CustHomePhone,CustBusPhone,CustEmail,CustPassword)
		VALUES ('$CustFirstName','$CustLastName','$CustAddress','$CustCity','$CustProv','$CustCountry','$CustPostal','$CustHomePhone','$CustBusPhone','$CustEmail','$CustPassword')";

		return mysqli_query($dbh,$sql);

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);

		insertDbGeneric1();
		?>
		<div class="agentcard">

		</div>
		<p class="addanother"><a href='addagent.php'>Add another agent...</a></p>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>
