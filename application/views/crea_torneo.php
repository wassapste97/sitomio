

<!-- Homepage Hero
================================================== -->
<section id="hero">

    <div class="row">

        <div class="twelve columns">

            <div class="hero-text">
                <h1 class="responsive-headline">CREA IL TORNEO</h1>
            </div>

           <?php echo form_open('Torneo/caricaTorneo') ; ?>
            <fieldset>
                <div align="center">
                      <div  class ="form-group">
                          <div  class="inline"> 
                            <input type="text" name="nome"  placeholder="Nome"  required>
                          </div>
                      </div>
                          <p class="responsive-headline">Numero partecipanti</p>
                       <select name="partecipanti" class="selectpicker">
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                            <option value="20">20</option>
                       <select>
                          <p class="responsive-headline">Selezionare gioco</p>
                       <select name="id_gioco" class="selectpicker">
                            <?php foreach($gioco as $gioco_items): ?>
                               <option value="<?php echo $gioco_items['id']?>"><?php echo $gioco_items['nome']?></option>
                            <?php endforeach; ?>
                       <select>
                  <div class="form-group">
                    <input type="submit" value="Crea" name="subscribe" id="mc-embedded-subscribe" class="button">
                  </div> 
                </div>
            </fieldset>
          </form>

        </div>

    </div>

</section> <!-- Homepage Hero end -->



