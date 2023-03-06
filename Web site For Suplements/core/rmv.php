<?php
session_start();
require_once('../config.php');
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser']['type']=='admin' OR $_SESSION['loggeduser']['type']=='user') {
$aid = $_SESSION['loggeduser']['id'];
}else{
die('you are not admin');
}


	if (isset($_REQUEST['rmvprod'])) {
		$id = $_REQUEST['rmvprod'];

		$sql = "DELETE FROM `cart` WHERE id=$id AND userid='$aid'";
		$run = $con->query($sql);
		if ($run==true) {
		header('location:../cart.php?deleted');
		}else{
		echo "failed to delete product";
		}
	}

?>