<?php 
include 'includes/header.php'; 
include 'forms/errorhandling.php'; 
include 'includes/classes/User.php';

if(empty($_SESSION["AgentId"])) {
	header("Location: agent-login.php");
}
 
$user = new User($conn, $userId);

include 'includes/agent-dashboard-nav.php';
?>
<div class="padding-top padding-bottom">

	<div class="containerTwo">
		<div class="backgroundclr">
			<h1>Add an Agent</h1>
			<p>Add a new agent to the Travel Experts database</p><br>
			<?php include 'forms/add-agent-form.php'; ?> 
		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>