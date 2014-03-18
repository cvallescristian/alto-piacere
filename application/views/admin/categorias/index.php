<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/categorias')?>"> Categorias</a></li>
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Categorias</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Lista de Categorias
						<div class="pull-right">
							<a href="<?= base_url('admin/categoria_crear')?>" class="btn btn-danger">Crear Categoria</a>
						</div>
					</div>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($lista_categoria as $categoria) { ?>
								<tr>
									<td><?= $categoria->nombre_categoria?></td>
									<td><a href="<?= base_url('admin/categoria_editar?id='.$categoria->categoria_id)?>" class="btn btn-info btn-sm">Editar</a></td>
									<?php if ($categoria->categoria_id!=2){ ?>
										<td><a href="<?= base_url('admin/categoria_borrar?id='.$categoria->categoria_id)?>" class="btn btn-warning btn-sm">Borrar</a></td>
									<?php } ?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div><!-- /panel -->
			</div>
		</div>
	</div>
</div>