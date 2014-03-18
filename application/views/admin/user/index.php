<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/categorias')?>"> Administradores</a></li>
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Administradores</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Lista de Administradores
						<div class="pull-right">
							<a href="<?= base_url('admin/user_crear')?>" class="btn btn-danger">Crear Administrador</a>
						</div>
					</div>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Email</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($lista_user as $user) { ?>
								<tr>
									<td><?= $user->nombre?></td>
									<td><?= $user->email ?></td>
									<?php if ($user->admin!=1) { ?>
										<td><a href="<?= base_url('admin/user_borrar?id='.$user->administrador_id)?>" class="btn btn-warning btn-sm">borrar</a></td>
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