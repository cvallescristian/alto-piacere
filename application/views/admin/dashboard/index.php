<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admins/dashboard')?>"> Inicio</a></li>
		</ul>
	</div><!-- breadcrumb -->

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
			<div class="col-md-10 col-md-offset-1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Imagenes de Slider</h4>
							</div>
							
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>Imagen</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											hola
										</td>
										<td>
											<button class="btn btn-danger">Eliminar Foto</button>
										</td>
										
									</tr>
									
								</tbody>
							</table>

							<div class="panel-footer clearfix">
								<a class="btn btn-success pull-right" href="<?= base_url('admin/crear_slider')?>">
									Crear Nueva Imagen
								</a>
							</div>
						</div><!-- /panel -->
					</div>
		</div>
	</div>

</div><!-- /main-container -->

