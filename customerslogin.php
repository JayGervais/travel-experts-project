<?php
include 'includes/header.php';
include 'includes/functions.php';
?>
<p class="agntloginlink"><a href="<?php echo $custLogin; ?>" class="agntloginlink"><?php echo $loginLogo; ?></a></p>

<div class="padding-top padding-bottom">

  <div class="containerTwo">
		<div class="backgroundclr">
      <h1>Customer Login</h1>
        <p>Log in to your account</p><br>

    <?php



      //mysql_select_db('travelexperts',$con);//get travelexperts
  ?>

<form action="" method="post" name="userLoginForm" id="userLoginForm">
    <table>
  	<tr>
  	<td>User Email</td>
  		<td class="widetd">
  			<input type="text" id="useremail" name="useremail"  maxlength="50" />
  			<span class="error" id="userNameError"></span></td>
  	</tr>
  	<tr>
  	<td>Password</td>
  		<td class="widetd">
  			<input type="password" id="password" name="password" maxlength="50" />
  		<span class="error" id="passwordError"></span></td>
  	</tr>
  	<tr>
  	<td></td>
  		<td class="widetd"><button type="submit" name="Submit" value="Submit">Login</button>
  		<button type="reset" value="reset">Reset</button></td></tr>
  	</table>
</form>


<?PHP
    //print_r ($_POST);
   if(!isset($_POST["Submit"])){
        exit("");
    }//check sumbit

//    include('connect.php');  */
    $useremail = $_POST['useremail'];//post get username
    $passowrd = $_POST['password'];//post get password

    if ($username && $passowrd){//

            $con = mysqli_connect("localhost","root","","travelexperts");//connect
            if(!$con){
                die("can't connect".mysql_error());//error
            }

      $sql = "SELECT * FROM customers WHERE CustEmail = '$useremail' AND CustPassword ='$passowrd' ";
          //   print($sql)."<br>";
            $result = mysqli_query($con,$sql);//get result
          //  print_r($result)."<br>";
           $rows = mysqli_num_rows($result);//get result
          // echo "<br>".$rows;
             if($rows==1){//0 false 1 true
                  echo "you r in!!";
                   header('Location:index.php'); //redirct to main page
                   exit;
             }else{
                echo "wrong username or passowrd ";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='customerslogin.php';},5000);
                    </script>

                ";//wrong result reload the login page ;
             }
            // mysql_close($con);

    }
  /*  else{//if there is empty post
                echo "please enter username and passowrd ";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";

                        //reload the page
    }  */

    //close the connection
?>


		</div><!-- /backgroundclr -->
	</div><!-- /containerTwo -->

</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>