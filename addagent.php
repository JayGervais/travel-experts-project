<?php 
include 'includes/header.php'; 
include 'forms/errorhandling.php'; ?>
<?php  
$result = mysqli_query($conn, "SELECT * FROM agents WHERE AgentId='" . $_SESSION['AgentId'] . "'");
$row = mysqli_fetch_assoc($result);
$userFName = $row['AgtFirstName'];
$userLName = $row['AgtLastName'];
?>
<div class="padding-top padding-bottom">

	<div class="welcomemsg margin-bottom">
		<p class="welcome">Thank you for logging in, <?php echo $userFName . " " . $userLName; ?>. You can now add new agents to the database.</p>
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