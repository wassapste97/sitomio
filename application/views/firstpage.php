


<!-- Homepage Hero
================================================== -->
 <section id="hero">

     <div class="row">

       <div class="twelve columns">

         <div class="hero-text">
           <h1 class="responsive-headline">NEVER STOP GAMING</h1>

           <p>Se è un SocialNetwork per videogiocatori che tu cerchi, allora sei arrivato nel posto giusto.
           Organizza tornei, trova persone, esprimi le tue opinioni su videogiochi e tanto altro.</p>
         </div>
          <?php echo form_open('pages/login') ; ?>
            <fieldset>
                  <div  align="center">
                      <div class="inline" class="form-group"> 
                          <input type="email" name="email"  placeholder="email address"  required>
                      </div>
                      <div class="inline" class="form-group">
                        <input type="password"  name="password" placeholder="password" required>
                      </div>
                   <br/>
                  <div class="form-group">
                    <input type="submit" value="Log in" name="subscribe" id="mc-embedded-subscribe" class="button">
                  </div> 
                  </div>
            </fieldset>
            
          </form>
            <div class="hero-image" >
               <img src="<?php echo base_url();?>resources/images/videogiochi.jpg" alt="" />
            </div>

       </div>

     </div>

   </section> <!-- Homepage Hero end -->

