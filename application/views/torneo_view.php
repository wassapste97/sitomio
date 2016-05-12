

<!-- Homepage Hero
================================================== -->
<section id="pricing">
  <div class="row section-head">
     <h1>Tornei in corso</h1>
     <p>Partecipa ad un torneo, o creane uno.
     </p>

  </div>
    <div class="pricing-tables bgrid-quarters s-bgrid-halves">
    <div class="row">
        <?php foreach($torneo as $torneo_items): ?>
          <div class="columns">
            <div class="price-block">
              <h3 class="plan-price"><?php echo $torneo_items['nome'] ?></h3>
              <ul class="features">
                 <li>Organizzatore: <?php echo $torneo_items['organizzatore'] ?></li>
                 <li>Numero partecipanti: <?php echo $torneo_items['numero_partecipanti'] ?></li>
                 <li>Gioco: <?php echo $torneo_items['nome_gioco'] ?></li>
                 <li>Console: <?php echo $torneo_items['console'] ?></li>
                 <li>Produttore: <?php echo $torneo_items['producer'] ?></li>
              </ul>
              <footer class="plan-sign-up">
                 <a class="button" href="<?php echo base_url("index.php/Torneo");?>/partecipa/<?php echo $torneo_items['id_torneo'] ?>/<?php echo $torneo_items['id_gioco']?>">Partecipa</a>
              </footer>
           </div> <!-- End Price Block --> 
          </div> 
        <?php endforeach; ?>
        <div class="columns">
            <div class="price-block">
              <h3 class="plan-title">Crea un torneo</h3>
              <footer class="plan-sign-up">
                 <a class="button" href="<?php echo base_url("index.php/Torneo");?>/creaTorneo">Crea</a>
              </footer>
            </div> <!-- End Price Block --> 
        </div> 
      </div>
    </div>

</section> <!-- Homepage Hero end -->



