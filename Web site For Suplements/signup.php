<?php require_once('header.php'); ?>
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="common-form">
                     <div class="form-title">
                        <p>Register here</p>
                     </div>
                        <div class="full">
                        <form action="core/signup.php" method="POST">
                           <fieldset>
                              <input type="text" placeholder="Enter your name" name="name" required />
                              <input type="email" placeholder="Enter your email address" name="email" required />
                              <input type="password" placeholder="Enter your password" name="pass" required />
                              <input type="submit" value="Register" />
                           </fieldset>
                        </form>
                        </div>
                  </div>   
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

<?php //require_once('footer.php'); ?>