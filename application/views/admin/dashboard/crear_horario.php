<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="<?= base_url('admins/dashboard')?>"> Inicio</a></li>
			 <li>Dashboard</li>
			 <li class="active">Crear Horario</li>
		</ul>
	</div><!-- breadcrumb -->
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<form class="form-horizontal form-border no-margin" id="basic-constraint" action="<?= base_url('admin/crear_horario_action')?>"enctype="multipart/form-data" method="post" >
				<div class="panel-heading">
					Crear un Horario
				</div>
				<div class="panel-body">
					
					<div class="form-group">
						<label class="control-label col-lg-3">Del día</label>
						<div class="col-lg-9">
						<select name="desde_dia" id="" class="form-control input-sm " required>
						<option value="Lunes">Lunes</option>
						<option value="Martes">Martes</option>
						<option value="Miercoles">Miercoles</option>
						<option value="Jueves">Jueves</option>
						<option value="Viernes">Viernes</option>
						<option value="Sabado">Sabado</option>
						<option value="Domingo">Domingo</option>
						</select>
					
						</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
						<label class="control-label col-lg-3">Hasta el día</label>
						<div class="col-lg-9">
						<select name="hasta_dia" id="" class="form-control input-sm " required>
						<option value="Lunes">Lunes</option>
						<option value="Martes">Martes</option>
						<option value="Miercoles">Miercoles</option>
						<option value="Jueves">Jueves</option>
						<option value="Viernes">Viernes</option>
						<option value="Sabado">Sabado</option>
						<option value="Domingo">Domingo</option>
						</select>
					
						</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
						<label class="control-label col-lg-3">Desde Hora</label>
						<div class="col-lg-9">
						<select name="desde_hora" id="" class="form-control input-sm " required>
						<?php for ($i=0; $i < 24; $i++) {  ?>
							<option value="<?= $i;?>:00"><?= $i;?>:00</option>		
							<option value="<?= $i;?>:30"><?= $i;?>:30</option>		
						<?php } ?>
						</select>
					
						</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
						<label class="control-label col-lg-3">Hasta Hora</label>
						<div class="col-lg-9">
						<select name="hasta_hora" id="" class="form-control input-sm " required>
						<?php for ($i=0; $i < 24; $i++) {  ?>
							<option value="<?= $i;?>:00"><?= $i;?>:00</option>		
							<option value="<?= $i;?>:30"><?= $i;?>:30</option>		
						<?php } ?>
						</select>
					
						</div><!-- /.col -->
					</div><!-- /form-group -->
					
				</div>
				<div class="panel-footer" align="center" >
					<button type="submit" class="btn btn-success btn-lg">Crear un Horario</button>
				</div>
			</form>
		</div><!-- /panel -->
	</div>

</div>