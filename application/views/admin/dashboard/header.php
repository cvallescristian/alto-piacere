<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Alto Piacere Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('admin_archive')?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link href="<?= base_url('admin_archive')?>/css/font-awesome.min.css" rel="stylesheet">

	<!-- Pace -->
	<link href="<?= base_url('admin_archive')?>/css/pace.css" rel="stylesheet">	
	
	<!-- Endless -->
	<link href="<?= base_url('admin_archive')?>/css/endless.min.css" rel="stylesheet">
	<link href="<?= base_url('admin_archive')?>/css/endless-skin.css" rel="stylesheet">
	
  </head>

  <body class="overflow-hidden">
	<!-- Overlay Div -->
	<div id="overlay" class="transparent"></div>

	<div id="wrapper" class="preload">
		<div id="top-nav" class="skin-2 fixed">
			<div class="brand">
				<span>Alto Piacere </span>
				<span class="text-toggle"> Admin</span>
			</div><!-- /brand -->
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav-notification clearfix">
				
			
		
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<strong>Hola Pablo@metpizza.cl</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					
				</li>
				<li class="profile">
					<a class="dropdown-toggle logoutConfirm_open" data-toggle="dropdown" href="#logoutConfirm">
						<strong>Salir de la Admin</strong>
						<span><i class="fa fa-power-off"></i></span>
					</a>	
				</li>
			</ul>
		</div><!-- /top-nav-->
		
		<aside class="fixed skin-2">	
			<div class="sidebar-inner scrollable-sidebar">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					
				</div><!-- /size-toggle -->	
				
			
				<div class="main-menu">
					<ul>
						<?php if ($indice==1) {
							echo "<li class='active'>";
						}else{
							echo "<li>";
						} ?>
							<a href="<?= base_url('admin/dashboard')?>">
								<span class="menu-icon">
									<i class="fa fa-home fa-lg"></i> 
								</span>
								<span class="text">
									Inicio
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<?php if ($indice==2) {
							echo "<li class='active'>";
						}else{
							echo "<li>";
						} ?>
							<a href="<?= base_url('admin/categorias')?>">
								<span class="menu-icon">
									<i class="fa fa-file-text fa-lg"></i> 
								</span>
								<span class="text" align="justify">
									Categorias
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<?php if ($indice==3) {
							echo "<li class='active'>";
						}else{
							echo "<li>";
						} ?>
							<a href="<?= base_url('admin/productos')?>">
								<span class="menu-icon">
									<i class="fa fa-clock-o fa-lg"></i> 
								</span>
								<span class="text">
									Listado de Productos
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<?php if ($indice==4) {
							echo "<li class='active'>";
						}else{
							echo "<li>";
						} ?>
							<a href="<?= base_url('admin/promociones')?>">
								<span class="menu-icon">
									<i class="fa fa-clock-o fa-lg"></i> 
								</span>
								<span class="text">
									Promociones
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>

						<?php if ($indice==5) {
							echo "<li class='active'>";
						}else{
							echo "<li>";
						} ?>
							<a href="<?= base_url('admin/galeria')?>">
								<span class="menu-icon">
									<i class="fa fa-picture-o fa-lg"></i> 
								</span>
								<span class="text">
									Galería de Fotos
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						
					</ul>
					
					
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside>