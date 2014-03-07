<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
			 <li class="active">Dashboard</li>	 
		</ul>
	</div><!-- breadcrumb -->

	<div class="main-header clearfix" align="center">
		<div class="page-title">
			<h3 class="no-margin">Dashboard</h3>
			<span>Bienvenido de nuevo pablo@metpizza.cl</span>
		</div><!-- /page-title -->
	</div>

	<div class="grey-container shortcut-wrapper">
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-home"></i>
					</span>
					<span class="text">Inicio</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-envelope-o"></i>
						<span class="shortcut-alert">
							5
						</span>	
					</span>
					<span class="text">Categorias y Promociones</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-user"></i>
					</span>
					<span class="text">Listado de productos</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-globe"></i>
						<span class="shortcut-alert">
							7
						</span>	
					</span>
					<span class="text">Galería de Fotos</span>
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

<!-- Logout confirmation -->
	<div class="custom-popup width-100" id="NuevoSlider">
		<div class="padding-md">
			<h4 class="m-top-none">Estás segdkflskdAdministración?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="login.html">Salir de Admin</a>
			<a class="btn btn-danger logoutConfirm_close">Cancelar</a>
		</div>
	</div>
