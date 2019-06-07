<?php 
include 'includes/header.php'; 
include 'includes/functions.php'; 
?>
	<p class="agntloginlink"><a href="<?php echo $login; ?>" class="agntloginlink"><?php echo $loginLogo; ?></a></p>
	<div class="padding-top padding-bottom">
	
	<div class="row">
	<?php
	$agentData = agentData($conn);
	foreach($agentData as $row) { ?>
		<div class="col-lg-6">
			<div class="animation-element slide-up">
				<div class="card">
		  			<div class="card-body">
					<h3 class="card-title"><?php echo $row['AgtFirstName'] . " " . $row['AgtLastName']; ?></h3>
					<p class="details">Phone: <?php echo $row['AgtBusPhone']; ?></p>
					<p class="details">Email: <?php echo $row['AgtEmail']; ?></p>
					<p class="details">Position: <?php echo $row['AgtPosition']; ?></p>
					</div>
		  		</div>
			</div><!-- /animation-element slide-up -->
  		</div><!-- /col -->
	<?php } ?>
	</div><!-- /row -->
	
	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>