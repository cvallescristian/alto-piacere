<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/promociones')?>"> Promociones</a></li>
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Promociones</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Listado de Promociones
						<div class="pull-right">
							<a href="<?= base_url('admin/promocion_crear')?>" class="btn btn-danger">Crear Promociones</a>
						</div>
					</div>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Imágen</th>
								<th>titulo</th>
								<th>Descripción</th>
								<th>Categoría</th>
								<th>Precio</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($lista_promociones as $promocion) { ?>
								<tr>
									<td><img src="<?= base_url('images/promocion/'.$promocion->promocion_id.'.png')?>" style="width:50px; height:50px;"></td>
									<td><?= $promocion->titulo?></td>
									<td><?= $promocion->descripcion?></td>
									<td><?= $promocion->nombre_categoria?></td>
									<td><?= $promocion->precio?></td>
									<td><a href="<?= base_url('admin/promocion_editar?id='.$promocion->promocion_id)?>" class="btn btn-info btn-sm">Editar</a></td>
									<td><a href="<?= base_url('admin/promocion_borrar?id='.$promocion->promocion_id)?>" class="btn btn-warning btn-sm">Borrar</a></td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div><!-- /panel -->
			</div>
		</div>
	</div>
</div>