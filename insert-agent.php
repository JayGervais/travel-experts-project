<?php 
# JAY GERVAIS
// page used to add new Agent information to the database

include 'includes/header.php'; 
include 'includes/classes/Agent.php';
//include 'includes/functions.php'; 

if(!isset($_SESSION['AgentId'])) {
	header("Location: login.php");
}
?>
	<div class="padding-top padding-bottom">
		
		<?php  
		$agent = new Agent();
		//$agent->insertAgent($conn);

		$table = "agents";

		$firstname = testdata($_POST['firstname']);
		$middlename = testdata($_POST['middlename']);
		$lastname = testdata($_POST['lastname']);
		$phone = testdata($_POST['phone']);
		$email = testdata($_POST['email']);
		$position = testdata($_POST['position']);
		$agency = testdata($_POST['agency']);
		$password = testdata(password_hash($_POST['password'], PASSWORD_DEFAULT));

		$form_data = array(
			'AgentId' => '',
			'AgtFirstName' => $firstname,
			'AgtMiddleInitial' => $middlename,
			'AgtLastName' => $lastname,
			'AgtBusPhone' => $phone,
			'AgtEmail' => $email,
			'AgtPosition' => $position,
			'AgencyId' => $agency,
			'password' => $password
		);
		// send Agent data array to database with generic database function
		$agent->insertDbGeneric($conn, $table, $form_data);
		?>
		<div class="agentcard">
		<?php
		// display information with string function
		echo $agent->agentString();
		?>
		</div>
		<p class="addanother"><a href='addagent.php'>Add another agent...</a></p>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>