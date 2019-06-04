<?php  
class Agent {
	private $id;
	private $firstname;
	private $middlename;
	private $lastname;
	private $phone;
	private $email;
	private $position;
	private $agency;
	private $password;
	private $agentArray;
	private $db_password;
	private $db_password2;
	
	public function __construct() {

		// properties for each table column
		$this->id = '';
		$this->firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
		$this->middlename = isset($_POST['middlename']) ? $_POST['middlename'] : null;
		$this->lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
		$this->phone = isset($_POST['phone']) ? $_POST['phone'] : null;
		$this->email = isset($_POST['email']) ? $_POST['email'] : null;
		$this->position = isset($_POST['position']) ? $_POST['position'] : null;
		$this->agency = isset($_POST['agency']) ? $_POST['agency'] : null;
		$this->db_password = isset($_POST['password']) ? $_POST['password'] : null;
		$this->db_password2 = isset($_POST['password2']) ? $_POST['password2'] : null;

		function testdata($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		// error checking submission
		if(empty($this->firstname)) {
			throw new Exception("First Name Required");
		} else {
			$this->firstname = testdata($this->firstname);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->firstname)) {
	     	 	throw new Exception("Invalid First Name");
	    	}
		}

		if(empty($this->middlename)) {
			$this->middlename = null;
		} else {
			$this->middlename = testdata($this->middlename);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->middlename)) {
	     	 	throw new Exception("Invalid Characters Used");
	    	}
		}

		if(empty($this->lastname)) {
			throw new Exception("Last Name Required");
		} else {
			$this->lastname = testdata($this->lastname);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->lastname)) {
	     	 	throw new Exception("Invalid Last Name");
	    	}
		}

		if(empty($this->phone)) {
			throw new Exception("Phone Number Required");
		} else {
			$this->phone = testdata($this->phone);
			if (!preg_match("/^[0-9-\s]+$/D",$this->phone)) {
	     	 	throw new Exception("Invalid Phone Number");
	    	}
		}

		if(empty($this->email)) {
			throw new Exception("Email Required");
		} else {
			$this->email = testdata($this->email);
			if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
	     	 	throw new Exception("Invalid Email Address");
	    	}
		}

		if(empty($this->position)) {
			throw new Exception("Position Required");
		} else {
			$this->position = testdata($this->position);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->position)) {
	     	 	throw new Exception("Invalid Position");
	    	}
		}

		if(!isset($this->agency)) {
			throw new Exception("Please choose an option");
		} else {
			$this->agency = testdata($this->agency);
		}

		if(empty($this->db_password)) {
			throw new Exception("Password is Required");
		} else {
			$this->db_password = testdata($this->db_password);
		}

		if(empty($this->db_password2)) {
			throw new Exception("You need to add your password again");
		} else if($this->db_password2 !== $this->db_password) {
			throw new Exception("Passwords must match");
		} else {
			$this->db_password2 = testdata($this->db_password2);
		}

		$this->password = password_hash($this->db_password, PASSWORD_DEFAULT);

		// loop to receive data from object
		$this->agentArray = array(
			// 'AgentId' => '',
			'AgtFirstName' => $this->firstname,
			'AgtMiddleInitial' => $this->middlename,
			'AgtLastName' => $this->lastname,
			'AgtBusPhone' => $this->phone,
			'AgtEmail' => $this->email,
			'AgtPosition' => $this->position,
			'AgencyId' => $this->agency
			//'password' => $this->password
		);
	}

	function insertDbGeneric($conn, $table, $form_data) {
		$fields = array_keys($form_data);
		$sql = "INSERT INTO ".$table."(`".implode('`,`', $fields)."`) VALUES ('".implode("','", $form_data)."')";
		if(mysqli_query($conn, $sql)) {
			echo "<p class='confirm'>New agent has been successfully added</p>";
		}
	}

	function insertAgent($conn) {
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$insertAgentQuery = "INSERT INTO agents (AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, password) VALUES ('$this->firstname', '$this->middlename', '$this->lastname', '$this->phone', '$this->email', '$this->position', '$this->agency', '$this->password')";
		
    	if ($conn->query($insertAgentQuery) === TRUE) { 
    		echo "<p class='confirm'>New agent has been successfully added</p>";
		} else {
			echo "Error: " . $insertAgentQuery . "<br>" . $conn->error;
		}
		$conn->close();

		$logFile = fopen("submissionlog.txt", "a") or die ("Unable to open file");
    		$logMsg =  PHP_EOL . date("l jS \of F Y h:i:s A") . " - " . "New Agent has been added to the database: " . PHP_EOL . $this->firstname . " " . $this->middlename . " " . $this->lastname . PHP_EOL . "Phone: " . $this->phone . PHP_EOL . "Email: " . $this->email . PHP_EOL . "Position: " . $this->position . PHP_EOL . "Agency: " . $this->agency . PHP_EOL;
    		fwrite($logFile, $logMsg);
    		fclose($logFile);
	}

	function updateAgent($conn) {

		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$id = $_SESSION['AgentId'];

		$updateAgentQuery = "UPDATE agents SET AgtFirstName='$this->firstname', AgtMiddleInitial='$this->middlename', AgtLastName='$this->lastname', AgtBusPhone='$this->phone', AgtEmail='$this->email', AgtPosition='$this->position', AgencyId='$this->agency', password='$this->password' WHERE AgentId='$id'";
		
    	if ($conn->query($updateAgentQuery) === TRUE) { 
    		echo "<p class='confirm'>Your information has been successfully updated</p>";
		} else {
			echo "Error: " . $updateAgentQuery . "<br>" . $conn->error;
		}
		$conn->close();
	}

	function agentString() { ?>

		<h2><?php echo $this->firstname . " " . $this->middlename . " " . $this->lastname ?></h2>
		<p>
			<strong>Phone:</strong> <?php echo $this->phone; ?><br>
			<strong>Email:</strong> <?php echo $this->email; ?><br>
			<strong>Position:</strong> <?php echo $this->position; ?><br>
			<strong>Agency:</strong> <?php echo $this->agency; ?>
		</p>
	<?php }

	// Getters
	public function getAgentId() {
		return $this->id;
	}

	public function getAgentFirstName() {
		return $this->firstname;
	}

	public function getAgentMiddletName() {
		return $this->middlename;
	}

	public function getAgentLastName() {
		return $this->lastname;
	}

	public function getAgentPhone() {
		return $this->phone;
	}

	public function getAgentEmail() {
		return $this->email;
	}

	public function getAgentPosition() {
		return $this->position;
	}

	public function getAgentAgency() {
		return $this->agency;
	}

	public function getAgentArray() {
		return $this->agentArray;
	}

	// Setters
	public function setAgentId($id) {
		$this->id = $id;
	}

	public function setAgentFirstName($firstname) {
		$this->firstname = $firstname;
	}

	public function setAgentMiddletName($middlename) {
		$this->middlename = $middlename;
	}

	public function setAgentLastName($lastname) {
		$this->lastname = $lastname;
	}

	public function setAgentPhone($phone) {
		$this->phone = $phone;
	}

	public function setAgentEmail($email) {
		$this->email = $email;
	}

	public function setAgentPosition($position) {
		$this->position = $position;
	}

	public function setAgentAgency($agency) {
		$this->agency = $agency;
	}

	public function setAgentArray() {
		$this->agentArray = $agentArray;
	}


}

?>