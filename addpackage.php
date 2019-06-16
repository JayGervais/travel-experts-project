<?php 
# JAY GERVAIS
// created to add new Travel Packages

include 'includes/header.php'; 
include 'forms/errorhandling.php'; 
include 'includes/classes/User.php';

// check for agent id
if(empty($_SESSION["AgentId"])) {
	header("Location: agent-login.php");
}

// create a new User object
$user = new User($conn, $userId);

include 'includes/agent-dashboard-nav.php';
?>
<div class="padding-top padding-bottom">

<div class="animation-element slide-up">
	<div class="containerTwo">
		<div class="backgroundclr">
			<h1>Add A Package</h1> 
			<p>Add a new travel package to the database</p><br>
			<?php include 'forms/add-package-form.php'; ?> 
		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->
</div>

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>