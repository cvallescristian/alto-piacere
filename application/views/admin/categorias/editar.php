<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/categorias')?>"> Categoria</a></li>
			 <li>Editar</li>
			
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Editar una Categoria</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" action="<?= base_url('admin/categoria_editar_action')?>" method="post">
								<input type="hidden" name="categoria_id" value="<?= $categoria->categoria_id?>">
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Nombre</label>
										<div class="col-lg-9">
											<input type="text" name="nombre_categoria" value="<?= $categoria->nombre_categoria?>"class="form-control input-sm" data-required="true" placeholder="ej: Pizza napolitana " required>
											<div class="seperator"></div>
											
										</div><!-- /.col -->
									</div><!-- /form-group -->
								
									
								</div>
								<div class="panel-footer" align="center">
									<button type="submit" class="btn btn-success btn-lg">Editar Categoria</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div>
		</div>
	</div>
</div>