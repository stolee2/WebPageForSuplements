<?php
session_start();
require_once('../config.php');

$email = $_POST['email'];

if ($email=='admin@gmail.com') {
	$type = 'admin';
}else{
	$type = 'user';
}






$pass = md5($_POST['pass']);
$sel  = "SELECT * FROM `user` WHERE email='$email' && pass='$pass'";
$run = $con->query($sel);
if (mysqli_num_rows($run)!='0') {
$data = mysqli_fetch_array($run);
$id = $data['id'];
$_SESSION['loggeduser'] = ['email'=>$email,'id'=>$id,'type'=>$type];
header('location:../');
}else{ ?>
<script>
	alert('User not found');
	window.location.href='../login.php';
</script>
<?php } ?>