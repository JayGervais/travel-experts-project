<?php 
include 'includes/header.php'; 
include 'includes/functions.php'; 
?>
	<p class="agntloginlink"><a href="<?php echo $login; ?>"><?php echo $loginLogo; ?></a></p>
	<div class="padding-top padding-bottom">

		<div class="row">
		<?php
		$agentData = agentData($conn);
		foreach($agentData as $row) { ?>
			<div class="col-lg-6">
				<div class="card">
		  			<div class="card-body">
					<h3 class="card-title"><?php echo $row['AgtFirstName'] . " " . $row['AgtLastName']; ?></h3>
					<p>Phone: <?php echo $row['AgtBusPhone']; ?></p>
					<p>Email: <?php echo $row['AgtEmail']; ?></p>
					<p>Position: <?php echo $row['AgtPosition']; ?></p>
					</div>
		  		</div>
	  		</div><!-- /col -->
		<?php } ?>
		</div><!-- /row -->

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>