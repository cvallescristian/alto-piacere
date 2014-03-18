<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/user')?>"> Administrador</a></li>
			
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Crear un Administrador</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" action="<?= base_url('admin/user_crear_action')?>" method="post">
								
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Nombre</label>
										<div class="col-lg-9">
											<input type="text" name="nombre" class="form-control input-sm" data-required="true" placeholder="ej:  Cristian Valles " required>
											
										</div><!-- /.col -->
										
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Email</label>
										<div class="col-lg-9">
											<input type="email" name="email" class="form-control input-sm" data-required="true" placeholder="ej: info@altopiacere.cl " required>
											
										</div><!-- /.col -->
										
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Password</label>
										<div class="col-lg-9">
											<input type="password" name="password" class="form-control input-sm" data-required="true" placeholder="ej: mínimo 6 caracteres " required>
											
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</div>
								<div class="panel-footer" align="center">
									<button type="submit" class="btn btn-success btn-lg">Crear Adminstrador</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div>
		</div>
	</div>
</div>