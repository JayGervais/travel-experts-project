<?php
include_once 'global.php';
include_once 'connect.php';
include_once 'components/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Travel Experts - We Send You Places</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CDN-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- Custom Style Sheet -->
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:900|Quicksand&display=swap" rel="stylesheet">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
      	<a href="<?php echo $homePage; ?>">
	      	<img class="logo" src="img/compass.png">
	        <h1 class="headertitle">Travel Experts</h1>
        </a>
      </div>
    </div>
  </div>
</header>
<!-- Main Navigation -->
<nav id="mainNav">
	<div class="urls">
		<span id="openNav" onclick="openNav()">&#9776;</span>
		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
				<ul>
					<li><a href="<?php echo $homePage; ?>" id="homePage"><i class="fas fa-home"></i> Home</a></li>
					<li><a href="<?php echo $registerPage; ?>"><i class="far fa-clipboard"></i> Register</a></li>
					<li><a href="<?php echo $contactPage; ?>"><i class="fas fa-phone"></i> Contact</a></li>
					<li><a href="<?php echo $linksPage; ?>"><i class="fas fa-link"></i> Links</a></li>
					<li><a href="<?php echo $agents; ?>"><i class="fas fa-address-card"></i> Agents</a></li>
					<li><a href="<?php echo $packages; ?>"><i class="fas fa-plane"></i> Packages</a></li>
					<li><a href="<?php echo $custLogin; ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div class="container">
