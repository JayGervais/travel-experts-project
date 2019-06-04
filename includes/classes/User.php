<?php  
class User {
	private $userId;
	private $conn;
	private $userFName;
	private $userMName;
	private $userLName;
	private $userPhone;
	private $userEmail;
	private $userPosition;
	private	$userAgency;
	private	$userPass;

	public function __construct($conn, $userId) {
		$this->conn = $conn;
		$this->userId = $userId;

		$user_query = mysqli_query($conn, "SELECT * FROM agents WHERE AgentId='".$userId."'");
			$user = mysqli_fetch_array($user_query);

		$this->userFName 	= $user['AgtFirstName'];
		$this->userMName 	= $user['AgtMiddleInitial'];
		$this->userLName 	= $user['AgtLastName'];
		$this->userPhone 	= $user['AgtBusPhone'];
		$this->userEmail 	= $user['AgtEmail'];
		$this->userPosition = $user['AgtPosition'];
	}

	function deleteAccount($conn, $userId) {

		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$id = $_SESSION['AgentId'];

		$deleteAgentQuery = "DELETE FROM agents WHERE AgentId='$id'";
		
    	if ($conn->query($deleteAgentQuery) === TRUE) { 
    		echo "<p class='fail'>Your account has been deleted</p>";
    		session_destroy();
		} else {
			echo "Error: " . $updateAgentQuery . "<br>" . $conn->error;
		}
		$conn->close();
	}

	public function getUserId() {
		return $this->userId;
	}

	public function userFName() {
		return $this->userFName;
	}

	public function userMName() {
		return $this->userMName;
	}

	public function userLName() {
		return $this->userLName;
	}

	public function userPhone() {
		return $this->userPhone;
	}

	public function userEmail() {
		return $this->userEmail;
	}

	public function userPosition() {
		return $this->userPosition;
	}

	// setters
	public function setUserId($userId) {
		$this->userId = $userId;
	}
	
}

?>