<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
<div class="container">
  <a class="navbar-brand" href="<?php echo $agentAccount; ?>"><?php echo $user->userFName() . " " . $user->userLName(); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      		<a class="nav-link" href="<?php echo $agentAccount; ?>"><i class="fas fa-user"></i> Edit Account</a></a>
    	</li>
    	<li class="nav-item">
      		<a class="nav-link" href="<?php echo $login; ?>"><i class="fas fa-address-card"></i> Add An Agent</a></a>
    	</li>
    	<li class="nav-item">
      		<a class="nav-link" href="<?php echo $addPackages; ?>"><i class="fas fa-plane"></i> Add A Package</a></a>
    	</li>


    	<li class="nav-item">
      		
    		<form action="" method="post" name="userLogoutMsg" id="userLogoutMsg">
				<i class="fas fa-sign-out-alt"></i> <input type="submit" name="logout" value="Logout" id="logoutbtn">
			</form>	

    	</li>



    </ul>
  </div>
</div>
</nav>