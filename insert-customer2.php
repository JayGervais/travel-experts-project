<?php 
# JAY GERVAIS
// (not used in group project) - testing functionality of adding new Customer accounts based on class structure I used to create Agent accounts.

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