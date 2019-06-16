<?php  
# JAY GERVAIS

// Connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelexperts";

// DB Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_errno) {
	die("Could not connect to database");
}
?>