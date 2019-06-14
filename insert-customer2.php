<?php 
include 'includes/header.php'; 
include 'includes/classes/CustomerAccount.php';
//include 'includes/functions.php'; 
?>
	<div class="padding-top padding-bottom">
		
		<?php  
		$customer = new CustomerAccount();

		$customer->createCustomer($conn);
		?>
		<div class="agentcard">
		<?php
		echo $customer->customerString();
		?>
		</div>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>