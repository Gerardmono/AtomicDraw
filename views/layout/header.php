<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Atomic Draw</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css"/>
</head>
<body>
	<!--Header-->
	<header id="header">
		<!--Logo-->
		<div id="logo-img">
			<img src="<?=base_url?>Images/logo.png">
		</div>
		<div id="logo">
			
			<a href="<?=base_url?>">
				AtomicDraw
			</a>
		</div>

		<!--Menu-->
		<nav id="menu">
			<ul>
				<?php 
					$muestra=4; //1 = Admin, 2 = Usuario, 3 = Conductor, 4 = PEG
					if(isset($_SESSION['usuario'])): $muestra= $_SESSION['usuario']['rol']; endif;
				?>
				<?php if($muestra == 3 || $muestra == 2 || $muestra == 4 || $muestra == 1): ?>
					<li>
						<a href="<?=base_url?>OPrincipal/DelegarGUIInfo">Información</a>
					</li>
					<?php if($muestra == 2 || $muestra == 1):  // ?>
						<li>
							<a href="<?=base_url?>OPrincipal/DelegarGUIPromos">Promociones</a>
						</li>
					<?php endif;?>

					<?php if($muestra == 3 || $muestra == 1):  // ?>
						<li>
							<a href="<?=base_url?>OPrincipal/DelegarGUIAutobus">Autobuses</a>
						</li>

						<li>
							<a href="<?=base_url?>OPrincipal/DelegarGUIHorarios">Horarios</a>
						</li>
					<?php endif;?>
					<?php if($muestra == 1):  // ?>
						<li>
								<a href="<?=base_url?>OPrincipal/DelegarGUIConductores">Conductores</a>
						</li>
					<?php endif;?>
					<?php if($muestra == 1 || $muestra == 2 || $muestra == 4):  // ?>
						<li>
							<a href="<?=base_url?>OPrincipal/DelegarGUIViajesN">Viajes Normales</a>
						</li>
						<li>
							<a href="<?=base_url?>OPrincipal/DelegarGUIPaquetesV">Paquetes De Viaje</a>
						</li>
						<li>
							<a href="<?=base_url?>OPrincipal/DelegarGUIViajesR">Viajes De Renta</a>
						</li>
					<?php endif;?>
				<?php endif;?>
				
				<?php if (isset($_SESSION['usuario'])) : ?>
					<li>
						<a href="<?=base_url?>OAutenticacion/cerrarSesion">Cerrar sesion</a>
					</li>
				
				<?php else: ?>
					<li>
						<a href="<?=base_url?>OPrincipal/DelegarGUIAutenticacion">Iniciar Sesión/Registro</a>
					</li>
				<?php endif; ?>

			</ul>
		</nav>
		<div class="clearfix"></div>
	</header>
	