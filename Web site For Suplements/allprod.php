<?php 
// session_start();
require_once('header.php'); 
$id = $_SESSION['loggeduser']['id'];
?>   

      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Your all <span>products</span>
               </h2>
            </div>
            <div class="row">


<?php
$sql = "SELECT * FROM `product` WHERE admin='$id'";
$run = $con->query($sql);
while ($data = mysqli_fetch_array($run)) { ?>

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="core/delete.php?delprod=<?php echo $data['id'];?>" class="option1">
                           Delete
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="prodimg/<?php echo $data['img'];?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo $data['title'];?>
                        </h5>
                        <h6>
                           $<?php echo $data['price'];?>
                        </h6>
                     </div>
                  </div>
               </div>
<?php } ?>
               
            </div>
         </div>
      </section>
      <!-- end product section -->
<?php require_once('footer.php'); ?>
