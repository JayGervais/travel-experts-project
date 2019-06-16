<?php 
# JAY GERVAIS

// Original error handling functionality. This has since been used within different classes.

// Empty error veriables
$firstnameErr = "";
$middlenameErr = "";
$lastnameErr = "";
$phoneErr = "";
$emailErr = "";
$positionErr = "";
$agencyErr = "";
$passwordErr = "";
$passwordErr2 = "";

//empty regular variables
$firstname = "";
$middlename = "";
$lastname = "";
$phone = "";
$email = "";
$position = "";
$agency = "";
$password = "";
$password2 = "";

// if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

// create form variables
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$position = $_POST['position'];
$agency = $_POST['agency'];
$password = $_POST['password'];

	// error checking submission
	if(empty($firstname)) {
		$firstnameErr = "First Name Required";
	} else {
		$firstname = testdata($firstname);
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
     	 	$firstnameErr = "Invalid First Name";
    	}
	}

	if(empty($middlename)) {
		$middlenameErr = "";
		$middlename = null;
	} else {
		$middlename = testdata($middlename);
		if (!preg_match("/^[a-zA-Z ]*$/", $middlename)) {
     	 	$descriptionErr = "Invalid Characters Used";
    	}
	}

	if(empty($lastname)) {
		$lastnameErr = "Last Name Required";
	} else {
		$lastname = testdata($lastname);
		if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
     	 	$lastnameErr = "Invalid Last Name";
    	}
	}

	if(empty($phone)) {
		$phoneErr = "Phone Number Required";
	} else {
		$phone = testdata($phone);
		if (!preg_match("/^[0-9-\s]+$/D",$phone)) {
     	 	$phoneErr = "Invalid Phone Number";
    	}
	}

	if(empty($email)) {
		$emailErr = "Email Required";
	} else {
		$email = testdata($email);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     	 	$emailErr = "Invalid Email Address";
    	}
	}

	if(empty($position)) {
		$positionErr = "Position Required";
	} else {
		$position = testdata($position);
		if (!preg_match("/^[a-zA-Z ]*$/",$position)) {
     	 	$positionErr = "Invalid Position";
    	}
	}

	if(!isset($agency)) {
		$agencyErr = "Please choose an option";
	} else {
		$agency = testdata($agency);
	}

	if(empty($password)) {
		$passwordErr = "Password is Required";
	} else {
		$password = testdata($password);
	}

	if(empty($password2)) {
		$passwordErr2 = "You need to add your password again";
	} else if($password2 !== $password) {
		$passwordErr2 = "Passwords must match";
	} else {
		$password = testdata($password);
	}
}

// remove special chars to prevent php injection
function testdata($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>