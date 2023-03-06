<?php require_once('header.php'); ?>   
      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/arrival-bg.png" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #Fitness Quote
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                        “Stop making excuses and start giving yourself enough reasons why you must eat healthier and exercise regularly. Excuses are your enemies of progress.”
                     </p>
                     <a href="">
                     Shop Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      
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
<!--             <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> -->
         </div>
      </section>
      <!-- end product section -->
<?php require_once('footer.php'); ?>
