<?php 
include 'includes/functions.php';
include 'includes/header.php'; 
include 'includes/classes/Agent.php';
?>
<div class="padding-top padding-bottom">

<div class="row">
<?php

$sql = "SELECT * FROM agencies";
		$agencyDisplay = $conn->query($sql);

	    while ($agency = $agencyDisplay->fetch_assoc()) {
	   		$id = $agency['AgencyId'];
			$address = $agency['AgncyAddress'];
			$city = $agency['AgncyCity'];
			$province = $agency['AgncyProv'];
			$postal = $agency['AgncyPostal'];
			$country = $agency['AgncyCountry'];
			$phone = $agency['AgncyPhone'];
			$fax = $agency['AgncyFax'];
			?>

  		<div class ="col-lg-6">
			<div class="animation-element slide-up">
				<div class="card">
		  			<div class="card-body">
					<h3 class="card-title"><?php echo $city . " " . $province; ?></h3>
					<p>Address: <?php echo $address . " " . $postal; ?><br>
						Phone: <?php echo $phone; ?><br>
						Fax: <?php echo $fax; ?></p>

					<?php 
					$sqlAgent = "SELECT * FROM agents WHERE AgencyId='$id'";
					$agencyAgents = $conn->query($sqlAgent);
					$row = mysqli_fetch_array($agencyAgents);

					while ($agent = $agencyAgents->fetch_assoc()) {
						$agentId = $agent['AgentId'];
						$AgencyId = $agent['AgencyId'];
						$agtFirstName = $agent['AgtFirstName'];
						$agtLastName = $agent['AgtLastName'];
						$agtBusPhone = $agent['AgtBusPhone'];
						$agtEmail = $agent['AgtEmail']; 

						?>
							<hr>
							<h3><?php echo $agtFirstName . " " . $agtLastName; ?></h3>
							<p>Phone: <?php echo $agtBusPhone; ?><br>
							Email: <?php echo $agtEmail; ?></p>
						<?php } ?>
					</div>
		  		</div>
			</div>
  		</div> 
  		<?php } ?>
	</div><!-- /row -->
	
</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?> -->


