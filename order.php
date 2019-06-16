<?php 
# JAY GERVAIS
// created template with GET to display Package information for orders 

# DUWA
// created form and functionality for creating new orders

include 'includes/header.php'; 
include 'includes/variables.php'; 
include 'includes/functions.php'; 
?>
<div class="padding-top padding-bottom">

	<?php  
	$id = $_GET['id'];

	$sql = "SELECT * FROM packages WHERE PackageId='$id'";
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
		}
	?>
	<div class="row">

	  <div class="col-lg-4">
        <div class="animation-element slide-up">
        	<div class="card">
	          <img class="card-img-top img-fluid" src="<?php echo $packageImage; ?>" alt="">
	          <div class="card-body">
	            <h3 class="card-title"><?php echo $packageName; ?></h3>
	            <p class="dates"><strong>Start Date:</strong> <?php 
				    	if(date_format(new DateTime($packageStartDateDB), 'Y/m/d') <= date_format(new DateTime(), 'Y/m/d')) {
							echo "<span class='date-warning'>" . $packageStartDate . '</span>';
						} else {
					    	echo $packageStartDate; 
						}?><br>
				    	<strong>End Date:</strong> <?php echo $packageEndDate; ?></p>
	            	<h4><span class="price">Total:</span> $<?php echo number_format((float)$packageBasePrice, 2, '.', ','); ?></h4>
	            <p class="card-text"><?php echo $packageDescription; ?></p>
	          </div>
	        </div>
	       </div><!-- /animation-element slide-up -->

      </div><!-- /.col-lg-4 -->
		
      <div class="col-lg-8">
			<!-- Add form Below -->
			<div class="animation-element slide-up">
				<div class="containerTwo">
					<div class="backgroundclr">
						<h1>Complete Your Order</h1>
						<p>Fill out the information below to purchase your dream vacation</p><br>
						<?php include 'forms/order-form.php'; ?>
					</div><!-- /containerTwo -->
				</div><!-- /backgroundclr -->
			</div><!-- /animation-element slide-up -->

      </div><!-- /.col-lg-8 -->
	</div><!-- /row -->

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>