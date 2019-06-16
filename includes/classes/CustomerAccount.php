<?php  
# JAY GERVAIS
// (Not used for group project) - This is a class used to create a customer account based on the structure of my Agent class. 
class CustomerAccount {
	private $customerId;
	private $customerFirstName;
	private $customerLastName;
	private $customerAddress;
	private $customerCity;
	private $customerProvince;
	private $customerPostalCode;
	private $customerCountry;
	private $customerHomePhone;
	private $customerBusinessPhone;
	private $customerEmail;
	private $customerPW;
	private $customerPW2;
	
	public function __construct() {

		// properties for each table column
		$this->customerId = '';
		$this->customerFirstName = isset($_POST['customerFirstName']) ? $_POST['customerFirstName'] : null;
		$this->customerLastName = isset($_POST['customerLastName']) ? $_POST['customerLastName'] : null;
		$this->customerAddress = isset($_POST['customerAddress']) ? $_POST['customerAddress'] : null;
		$this->customerCity = isset($_POST['customerCity']) ? $_POST['customerCity'] : null;
		$this->customerProvince = isset($_POST['customerProvince']) ? $_POST['customerProvince'] : null;
		$this->customerCountry = isset($_POST['customerCountry']) ? $_POST['customerCountry'] : null;
		$this->customerPostalCode = isset($_POST['customerPostalCode']) ? $_POST['customerPostalCode'] : null;
		$this->customerHomePhone = isset($_POST['customerHomePhone']) ? $_POST['customerHomePhone'] : null;
		$this->customerBusinessPhone = isset($_POST['customerBusinessPhone']) ? $_POST['customerBusinessPhone'] : null;
		$this->customerEmail = isset($_POST['customerEmail']) ? $_POST['customerEmail'] : null;
		$this->customerPW = isset($_POST['customerPW']) ? $_POST['customerPW'] : null;
		$this->customerPW2 = isset($_POST['customerPW2']) ? $_POST['customerPW2'] : null;

		function testdata($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		// error checking submission
		if(empty($this->customerFirstName)) {
			throw new Exception("First Name Required");
		} else {
			$this->customerFirstName = testdata($this->customerFirstName);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->customerFirstName)) {
	     	 	throw new Exception("Invalid First Name");
	    	}
		}

