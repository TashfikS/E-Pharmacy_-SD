<?php include('config.php') ?>
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
     if(!isset ($_SESSION['username']) ){
                header ("Location: login.php");
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
            <strong class="text-black">Profile</strong>
			
          </div>
		  
		  <div class="signoutButton" >
		  <a href="logout.php"><strong class="text-danger">Logout</strong></a>

		</div>
		</div>
		<div class="col-md-8" style="margin:0 auto; float:none;">
		<h2 class="h3 text-black">User Details<br></br></h2>
		  
		 
<?php
$Username=$_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "registration");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users WHERE Username='$Username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row

$row = $result->fetch_assoc();

echo "<h3>Name : ".$row["username"]." </h3>";

echo "<h3>Email : ".$row["email"]." </h3>";

echo "<h3>Phone :".$row["phonenumber"]."  </h3>";

echo "<h3>Address : ".$row["address"]." </h3>";

} 

else
	{ echo "There are user date available"; }
$conn->close();
?>






		  
		   </div>
        </div>
      </div>
    </div>
	
	
	
	


    <?php include 'footer.php';?>
  

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
