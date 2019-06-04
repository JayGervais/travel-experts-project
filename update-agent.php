<?php 
include 'includes/header.php'; 
include 'includes/classes/Agent.php';
//include 'includes/functions.php'; 

if(!isset($_SESSION['AgentId'])) {
	header("Location: login.php");
}
?>
	<div class="padding-top padding-bottom">
		
		<?php  
		$agent = new Agent();
		$agent->updateAgent($conn);
		?>
		<div class="agentcard">
		<?php
		echo $agent->agentString();
		?>
		</div>
		<p class="addanother"><a href='addagent.php'>Go back...</a></p>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>