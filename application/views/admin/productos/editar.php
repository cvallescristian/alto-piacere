<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admin/productos')?>"> Producto</a></li>
			 <li>Editar</li>
			
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Editar un producto</h3>
		</div><!-- /page-title -->
	</div>
	<div class="padding-md">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" action="<?= base_url('admin/producto_editar_action')?>" method="post">
								
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Nombre</label>
										<div class="col-lg-9">
											<input type="text" name="nombre_producto" value="<?= $producto->nombre_producto?>" class="form-control input-sm" data-required="true" placeholder="ej: Pizza napolitana " required>
											<div class="seperator"></div>
											
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<input type="hidden" name="producto_id" value="<?= $producto->producto_id?>">
									<div class="form-group">
										<label class="control-label col-lg-3">Categoría</label>
										<div class="col-lg-9">
											<select name="categoria_id" id=""class="form-control input-sm "  name="categoria_id" requierd>
												<?php foreach ($lista_categoria as $categoria) { ?>
													<?php if ($categoria->categoria_id==$producto->categoria_id) { ?>
														<option value="<?= $categoria->categoria_id ?>" selected><?= $categoria->nombre_categoria ?></option>
														
													<?php }else{ ?>
													<option value="<?= $categoria->categoria_id ?>"><?= $categoria->nombre_categoria ?></option>
													<?php } ?>
												<?php } ?>
											</select>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Ingredientes</label>
										<div class="col-lg-9">
											<input type="text" name="ingredientes" value="<?= $producto->ingredientes?>"class="form-control input-sm " placeholder="ej: Tomate, queso albaca" required>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Precio</label>
										<div class="col-lg-9">
											<input type="number" value="<?= $producto->precio_producto ?>" name="precio" class="form-control input-sm " required>
										</div><!-- /.col -->
									</div><!-- /form-group -->
									
								</div>
								<div class="panel-footer" align="center">
									<button type="submit" class="btn btn-success btn-lg">Editar Producto</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div>
		</div>
	</div>
</div>