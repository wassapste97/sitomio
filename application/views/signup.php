

<!-- Homepage Hero
================================================== -->
<section id="hero">

    <div class="row">

        <div class="twelve columns">

            <div class="hero-text">
                <h1 class="responsive-headline">ISCRIVITI.</h1>
            </div>

           <?php echo form_open('pages/gestisci/0/aggiungi') ; ?>
            <fieldset>
                <div align="center">
                      <div  class ="form-group">
                          <div  class="inline"> 
                            <input type="text" name="nome"  placeholder="Nome"  required>
                          </div>
                          <div class="inline"> 
                            <input type="text" name="cognome"  placeholder="Cognome"  required>
                          </div>
                      </div>
                      <div  class ="form-group">
                          <div  style="width:49%"> 
                                <input type="date" name="nascita" class="form-control" placeholder="AAAA-MM-GG">
                          </div>
                          <br/>
                          <div style="width:49%"> 
                                <input type="text" name="username"  placeholder="Username"  required>
                          </div>
                      </div>
                      <br/>
                      <div  class ="form-group">
                          <div class="inline"> 
                              <input type="email" name="email"  placeholder="email address"  required>
                          </div>
                          <div class="inline">
                            <input type="password"  name="password" placeholder="password" required>
                          </div>
                      </div>  
                  <div class="form-group">
                    <input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button">
                  </div> 
                </div>

            </fieldset>
            
          </form>

        </div>

    </div>

</section> <!-- Homepage Hero end -->



