
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Gestione Admin</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-red">
				<div class="panel-heading">
					Elenco admin
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nome</th>
										<th>Cognome</th>
										<th>Username</th>
										<th>Email</th>
										<th>Stato</th>
										<th>Elimina</th>
									</tr>
								</thead>				
						   <?php foreach($utente as $utente_item): ?>
								<tbody>
									<td><?php echo $utente_item['id']; ?></td>
									<td><?php echo $utente_item['nome']; ?></td>
									<td><?php echo $utente_item['cognome']; ?></td>
									<td><?php echo $utente_item['username']; ?></td>
									<td><?php echo $utente_item['email']; ?></td>
									<td><?php echo $utente_item['stato']; ?></td>
									<td><a href="<?php echo base_url("index.php/admin/verifica_password");?>/<?php echo $utente_item['id']; ?>/elimina" class="btn btn-md btn-danger btn-block" style="color:white">Elimina</a></td>
								</tbody>
							<?php endforeach; ?>
						</table>
					</div>
					<!-- /.table-responsive -->
								</div>
			</div>
		</div>
	</div>
            
