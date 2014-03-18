<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="index.html"> Producto</a></li>
			
		</ul>
	</div>

	<div class="main-header clearfix">
		<div class="page-title">
			<h3 class="no-margin">Listado de productos</h3>
		</div><!-- /page-title -->
	</div>
<?php if ($this->input->get('sus')==1) { ?>
	<div class="alert alert-success" align="center"> 
		<h4>Producto creado con éxito!</h4>
	</div>
<?php }elseif ($this->input->get('sus')==2) { ?>
	<div class="alert alert-info" align="center"> 
		<h4>Producto editado con éxito!</h4>
	</div>
<?php }elseif ($this->input->get('sus')==3) { ?>
	<div class="alert alert-warning" align="center"> 
		<h4>Producto eliminado con éxito!</h4>
	</div>
<?php } ?>
	<div class="padding-md">
		<div class="row">
			<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						Listado de productos 
					</div>
					<div class="panel-body">
						<div class="row">
						<form action="<?= base_url('admin/productos')?>" method="get">
							<div class="col-md-4 col-sm-4">
								Buscar por :
								<select class="input-sm form-control inline" name="categoria" style="width:130px;">
									<option value="0">Todos</option>
								<?php foreach ($lista_categoria as $categoria) { ?>
									<option value="<?= $categoria->categoria_id?>"><?= $categoria->nombre_categoria?></option>
								<?php } ?>
								</select>
								<button type="submit" class="btn btn-default btn-sm">Aplicar</button>
							</div><!-- /.col -->
							<div class="pull-right">
								<a href="<?= base_url('admin/producto_crear')?>" class="btn btn-danger btn-lg">Crear un producto</a>
							</div>
						</form>
						</div><!-- /.row -->
					</div>
					<table class="table table-striped" id="responsiveTable">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Categoria</th>
								<th>Ingredientes</th>
								<th>Precio Mediana</th>
								<th>Precio Familiar</th>
								<th>Editar</th>
								<th>Borrar</th>
							</tr>
						</thead>
						<tbody>
							
								<?php foreach ($lista_producto as $producto) { ?>
								<?php if ($this->input->get('categoria')==0) { ?>
								<tr>
									<td><?= $producto->nombre_producto?></td>
									<td><?= $producto->nombre_categoria?></td>
									<td><?= $producto->ingredientes?></td>
									<td>$<?= $producto->precio_producto_mediana?></td>
									<td>$<?= $producto->precio_producto_familiar?></td>
									<td><a href="<?= base_url('admin/producto_editar?id='.$producto->producto_id)?>" class="btn btn-info btn-sm">Editar</a></td>
									<td><a href="<?= base_url('admin/producto_borrar?id='.$producto->producto_id)?>" class="btn btn-warning btn-sm">Borrar</a></td>
								</tr>
								<?php }elseif ($this->input->get('categoria')== $producto->categoria_id) { ?>
								<tr>
									<td><?= $producto->nombre_producto?></td>
									<td><?= $producto->nombre_categoria?></td>
									<td><?= $producto->ingredientes?></td>
									<td>$<?= $producto->precio_producto_mediana?></td>
									<td>$<?= $producto->precio_producto_familiar?></td>
									<td><a href="<?= base_url('admin/producto_editar?id='.$producto->producto_id)?>" class="btn btn-info btn-sm">Editar</a></td>
									<td><a href="<?= base_url('admin/producto_borrar?id='.$producto->producto_id)?>" class="btn btn-warning btn-sm">Borrar</a></td>
								</tr>
								<?php } ?>
								<?php } ?>
							
							
						</tbody>
					</table>
					<div class="panel-footer clearfix">
						<div class="pull-right">
							<a href="<?= base_url('admin/producto_crear')?>" class="btn btn-danger btn-sm">Crear un producto</a>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>