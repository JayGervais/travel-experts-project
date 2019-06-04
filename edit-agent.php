<?php 
include 'includes/header.php'; 
include 'forms/errorhandling.php'; 
//include 'includes/classes/Agent.php';
include 'includes/classes/User.php';

// new User class
$user = new User($conn, $userId);
?>

<div class="padding-top padding-bottom">

	<div class="containerTwo">

		<div class="backgroundclr">
			<h1>Edit Details</h1>
			<p>Edit your information or delete your account</p><br>
			
			<?php include 'forms/edit-details-form.php'; ?>

		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->
</div><!-- /padding-top padding-bottom -->

<?php include 'includes/footer.php'; ?>