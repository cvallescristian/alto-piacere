<div class="login-wrapper">
	<div class="text-center">
		<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
			<span class="text-success">Alto Piacere</span> <span style="color:#ccc; text-shadow:0 1px #fff">Administración</span>
		</h2>
	</div>
	<?php if ($this->input->get('err')==1) { ?>
		<div class="alert alert-danger" align="center">
			<h4>Error en el Usuario y/o contraseña</h4>
		</div>
	<?php } ?>
	<div class="login-widget animation-delay1">	
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<div class="pull-left">
					<i class="fa fa-lock fa-lg"></i> Login
				</div>
		</div>
			<div class="panel-body">
				<form class="form-login" method="post" action="<?= base_url('admin/login')?>">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email"placeholder="example@example.cl" class="form-control input-sm bounceIn animation-delay2" required>
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="pass" placeholder="Password" class="form-control input-sm bounceIn animation-delay4" required>
					</div>
					
					<div class="seperator"></div>
					<div class="form-group">
						Olvidaste tu contraseña?<br/>
						Has click <a href="#">Aquí</a> para restablecer tu contraseña
					</div>

						
					<button class="btn btn-success btn-sm bounceIn animation-delay5 pull-right" type="submit"><i class="fa fa-sign-in"></i> Entrar</button>
				</form>
			</div>
		</div><!-- /panel -->
	</div><!-- /login-widget -->
</div><!-- /login-wrapper -->