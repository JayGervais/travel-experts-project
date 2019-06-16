<?php 
# JAY GERVAIS
// page used to edit Agent account information

include 'includes/header.php'; 
include 'forms/errorhandling.php'; 
//include 'includes/classes/Agent.php';
include 'includes/classes/User.php';

// new User class
$user = new User($conn, $userId);

include 'includes/agent-dashboard-nav.php';
?>
<div class="padding-top padding-bottom">

<div class="animation-element slide-up">
	<div class="containerTwo">
		<div class="backgroundclr">
			<h1>Edit Details</h1>
			<p>Edit your information or delete your account</p><br>
			<?php include 'forms/edit-details-form.php'; ?>
		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->
</div>

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>