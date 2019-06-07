<?php
function agentData($conn) {
	$query = "SELECT * FROM agents";
	$result = $conn->query($query);
	$resArr = array();

	while($row = $result->fetch_assoc()) {
		$resArr[] = $row;
	}
	return $resArr;
}

function testdata($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function insertAgent($conn) {
	$firstname = testdata($_POST['firstname']);
	$middlename = testdata($_POST['middlename']);
	$lastname = testdata($_POST['lastname']);
	$phone = testdata($_POST['phone']);
	$email = testdata($_POST['email']);
	$position = testdata($_POST['position']);
	$agency = testdata($_POST['agency']);
	$password = testdata(md5($_POST['password']));

	$agentArray = array(
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

	foreach ($agentArray as $array) {
		$query = "INSERT INTO agents";
		$result = $conn->query($query);
		$query .= " (`".implode("`, `", array_keys($agentArray[0]))."`) VALUES";

    	foreach ($agentArray as $array) {
    		$query .= " ('".implode("', '", $array)."'),";
    	}

    	$query = substr($query,0,-1); // remove last comma

    	$result = mysqli_query($conn, $query) or die(mysql_error());

    	if($result) {

    		$confirmMsg = "New agent has been successfully added";

    		$logFile = fopen("submissionlog.txt", "a") or die ("Unable to open file");
    		$logMsg =  PHP_EOL . date("l jS \of F Y h:i:s A") . " - " . $confirmMsg . " to the database: " . PHP_EOL . $firstname . " " . $middlename . " " . $lastname . PHP_EOL . "Phone: " . $phone . PHP_EOL . "Email: " . $email . PHP_EOL . "Position: " . $position . PHP_EOL . "Agency: " . $agency . PHP_EOL;
    		fwrite($logFile, $logMsg);
    		fclose($logFile);
    		?>

    		<p class='confirm'><?php echo $confirmMsg; ?></h3>
    		<div class="agentcard">
	    		<h2><?php echo $firstname . " " . $middlename . " " . $lastname ?></h2>
	    		<p>
	    			<strong>Phone:</strong> <?php echo $phone; ?><br>
	    			<strong>Email:</strong> <?php echo $email; ?><br>
	    			<strong>Position:</strong> <?php echo $position; ?><br>
	    			<strong>Agency:</strong> <?php echo $agency; ?>
	    		</p>
    		</div>
    		<p class="addanother"><a href='addagent.php'>Add another agent...</a></p>
    	<?php } else {

    		$failMsg = "Could not insert into database";

    		$logFile = fopen("submissionlog.txt", "a") or die ("Unable to open file");
    		$logMsg = PHP_EOL . date("l jS \of F Y h:i:s A") . " - " . $failMsg . ": " . $firstname . " " . $middlename . " " . $lastname . PHP_EOL;
    		fwrite($logFile, $logMsg);
    		fclose($logFile);
    		?>

    		<p class='fail'>$failMsg</p>
    		<p class="addanother"><a href='addagent.php'>Go back...</a></p>
    	<?php }
	}

}


function insertDbGeneric($table_name, $form_data) {

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

	$table_name = "agents";

	$fields = array_keys($form_data);

	$sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`) VALUES ('".implode("','", $form_data)."')";

	return mysqli_query($sql);



}

?>
