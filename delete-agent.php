<?php 
include 'includes/header.php'; 
include 'includes/classes/User.php';
//include 'includes/functions.php'; 

if(!isset($_SESSION['AgentId'])) {
	header("Location: login.php");
}
?>
	<div class="padding-top padding-bottom">
		
		<div class="agentcard">
		<?php  
		$user = new User($conn, $userId);
		$user->deleteAccount($conn, $userId);
		?>
		</div>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>