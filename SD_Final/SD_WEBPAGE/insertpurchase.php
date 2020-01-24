<?php
$selectedquantity = "";
$ItemName1="";
$cartImage="";
$cartPrice="";
$db1 = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['cart'])) {
	$selectedquantity = mysqli_real_escape_string($db1, $_POST['quantityofitem']);
	$ItemName1 = mysqli_real_escape_string($db1, $_POST['nameForCart']);
	
	if (empty($quantityofitem)) { array_push($errors, "Number is required"); }

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT image,price FROM store WHERE itemname='$ItemName1'  ";
$result = $conn->query($sql);
$row = $result->fetch_assoc()

$cartImage=$row['image'];
$cartPrice=$row['price'];

$query = "INSERT INTO insertpurchase (image, name, quantity, price) 
  			  VALUES('$cartImage', '$ItemName1', '$selectedquantity' ,'$cartPrice' )";
  	mysqli_query($db, $query);

}
?>