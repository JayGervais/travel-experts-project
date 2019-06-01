<?php 
include 'includes/header.php'; 
//include 'includes/functions.php'; 
include 'includes/classes/Agent.php';
?>

<div class="padding-top padding-bottom">
	<div class="containerTwo">

		<div class="backgroundclr">

			<?php 
			$agentLogin = new Agent();
			$agentLogin->agentLogin($conn);

			include 'forms/login-form.php'; 
			?>

		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>