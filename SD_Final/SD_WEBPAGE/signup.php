<?php include('config.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>E-Pharmacy</title>
  
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  
  

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">
  
  

</head>

<body>

  <div class="site-wrap">


    <?php include 'header.php';?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Sign Up</strong>
          </div>
        </div>
      </div>
    </div>

	
    <div class="container">
   
   <br />
   <div class="col-md-8" style="margin:0 auto; float:none;">
   <h2 class="h3 text-black">Sign Up</h2>
    <form method="post"  action="signup.php">
    
     <br />

     
     <div class="form-group">

      <label>Enter Name</label>
      <input type="text" name="username" placeholder="Enter Name" class="form-control" value="" />
     </div>
     <div class="form-group">

      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="" />
     </div>
     <div class="form-group">

      <label>Enter Gender</label>
      
      <select name="gender" class="form-control" placeholder="Enter Gender" value="">
        <option value="Male">Male</option>
	    <option value="Female">Female</option>
        </select>
     </div>
	 
	 <div class="form-group">

      <label>Enter Phone Number</label>
      <input type="text" name="phonenumber" class="form-control" placeholder="Enter Phone Number" value="" />
     </div>
	 
	 <div class="form-group">

      <label>Enter Address</label>
      <input type="text" name="address" class="form-control" placeholder="Enter address" value="" />
     </div>

     <div class="form-group">

      <label>Enter Password</label>
      <input type="password" name="password_1" placeholder="Enter password" class="form-control" value="" />
     </div>
	 
	 <div class="form-group">

      <label>Retype Password</label>
      <input type="password" name="password_2" placeholder="Enter password" class="form-control" value="" />
     </div>

     <div class="form-group" align="center">
      <input type="submit" name="reg_user" class="btn btn-info" value="Submit" />
     </div>
    </form>
    <p>Go to <a href = "login.php">Login Page</a>
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












