<?php 
include 'includes/header.php'; 
?>
	<div class="padding-top padding-bottom">

		<div class="row">

		<?php  
		$sql = "SELECT * FROM packages";
		$packageResult = $conn->query($sql);

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

				// check if end date passed
				if(date_format(new DateTime($packageEndDateDB), 'Y/m/d') >= date_format(new DateTime(), 'Y/m/d')) {
				?>
				<div class="col-md-6 col-sm-12">

		    	<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/<?php echo $packageImage; ?>" alt="<?php echo $packageName; ?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $packageName; ?></h5>
				    <p class="dates"><strong>Start Date:</strong> <?php 
				    	if(date_format(new DateTime($packageStartDateDB), 'Y/m/d') <= date_format(new DateTime(), 'Y/m/d')) {
							echo "<span class='date-warning'>" . $packageStartDate . '</span>';
						} else {
					    	echo $packageStartDate; 
						}?><br>
				    	<strong>End Date:</strong> <?php echo $packageEndDate; ?></p>
				    <p class="card-text"><?php echo $packageDescription; ?></p>
				    <p class="price">$<?php echo number_format((float)$packageBasePrice, 2, '.', ''); ?></p>
				    <a href="order.php?id=<?php echo $packageId; ?>" class="btn btn-primary">Buy Package</a>
				  </div>
				</div>

			</div>
			<?php 
			}	
		}
		?>
	</div>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>