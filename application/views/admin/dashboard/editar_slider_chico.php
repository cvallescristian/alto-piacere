<div id="main-container">
	<div id="breadcrumb">
		<ul class="breadcrumb">
			 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
			 <li >Dashboard</li>	 
			 <li class="active">Editar Slider</li>
		</ul>
	</div><!-- breadcrumb -->

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<form class="form-horizontal form-border no-margin" id="basic-constraint" action="<?= base_url('admin/editar_slider_chico_action')?>"enctype="multipart/form-data" method="post" >
				<div class="panel-heading">
					Editar un Slider
				</div>
				<div class="panel-body">
					<input type="hidden" name="id" value="<?= $this->input->get('id')?>">
					<div class="form-group">
						<label class="control-label col-lg-3">Inserte la Foto</label>
						<div class="col-lg-9">
							<input type="file" name="userfile" id="userfile" class="form-control input-sm parsley-validated" required>
							 <p class="help-block">La foto debe ser de 980px por 793px y debe contener toda la información de la promoción dentro.</p>
					
						</div><!-- /.col -->
					</div><!-- /form-group -->
					
				</div>
				<div class="panel-footer" align="center" >
					<button type="submit" class="btn btn-success btn-lg">Editar un Slider</button>
				</div>
			</form>
		</div><!-- /panel -->
	</div>
</div>