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

				<?php echo form_open('<?php echo base_url("index.php/admin/conferma");?>/' . $comando. '/'.$id) ; ?>
					
					<fieldset>
						<div class="form-group">
							<p>Nome e cognome:</p>
							<input class="form-control" value="<?php echo $nome_cognome; ?>" name="nome_cognome" <?php echo $proprieta; ?>>
						</div>
						
						<div class="form-group">
							<p>Username: </p>
							<input class="form-control" value="<?php echo $username; ?>" name="username" <?php echo $proprieta; ?>>
						</div>
						<div class="form-group">
							<p>Password: </p>
							<input class="form-control"  name="password" type="password" value="" <?php echo $proprieta; ?>>
						</div>
				
						<!-- Change this to a button or input when using this as a form -->
						<a href="<?php echo base_url("index.php/admin");?>" class="btn btn-lg btn-danger ">Annulla</a>
						<input class="btn btn-lg btn-success " type="submit" name="submit" value="Conferma" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

   
