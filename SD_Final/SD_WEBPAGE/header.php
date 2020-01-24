<?php 
   if(!isset($_SESSION)) 
    { 
        session_start();
		
    }
	
	
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="site-navbar py-2">



      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">E-Pharmacy</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
				<li class="active"><a href="about.php">About</a></li>
                <li class="active"><a href="store.php">Store</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
				
              </ul>
			  
            </nav>
			
          </div>
          <div class="icons">
		  
				<a href="profile.php"><?php
				
				
				if(isset($_SESSION['username'])){
						$sessionVar = $_SESSION['username'];
   //unset($_SESSION['username']);

				echo $sessionVar;
				}
				?></a>
				
			    <button class="btn" ><a href="profile.php"><i class="fa fa-user" ></i></a></button>
				<button class="btn"><a href="cart.php"><i class="fa fa-cart-plus"></i></a></button>
				<button class="btn"><a href="login.php"><i class="fa fa-user-plus"></i></a></button>
          </div>
        </div>
      </div>
    </div>
	
	
	
	
	
	</body>

</html>