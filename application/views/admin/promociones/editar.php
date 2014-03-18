<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/promociones')?>"> Promociones</a></li>
			 <li>Editar</li>
			
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Editar una promoción</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" action="<?= base_url('admin/promocion_editar_action')?>" method="post" enctype="multipart/form-data">
								<input type="hidden" value="<?= $promocion->promocion_id?>" name="promocion_id">
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Nombre</label>
										<div class="col-lg-9">
											<input type="text" name="nombre_producto" value="<?= $promocion->titulo?>"class="form-control input-sm" data-required="true" placeholder="ej: Pizza napolitana "   required>
											<div class="seperator"></div>
											
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Categoría</label>
										<div class="col-lg-9">
											<select name="categoria_id" id=""class="form-control input-sm "  name="categoria_id" requierd>
												<?php foreach ($lista_categoria as $categoria) { ?>
													<?php if ($promocion->categoria_id==$categoria->categoria_id) { ?>
														<option value="<?= $categoria->categoria_id ?>" selected><?= $categoria->nombre_categoria ?></option>
													<?php }else{?>
														<option value="<?= $categoria->categoria_id ?>"><?= $categoria->nombre_categoria ?></option>
												<?php } }?>
											</select>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Descripción</label>
										<div class="col-lg-9">
											<textarea name="descripcion" class="form-control input-sm " id="" cols="30" rows="4" placeholder="Aquí va la descripción de la promoción" required><?= $promocion->descripcion ?></textarea>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Precio</label>
										<div class="col-lg-9">
											<input type="number" name="precio" value="<?= $promocion->precio?>"placeholder="$000"class="form-control input-sm " required>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Foto</label>
										<div class="col-lg-9">
											<input type="file" name="foto" class="form-control input-sm " required>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									
								</div>
								<div class="panel-footer" align="center">
									<button type="submit" class="btn btn-success btn-lg">Editar Promocion</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div>
		</div>
	</div>
</div>