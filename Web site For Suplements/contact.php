<?php require_once('header.php'); ?>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">

                  <div class="common-form">
                     <div class="form-title">
                        <p>Contact us</p>
                     </div>
                  <div class="full">
                     <form action="core/contact.php" method="POST">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="Name" required />
                           <input type="email" placeholder="Enter your email address" name="Email" required />
                           <!-- <input type="text" placeholder="Enter subject" name="subject" required /> -->
                           <textarea placeholder="Enter your message" name="Message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>

               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
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
<?php require_once('footer.php'); ?>