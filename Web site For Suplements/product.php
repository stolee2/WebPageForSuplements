<?php require_once('header.php'); ?>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">

<?php
$sql = "SELECT * FROM `product`";
$run = $con->query($sql);
while ($data = mysqli_fetch_array($run)) { ?>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <?php 
                           if ($ut=='user') { ?>
                              <a href="core/addtocart.php?pid=<?php echo $data['id'];?>" class="option1">Add To Cart</a>
                           <?php }elseif ($ut=='') { ?>
                             <a href="login.php" class="option1">login first</a>
                           <?php } ?>
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
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
<?php require_once('footer.php'); ?>