<?php 



include('config.php')

	
 ?>
<!DOCTYPE html>
<head>
  <title>E-Pharmacy</title>
  
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  
  

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">
	
	<?php
			if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
     if(isset ($_SESSION['username']) ){
                header ("Location: profile.php");
                exit; // stop further executing, very important
            }
  ?>

</head>

<body>

  <div class="site-wrap">


    <?php include 'header.php';?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Login</strong>
          </div>
        </div>
      </div>
    </div>

	
    <div class="container">
   
   <br />
   <div class="col-md-8" style="margin:0 auto; float:none;">
   <h2 class="h3 text-black">Login</h2>
    <form method="post" action="login.php">
    
     <br />

     
     <div class="form-group">
		
		<?php foreach ($errors as $error) : ?>
		<p><?php echo $error ?></p>
		<?php endforeach ?>
		
      <label>Enter Username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter Username" value="" />
     </div>


     <div class="form-group">

     <label>Enter Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" value="" />
     </div>

     <div class="form-group" align="center">
      <input type="submit" name="login_user" class="btn btn-info" value="login" />
     </div>

    </form>
    <div>
        <p>Don't have account? <a href = "signup.php">Sign up</a>
    </div>


   </div>
  </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Services</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Medicine</span>
              <p class="mb-0">We sale the best quality of medicine</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Medical Equipment</span>
              <p class="mb-0">We sale the best quality of medicine</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Home dELIVERY</span>
              <p class="mb-0">We sale the best quality of medicine</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>


    <?php include 'footer.php';?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>






