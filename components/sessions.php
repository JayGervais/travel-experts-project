<?php
# JAY GERVAIS

// Starts a session when an agent logs in to an account.
session_start();

// Ends session when logout button is pressed and redirects user to login page.
if(!empty($_POST["logout"])) {
	$_SESSION["AgentId"] = "";
	header("Location: agent-login.php");
	session_destroy();
}

// Uses the session to change the logo icon depending if the user is logged in or not.
if(!isset($_SESSION['AgentId'])) {
	$loginLogo = "<i class='fas fa-address-card'></i> Agent Login";
} else {
	$loginLogo = "<i class='fas fa-address-card'></i> Agent Dashboard";
	$userId = $_SESSION['AgentId'];
}
?>