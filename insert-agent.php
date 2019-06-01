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
		$agent->insertAgent($conn);
		?>
		<div class="agentcard">
		<?php
		//****** ---------- call insert function class ---------- ******// 
			echo $agent->agentString();
		?>
		</div>
		<p class="addanother"><a href='addagent.php'>Add another agent...</a></p>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>