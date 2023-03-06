<?php
session_start();
require_once('../config.php');
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser']['type']=='admin') {
$aid = $_SESSION['loggeduser']['id'];
}else{
	die('you are not admin');
}


	if (isset($_REQUEST['delprod'])) {
		$id = $_REQUEST['delprod'];
		$sql1 = "SELECT * FROM `product` WHERE id='$id'";
		$run1 = $con->query($sql1);
		$prd = mysqli_fetch_array($run1);
		unlink('../prodimg/'.$prd['img']);



		$sql = "DELETE FROM `product` WHERE id='$id'";
		$run = $con->query($sql);
		if ($run==true) {
		header('location:../allprod.php');
		}else{
		echo "failed to delete image";
		}
	}
?>