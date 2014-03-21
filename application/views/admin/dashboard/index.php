<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admins/dashboard')?>"> Inicio</a></li>
		</ul>
	</div><!-- breadcrumb -->
<?php if ($this->input->get("sus")==5) { ?>
	<div class="alert alert-success" align="center"><h4>Edición de Información de Alto piacere Exitosa!</h4></div>
<?php } ?>
	<div class="main-header clearfix" align="center">
		<div class="page-title">
			<h3 class="no-margin">Inicio</h3>
			<span>Bienvenido de nuevo <?= $this->session->userdata('nombre')?></span>
		</div><!-- /page-title -->
	</div>

	<div class="grey-container shortcut-wrapper">
				<a href="<?= base_url('admin/dashboard')?>" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-home"></i>
					</span>
					<span class="text">Inicio</span>
				</a>
				<a href="<?= base_url('admin/categorias')?>" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-check"></i>
					</span>
					<span class="text">Categorias</span>
				</a>
				<a href="<?= base_url('admin/productos')?>" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-glass"></i>
					</span>
					<span class="text">Productos</span>
				</a>
				<a href="<?= base_url('admin/promociones')?>" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-shopping-cart"></i>
					</span>
					<span class="text">Promociones</span>
				</a>
				<a href="<?= base_url('admin/galeria')?>" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-picture-o"></i>
					</span>
					<span class="text">Galeria</span>
				</a>
				
				
	</div>


	<div class="padding-md">
		<div class="row">
		<div class="col-md-12" align="center" style="padding-bottom:20px;">
			<h3>Centro de Edición</h3>
		</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<form class="form-horizontal form-border no-margin" id="basic-constraint" action="<?= base_url('admin/editar_informacion_action')?>"enctype="multipart/form-data" method="post" >
						<div class="panel-heading">
							<h4>Información de Alto Piacere</h4>
						</div>
						<div class="panel-body">
							
							<div class="form-group">
								<label class="control-label col-lg-3">Telefono</label>
								<div class="col-lg-9">
									<input type="text" name="telefono" id="telefono" class="form-control input-sm parsley-validated" value="<?= $informacion->telefono?>"required>
									
							
								</div><!-- /.col -->
							</div><!-- /form-group -->
							
						</div>
						<div class="panel-footer" align="right" >
							<button type="submit" class="btn btn-success btn-lg">Editar</button>
						</div>
					</form>
				</div><!-- /panel -->
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Horario de Atención</h4>
					</div>
					
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>De</th>
								<th>A</th>
								<th>Desde las</th>
								<th>Hasta</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($lista_horario as $horario) { ?>
								<tr>
									<td><?= $horario->desde_dia?></td>
									<td><?= $horario->hasta_dia?></td>
									<td><?= $horario->desde_hora?></td>
									<td><?= $horario->hasta_hora?></td>
									<td><a href="<?= base_url('admin/borrar_horario?id='.$horario->horario_id)?>" class="btn btn-danger btn-sm">Borrar</a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>

					<div class="panel-footer clearfix">
						<a class="btn btn-success pull-right" href="<?= base_url('admin/crear_horario')?>">
							Crear Nuevo Horario
						</a>
					</div>
				</div><!-- /panel -->
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Imagenes de Slider Grande</h4>
					</div>
					
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="<?= base_url('images/slide/grande/foto.png')?>" style="width:50px; height:50px;"alt="">
								</td>
								<td>
									<a href="<?= base_url('admin/editar_slider_grande')?>" class="btn btn-info">Editar</a>
								</td>
								
							</tr>
							
						</tbody>
					</table>

				
				</div><!-- /panel -->
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Imagenes de Slider Pequeños</h4>
					</div>
					
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="<?= base_url('images/slide/chico/foto1.png')?>"  style="width:50px; height:50px;" alt="">
								</td>
								<td>
									<a class="btn btn-info" href="<?= base_url('admin/editar_slider_chico?id=1')?>">Editar Foto</a>
								</td>
							</tr>
							<tr>
								<td>
									<img src="<?= base_url('images/slide/chico/foto2.png')?>"  style="width:50px; height:50px;"alt="">
								</td>
								<td>
									<a class="btn btn-info" href="<?= base_url('admin/editar_slider_chico?id=2')?>">Editar Foto</a>
								</td>
							</tr>
							<tr>
								<td>
									<img src="<?= base_url('images/slide/chico/foto3.png')?>"  style="width:50px; height:50px;"alt="">
								</td>
								<td>
									<a class="btn btn-info" href="<?= base_url('admin/editar_slider_chico?id=3')?>">Editar Foto</a>
								</td>
							</tr>
							<tr>
								<td>
									<img src="<?= base_url('images/slide/chico/foto4.png')?>"  style="width:50px; height:50px;"alt="">
								</td>
								<td>
									<a class="btn btn-info" href="<?= base_url('admin/editar_slider_chico?id=4')?>">Editar Foto</a>
								</td>
							</tr>
							
						</tbody>
					</table>

					
				</div><!-- /panel -->
			</div>

		</div>
	</div>

</div><!-- /main-container -->

