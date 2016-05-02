
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Gestione Giochi</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-red">
				<div class="panel-heading">
					Elenco giochi
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Console</th>
										<th>Producer</th>
										<th>Modifica</th>
										<th>Elimina</th>
									</tr>
								</thead>				
						   <?php foreach($gioco as $gioco_item): ?>
								<tbody>
									<td><?php echo $gioco_item['nome']; ?></td>
									<td><?php echo $gioco_item['console']; ?></td>
									<td><?php echo $gioco_item['producer']; ?></td>
									<td><a href="<?php echo base_url("index.php/admin_gioco/gestisci");?>/<?php echo $gioco_item['id']; ?>/modifica" class="btn btn-md btn-primary btn-block" style="color:white">Modifica</a></td>
									<td><a href="<?php echo base_url("index.php/admin_gioco/gestisci");?>/<?php echo $gioco_item['id']; ?>/elimina" class="btn btn-md btn-danger btn-block" style="color:white">Elimina</a></td>
								</tbody>
							<?php endforeach; ?>
						</table>
					</div>
					<!-- /.table-responsive -->
				<a href="<?php echo base_url("index.php/admin_gioco/gestisci");?>/1/aggiungi" class="btn btn-lg btn-primary" style="color:white"> + </a>
				</div>
			</div>
		</div>
	</div>
            

