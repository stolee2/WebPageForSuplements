<?php
require_once('../config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$sel  = "SELECT * FROM `user` WHERE email='$email'";
if (mysqli_num_rows($con->query($sel))!='0') { ?>
	
<script>
	alert('User already exist');
	window.location.href='../signup.php';
</script>

<?php }else{
$sql = "INSERT INTO `user`(`name`,`email`,`pass`) VALUES ('$name','$email','$pass')";
$run = $con->query($sql);
	if ($run==true) {
	header('location:../verify.php');
	}
}

?>