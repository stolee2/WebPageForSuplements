<?php
require_once('header.php');
// session_start();
if (isset($_SESSION['loggeduser'])) {
$uid = $_SESSION['loggeduser']['id'];
}else{
rdi('login.php');
}

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="cart-area">
				<div class="cart-header"><h3>Shopping cart</h3></div>
				<hr>
				<div class="cart-body-area">

					<div class="single-prod">
						<span class="image">Product image</span>
						<span class="prodtite">Product title</span>
						<span class="prodprice">Price</span>
						<span class="prodaction">Action</span>
					</div>
					<hr>

<?php
$sql = "SELECT * FROM `cart` WHERE userid='$uid' AND status!='paid'";
$run = $con->query($sql);
$total = 0;
while ($data = mysqli_fetch_array($run)) {
$pid = $data['prodid'];

$sqlp = "SELECT * FROM `product` WHERE id='$pid'";
$runp = $con->query($sqlp);
$datap = mysqli_fetch_array($runp);
$total += $data['price'];
?>
					<div class="single-prod">
						<span class="image"><img height="50px" src="prodimg/<?php echo $datap['img'];?>" alt=""></span>
						<span class="prodtite"><?php echo $datap['title'];?></span>
						<span class="prodprice">$<?php echo $data['price'];?></span>
						<span class="prodaction"><a href="core/rmv.php?rmvprod=<?php echo $data['id'];?>" class="rmv-btn">Remove</a></span>
					</div>
					<hr>
<?php } ?>

					<div class="single-prod">
						<span class="image"></span>
						<span class="prodtite"></span>
						<span class="prodprice total">Total $<?php echo $total; ?></span>
						<span class="prodaction"><div class="checkout"><a href="core/checkout.php">Checkout</a></div></span>
					</div>

				</div>					

			</div>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>