<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/galerias')?>"> Galeria</a></li>
			 <li>Editar</li>
			
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Editar una Foto para Galería</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" action="<?= base_url('admin/galeria_editar_action')?>" method="post" enctype="multipart/form-data">
								<input type="hidden" name="galeria_id" value="<?= $galeria_id?>">
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Foto</label>
										<div class="col-lg-9">
											<input type="file" name="photo" class="form-control input-sm" required>
											<div class="seperator"></div>
											
										</div><!-- /.col -->
									</div><!-- /form-group -->
								
									
								</div>
								<div class="panel-footer" align="center">
									<button type="submit" class="btn btn-success btn-lg">Editar Foto</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div>
		</div>
	</div>
</div>