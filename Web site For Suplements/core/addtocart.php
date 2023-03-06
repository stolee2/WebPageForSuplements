<?php
session_start();
require_once('../config.php');
if (isset($_SESSION['loggeduser'])) {
$uid = $_SESSION['loggeduser']['id'];
}else{
	die('you are not logged in');
}

$id = $_REQUEST['pid'];
$sql1 = "SELECT * FROM `product` WHERE id='$id'";
$run1 = $con->query($sql1);
$prd = mysqli_fetch_array($run1);
$pid = $prd['id'];
$price = $prd['price'];


$sql = "INSERT INTO `cart`(`prodid`, `userid`, `price`) VALUES ('$pid','$uid','$price')";
$run = $con->query($sql);
if ($run==true) {
header('location:../cart.php');
}else{
	echo "failed to add";
}
?>