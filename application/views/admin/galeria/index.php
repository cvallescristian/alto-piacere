<div id="main-container" class="bg-dark">
	<div class="padding-sm">
		<div class="row">
			<div class="col-md-12">
						<div class="col-md-12" align="center">
							<h2 class="headline dark text-white">
							Galería de Fotos del sitio
							<span class="line"></span>
							</h2>
						</div>
						<div class="col-md-3 col-md-offset-9">
								<a href="<?= base_url('admin/galeria_crear')?>"  class="btn btn-danger btn-lg">Crear nueva Foto</a>
						</div>
						<div class="jcarousel-wrapper">
							<div class="jcarousel movie-jcarousel" id="popularMovie" data-jcarousel="true">
								<ul style="left: 0px; top: 0px;">
								<?php foreach ($lista_galeria as $galeria) { ?>
									<li style="width: 216px;padding:10px;">
											<img src="<?= base_url('images/galeria/'.$galeria->galeria_id.'.png') ?>" style="width:200px;"alt="Image 1">
											<div class="quick-detail text-white">
												<a href="<?= base_url('admin/galeria_editar?id='.$galeria->galeria_id)?>" style="color:white">Editar</a>
												<a href="<?= base_url('admin/galeria_borrar?id='.$galeria->galeria_id)?>" style="color:white">Borrar</a>
											</div>
										
									</li>
								<?php  } ?>
								</ul>
							</div>


						</div><!-- /jcarousel-wrapper -->
						
		
						
		
		</div>
	</div>
</div>