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
		// $this->password = password_hash($this->db_password, PASSWORD_DEFAULT);
		$this->password = md5($this->db_password);

		// loop to receive data from object
//		$this->agentArray = array();
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

	function agentLogin($conn) {	
		if(empty($_SESSION["AgentId"])) {
			echo "<h1>Agent Login</h1>";
			echo "<p>Log in to add agents to the database</p><br>";
		} else { 
			header("Location: addagent.php");
		}

		if(!empty($_POST["login"])) {

			if(password_verify($this->db_password,$this->password)) {
				$query = "SELECT AgentId FROM agents WHERE AgtEmail='$this->email'";
				$id_query = $conn->query($query);
				$row  = mysqli_fetch_assoc($id_query);
				$_SESSION['AgentId'] = $row['AgentId'];
				header("Location: addagent.php");
			} else {
				echo "Could not not in";
			} 
		}		
	}

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


 



}



?>