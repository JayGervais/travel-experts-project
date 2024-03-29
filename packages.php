<?php
# JAY GERVAIS
// this page was created to select and display each travel package from the database

include 'includes/header.php'; 
?>
	<div class="padding-top padding-bottom">

		<div class="row">

		<?php  
		// selects all data from packages table
		$sql = "SELECT * FROM packages";
		$packageResult = $conn->query($sql);
		// while loop assigns variables to each table row
	    while($package = $packageResult->fetch_assoc()) {
			$packageId = $package['PackageId'];
			$packageName = $package['PkgName'];
			$packageStartDateDB = $package['PkgStartDate'];
			$packageEndDateDB = $package['PkgEndDate'];
			$packageDescription = $package['PkgDesc'];
			$packageImage = $package['PkgImage'];
			$packageBasePrice = $package['PkgBasePrice'];
			$packageAgencyCommission = $package['PkgAgencyCommission'];

			// format dates
			$packageStartDate = date_format(new DateTime($packageStartDateDB), 'd/m/Y');
			$packageEndDate = date_format(new DateTime($packageEndDateDB), 'd/m/Y');

			// check if end date passed and only show current
			if(date_format(new DateTime($packageEndDateDB), 'Y/m/d') >= date_format(new DateTime(), 'Y/m/d')) {
			?>
			<div class="col-md-6 col-sm-12">

			<div class="animation-element slide-up">

		    	<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="<?php echo $packageImage; ?>" alt="<?php echo $packageName; ?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $packageName; ?></h5>
				    <p class="dates"><strong>Start Date:</strong> <?php 
				    	// check if data has passed and show date-warning
				    	if(date_format(new DateTime($packageStartDateDB), 'Y/m/d') <= date_format(new DateTime(), 'Y/m/d')) {
							echo "<span class='date-warning'>" . $packageStartDate . '</span>';
						} else {
					    	echo $packageStartDate; 
						}?><br>
				    	<strong>End Date:</strong> <?php echo $packageEndDate; ?></p>
				    <p class="card-text"><?php echo $packageDescription; ?></p>
				    <p class="price">$<?php echo number_format((float)$packageBasePrice, 2, '.', ','); ?></p>
				    <a href="order2.php?id=<?php echo $packageId; ?>" class="btn btn-primary">Buy Package</a>
				  </div>
				</div>
			</div><!-- /animation-element slide-up -->

			</div>
			<?php 
			}	
		}
		?>
	</div>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>