<?php require_once('header.php'); ?>
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="common-form">
                     <div class="form-title">
                        <p>Login here</p>
                     </div>
                        <div class="full">
                        <form action="core/login.php" method="POST">
                           <fieldset>
                              <input type="email" placeholder="Enter your email address" name="email" required />
                              <input type="password" placeholder="Enter your password" name="pass" required />
                              <input type="submit" value="Login" />
                           </fieldset>
                        </form>
                        </div>
                        <br>
                        <p>Don`t have an account ? sign up here <a href="signup.php">Signup</a></p>
                  </div>   
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

<?php //require_once('footer.php'); ?>