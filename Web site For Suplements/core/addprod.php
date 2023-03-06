<?php
session_start();
require_once('../config.php');
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser']['type']=='admin') {
$aid = $_SESSION['loggeduser']['id'];
}else{
	die('you are not admin');
}

$title = $_POST['name'];
$cat = $_POST['category'];
$img = $_FILES['img'];
$price = $_POST['price'];

$tmp = $img['tmp_name'];
$name = $img['name'];
$ext = pathinfo($name,PATHINFO_EXTENSION);
$nname = md5(rand().date('h-s-i-a')).".".$ext;

$sql = "INSERT INTO `product`(`title`,`admin`,`description`, `category`, `price`,`img`) VALUES ('".$title."','$aid','','$cat','$price','$nname')";
$run = $con->query($sql);
if ($run==true) {
move_uploaded_file($tmp, '../prodimg/'.$nname);
header('location:../allprod.php');
}else{
	echo "failed to upload image";
}
?>