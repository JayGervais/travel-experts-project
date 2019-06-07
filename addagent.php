<?php 
include 'includes/header.php'; 
include 'forms/errorhandling.php'; 
include 'includes/classes/User.php';

if(empty($_SESSION["AgentId"])) {
	header("Location: agent-login.php");
}

$user = new User($conn, $userId);
?>
<div class="padding-top padding-bottom">

	<div class="welcomemsg margin-bottom">
		<p class="welcome">Thank you for logging in, <?php echo $user->userFName() . " " . $user->userLName(); ?>. You can now add new agents to the database or edit your <a href="edit-agent.php">account information</a>.</p>
		<form action="" method="post" name="userLogoutMsg" id="userLogoutMsg">
			<button type="submit" name="logout" value="Logout" class="logoutbutton">Logout</button>
		</form>	
	</div>

	<div class="containerTwo">
		<div class="backgroundclr">
			<h1>Add an Agent</h1>
			<p>Add a new agent to the Travel Experts database</p><br>
			<?php include 'forms/add-agent-form.php'; ?>
		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->

</div><!-- /padding-top padding-bottom -->

<?php include 'includes/footer.php'; ?>