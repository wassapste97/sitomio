<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $comando; ?></h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel-body">

				<?php echo validation_errors(); ?>

				<?php echo form_open('<?php echo base_url("index.php/admin_gioco/conferma");?>/' . $comando. '/'.$id) ; ?>
					
					<fieldset>
						<div class="form-group">
							<p>Nome gioco:</p>
							<input class="form-control" value="<?php echo $nome; ?>" name="nome" <?php echo $proprieta; ?>>
						</div>
						
						<div class="form-group">
							<p>Console: </p>
							<input class="form-control" value="<?php echo $console; ?>" name="console" <?php echo $proprieta; ?>>
						</div>
						<div class="form-group">
							<p>Producer: </p>
							<input class="form-control"  name="producer" value="<?php echo $producer; ?>" <?php echo $proprieta; ?>>
						</div>
				
						<!-- Change this to a button or input when using this as a form -->
						<a href="/sito/admin_gioco" class="btn btn-lg btn-danger ">Annulla</a>
						<input class="btn btn-lg btn-success " type="submit" name="submit" value="Conferma" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

   
