<?php
$host = 'localhost';
$user ='root';
$pass = '';
$db = 'demodatabase';
$con = mysqli_connect($host,$user,$pass,$db);
if ($con==true) {
	# code...
}else{
	die('connection_aborted');
}
function rdi($val){
	echo "<script>window.location.href='$val'</script>";
}
?>