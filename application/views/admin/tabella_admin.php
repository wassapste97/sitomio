
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
										<th>Nome e cognome</th>
										<th>Username</th>
										<th>Modifica</th>
										<th>Elimina</th>
									</tr>
								</thead>				
						   <?php foreach($admin as $admin_item): ?>
								<tbody>
									<td><?php echo $admin_item['id']; ?></td>
									<td><?php echo $admin_item['nome_cognome']; ?></td>
									<td><?php echo $admin_item['username']; ?></td>
									<td><a href="<?php echo base_url("index.php/admin/verifica_password");?>/<?php echo $admin_item['id']; ?>/modifica" class="btn btn-md btn-primary btn-block" style="color:white">Modifica</a></td>
									<td><a href="<?php echo base_url("index.php/admin/verifica_password");?>/<?php echo $admin_item['id']; ?>/elimina" class="btn btn-md btn-danger btn-block" style="color:white">Elimina</a></td>
								</tbody>
							<?php endforeach; ?>
						</table>
					</div>
					<!-- /.table-responsive -->
				<a href="<?php echo base_url("index.php/admin/gestisci");?>/1/aggiungi" class="btn btn-lg btn-primary" style="color:white"> + </a>
				</div>
			</div>
		</div>
	</div>
            
