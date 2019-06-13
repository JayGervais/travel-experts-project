<?php
// set session
session_start();

// end session
if(!empty($_POST["logout"])) {
	$_SESSION["CustomId"] = "";
	header("Location: agent-login.php");
	session_destroy();
}

if(!isset($_SESSION['CustomId'])) {
	$loginLogo = "<i class='fas fa-sign-in-alt'></i> Agent Login";
} else {
	$loginLogo = "<i class='fas fa-sign-out-alt'></i> Logout";
	$userId = $_SESSION['CustomId'];
}
?>
