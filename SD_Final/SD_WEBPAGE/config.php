<?php


        session_start(); 
    

// initializing variables
$username = "";
$email    = "";
$user="";


$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phonenumber)) { array_push($errors, "Phone Number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, phonenumber, address) 
  			  VALUES('$username', '$email', '$password' ,'$phonenumber' , '$address')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  
  
}


// LOGIN USER
if (isset($_POST['login_user'])) {
	

	
	
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  
  	  $_SESSION['success'] = "You are now logged in";
	  
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



if (isset($_POST['sendmessage'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lname']);
  $cemail = mysqli_real_escape_string($db, $_POST['cemail']);
  $csubject = mysqli_real_escape_string($db, $_POST['subject']);
  $cmessage = mysqli_real_escape_string($db, $_POST['message']);
  
  
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($cemail)) { array_push($errors, "Email Number is required"); }
  if (empty($csubject)) { array_push($errors, "Subject is required"); }
  if (empty($cmessage)) { array_push($errors, "Message is required"); }


	$query = "INSERT INTO contact (firstname, lastname, email, subject, message) 
  			  VALUES('$firstname', '$lastname', '$cemail' ,'$csubject' , '$cmessage')";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Your message has sent";
  	header('location: index.php');
}





?>