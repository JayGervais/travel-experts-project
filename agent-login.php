<?php 
# JAY GERVAIS
// Page used for Agents to log into account.

include 'includes/header.php'; 
include 'includes/functions.php'; 
?>

<div class="padding-top padding-bottom">
	<div class="containerTwo">

		<div class="backgroundclr">

		<?php  
		$message = "";
		// check if login form was submitted
		if(!empty($_POST["login"])) {
			// assign variables to email and password + trim and remove special characters
			$useremail = trim(htmlspecialchars($_POST['useremail']));
			$password = trim(htmlspecialchars($_POST['password']));
			// create a password to select password from user with matching email.
			$pass_query = mysqli_query($conn, "SELECT password FROM agents WHERE AgtEmail='$useremail'");
		    $pass = mysqli_fetch_array($pass_query);
		    $hashed = $pass['password']; 
		    // verify password with hash in the database
		   	if(password_verify($password, $hashed)) {
		   		// select all from user if password matches
				$result = mysqli_query($conn, "SELECT * FROM agents WHERE AgtEmail='" . $useremail . "'");
				$row  = mysqli_fetch_assoc($result);
				// if query successful, create a new session from id in table
				if(is_array($row)) {
					$_SESSION["AgentId"] = $row['AgentId'];
				}
			} else {
				$message = "<p class='errorForm'>Invalid Email or Password</p>";
				}
			}
			// if session is empty, show login
			if(empty($_SESSION["AgentId"])) { ?>

				<h1>Agent Login</h1>
				<p>Log in to add agents to the database</p><br>
	 			<?php
	 			
	 			echo $message;
	 			include 'forms/login-form.php'; 

 			} else { 
 				header("Location: addagent.php");
 			} ?>

		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>