		if(empty($this->customerLastName)) {
			throw new Exception("Last Name Required");
		} else {
			$this->customerLastName = testdata($this->customerLastName);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->customerLastName)) {
	     	 	throw new Exception("Invalid Last Name");
	    	}
		}

		if(empty($this->customerAddress)) {
			throw new Exception("Address Required");
		} else {
			$this->customerAddress = testdata($this->customerAddress);
			if (!preg_match("/^[a-z0-9 .\-]+$/i",$this->customerAddress)) {
	     	 	throw new Exception("Invalid Last Name");
	    	}
		}

		if(empty($this->customerCity)) {
			throw new Exception("City Required");
		} else {
			$this->customerCity = testdata($this->customerCity);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->customerCity)) {
	     	 	throw new Exception("Invalid City");
	    	}
		}

		if(empty($this->customerProvince)) {
			throw new Exception("Province Required");
		} else {
			$this->customerProvince = testdata($this->customerProvince);
			if (!preg_match("/^[a-zA-Z ]*$/",$this->customerProvince)) {
	     	 	throw new Exception("Invalid Province");
	    	}
		}

		if(empty($this->customerPostalCode)) {
			throw new Exception("Postal Code Required");
		} else {
			$this->customerPostalCode = testdata($this->customerPostalCode);
			if (!preg_match("/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/",$this->customerPostalCode)) {
	     	 	throw new Exception("Invalid Postal Code");
	    	}
		}

		if(empty($this->customerHomePhone)) {
			throw new Exception("Home Phone Number Required");
		} else {
			$this->customerHomePhone = testdata($this->customerHomePhone);
			if (!preg_match("/^[0-9-\s]+$/D",$this->customerHomePhone)) {
	     	 	throw new Exception("Invalid Phone Number");
	    	}
		}

		if(empty($this->customerBusinessPhone)) {
			throw new Exception("Home Phone Number Required");
		} else {
			$this->customerBusinessPhone = testdata($this->customerBusinessPhone);
			if (!preg_match("/^[0-9-\s]+$/D",$this->customerBusinessPhone)) {
	     	 	throw new Exception("Invalid Phone Number");
	    	}
		}

		if(empty($this->customerEmail)) {
			throw new Exception("customerEmail Required");
		} else {
			$this->customerEmail = testdata($this->customerEmail);
			if (!filter_var($this->customerEmail, FILTER_VALIDATE_EMAIL)) {
	     	 	throw new Exception("Invalid Email Address");
	    	}
		}

		if(empty($this->customerPW)) {
			throw new Exception("Password is Required");
		} else {
			$this->customerPW = testdata($this->customerPW);
		}

		if(empty($this->customerPW2)) {
			throw new Exception("You need to add your password again");
		} else if($this->customerPW2 !== $this->customerPW) {
			throw new Exception("Passwords must match");
		} else {
			$this->customerPW2 = testdata($this->customerPW2);
		}

		$this->customerPW = password_hash($this->customerPW, PASSWORD_DEFAULT);
	}

	// function used for creating a new customer account
	function createCustomer($conn) {

		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		// insert customer query
		$createCustomerQuery = "INSERT INTO customers (CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal, CustCountry, CustHomePhone, CustBusPhone, CustEmail, CustPassword) VALUES ('$this->customerFirstName', '$this->customerLastName', '$this->customerAddress', '$this->customerCity', '$this->customerProvince', '$this->customerPostalCode', '$this->customerCountry', '$this->customerHomePhone', '$this->customerBusinessPhone', '$this->customerEmail', '$this->customerPW')";
		
    	if ($conn->query($createCustomerQuery) === TRUE) { 
    		echo "<p class='confirm'>You have successfully created an account</p>";
		} else {
			echo "Error: " . $createCustomerQuery . "<br>" . $conn->error;
		}
		$conn->close();
	}

	// update user information
	function updateCustomer($conn) {

		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$id = $_SESSION['CustomerId'];
		// if session matches customer, update all fields within database
		$updateAgentQuery = "UPDATE customers SET CustFirstName='$this->customerFirstName', CustLastName='$this->customerLastName', CustAddress='$this->customerAddress', CustCity='$this->customerCity', CustProv='$this->customerProvince', CustPostal='$this->customerPostalCode', CustCountry='$this->customerCountry', CustHomePhone='$this->customerHomePhone', CustBusPhone='$this->customerBusinessPhone', CustEmail='$this->customerEmail', CustPassword='$this->customerPW'";
		
    	if ($conn->query($updateCustomerQuery) === TRUE) { 
    		echo "<p class='confirm'>Your information has been successfully updated</p>";
		} else {
			echo "Error: " . $updateCustomerQuery . "<br>" . $conn->error;
		}
		$conn->close();
	}

	// customer string used to display changes after form submission
	function customerString() { ?>

		<h2><?php echo $this->customerFirstName . " " . $this->customerLastName; ?></h2>
		<p>
			<strong>Home Phone:</strong> <?php echo $this->customerHomePhone; ?><br>
			<strong>Business Phone:</strong> <?php echo $this->customerBusinessPhone; ?><br>
			<strong>Email:</strong> <?php echo $this->customerEmail; ?><br>
			<strong>Address:</strong> <?php echo $this->customerAddress; ?><br>
				<?php echo $this->customerCity . ", " . $this->customerProvince; ?><br>
				<?php echo $this->customerCountry . " " . $this->customerPostalCode; ?>
		</p>
	<?php }

	// Getters
	public function getCustomerId() {
		return $this->customerId;
	}

	public function getCustomerFirstName() {
		return $this->customerFirstName;
	}

	public function getCustomerLastName() {
		return $this->customerLastName;
	}

	public function getCustomerAddress() {
		return $this->customerAddress;
	}

	public function getCustomerCity() {
		return $this->customerCity;
	}

	public function getCustomerProvince() {
		return $this->customerProvince;
	}

	public function getCustomerPostalCode() {
		return $this->customerPostalCode;
	}

	public function getCustomerCountry() {
		return $this->customerCountry;
	}

	public function getCustomerHomePhone() {
		return $this->customerHomePhone;
	}

	public function getCustomerBusinessPhone() {
		return $this->customerBusinessPhone;
	}

	public function getCustomerEmail() {
		return $this->customerEmail;
	}

	// Setters
	public function setCustomerId($id) {
		$this->customerId = $customerId;
	}

	public function setCustomerFirstName($customerFirstName) {
		$this->customerFirstName = $customerFirstName;
	}

	public function setCustomerLastName($customerLastName) {
		$this->customerLastName = $customerLastName;
	}

	public function setCustomerAddress($customerAddress) {
		$this->customerAddress = $customerAddress;
	}

	public function setCustomerCity($customerCity) {
		$this->customerCity = $customerCity;
	}

	public function setCustomerProvince($customerProvince) {
		$this->customerProvince = $customerProvince;
	}

	public function setCustomerPostalCode($customerPostalCode) {
		$this->customerPostalCode;
	}

	public function setCustomerCountry($customerCountry) {
		$this->customerCountry = $customerCountry;
	}

	public function setCustomerHomePhone($customerHomePhone) {
		$this->customerHomePhone = $customerHomePhone;
	}

	public function setCustomerBusinessPhone($customerBusinessPhone) {
		$this->customerBusinessPhone = $customerBusinessPhone;
	}

	public function setCustomerEmail($customerEmail) {
		$this->customerEmail = $customerEmail;
	}

}

?>