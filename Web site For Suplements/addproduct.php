<?php require_once('header.php'); ?>
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="common-form">
                     <div class="form-title">
                        <p>Add new product</p>
                     </div>
                        <div class="full">
                        <form action="core/addprod.php" method="POST" enctype="multipart/form-data">
                           <fieldset>
                              <input type="text" placeholder="Enter product name" name="name" required />
                              <input type="number" placeholder="Enter product price $" name="price" required />
                              <select required name="category">
                                 <option class="optgroup" value="">select category</option>
                                 <option class="optgroup" value="equipments">Equipments</option>
                                 <option class="optgroup" value="cloths">Cloths</option>
                              </select>
                              <input type="file" name="img" placeholder="select image" />
                              <input type="submit" value="Save" />
                           </fieldset>
                        </form>
                        </div>
                  </div>   
               </div>
            </div>
         </div>
      </section>

