<?php include 'includes/header.php'; ?>

<div class="padding-top">

<?php  
// set banners/welcome message based on time of day
// Set timezone to MST
date_default_timezone_set("US/Mountain");
// Set $hour to current hour
$hour = date("H:i");

// if/else to create new messages based on hour
if ($hour <= "12:00") { ?>

	<div class="banner" style="background-image: url('img/mountainbeach.jpg');"><h1 class="welcomeText">Good Morning</h1></div>

<?php } else if ($hour > "12:00" && $hour <= "17:00") { ?>

	<div class="banner" style="background-image: url('img/building.jpg');"><h1 class="welcomeText">Good Afternoon</h1></div>

<?php } else { ?>

	<div class="banner" style="background-image: url('img/oceanside.jpg');"><h1 class="welcomeText">Good Evening</h1></div>

<?php } ?>

	<div class="jsImgContainer">
		<!-- Display photo array in table -->
		<div id="showImgs">
			<!-- Placeholder images -->
			<img id="changeImg" src="img/travelimg1.jpg"></img>
		</div>
		<!-- Text with mouseover function -->
		<div id="imgRow"></div>

	</div><!-- /jsImgContainer -->

	<img src="img/jetplane.png" id="airPlane">

	<img class="travelpics" src="img/camels.jpg">
	<img class="travelpics" src="img/beach.jpg">
	<img class="travelpics" src="img/train.jpg">
	
	<p class="pt-5 pb-5">We're excited to sell you a vacation! If you like seeing new things, you'll love a vacation. Vacations are the best! We can send you anywhere in the world. We can even make a decision for you on where to go. Whether you want relaxing, entertaining, or dangerously exciting, we can help you out. We are the Travel Experts.</p>

	</div><!-- /padding-top -->
</div><!-- /container -->	

<div class="padding-top padding-bottom footerupper">

	<div class="container">

		<button class="contactbtn" onClick="location.href='<?php echo $contactPage; ?>';">
			<span class="btnhover"><i class="fas fa-phone"></i> Contact</span>
		</button>

		<button class="registerbtn" onClick="location.href='<?php echo $registerPage; ?>';">
			<span class="btnhover"><i class="far fa-clipboard"></i> Register</span>
		</button>

	</div><!-- /container -->
</div><!-- /pt-pb-fu -->
<?php include 'includes/footer.php'; ?>