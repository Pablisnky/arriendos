<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Arriendo Pamplona</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content=".">
		<meta name="keywords" content="">
		<meta name="author" content="Pablo Cabeza">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="expires" content="27 de diciembre de 2019">

		<meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
 
        <?php // echo RUTA_URL?>
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilosArriendos_MVC.css"/>
        <link rel="stylesheet" type="text/css" href="../css/MediaQuery_EstilosArrendadora_800.css">
        <link rel="stylesheet" type="text/css" href="../css/MediaQuery_EstilosArrendadora_1500.css">
		<link rel="stylesheet" type="text/css" href="../css/MediaQuery_EstilosArrendadora_tablet.css">
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway:400|Montserrat|Cinzel'>
    	<link rel="stylesheet" type="text/css" href="../iconos/icono_menu/style_menu.css"/> <!--galeria icomoon.io  -->
		<link rel="shortcut icon" type="image/png" href="../images/logo_aplicacion/logo_Mira_horebi.png">
        
        <script type="text/javascript" src="<?php echo RUTA_URL . '/public/javascript/funcionesVarias.js';?>"></script> 
        <script type="text/javascript" src="../javascript/Funciones_Ajax.js"></script>
	</head>
    <body>		
		<header>
			<a class="a_3 a_3b enlace_2a" href="">Constructoras</a>	
			<a class="a_3 a_3c enlace_2a" href="">Arrendadoras</a>
			<a class="a_3 a_3f enlace_2a" href="">Proyectos inmobiliarios</a>
			<a class="a_3 a_3d" href="<?php echo RUTA_URL;?>">Home</a> 
			<a class="a_3 a_3e li_2"href="">Nuestro ADN</a>				
			<a class="a_3 a_3a" href="<?php echo RUTA_URL . '/registro_C';?>">Registrarse</a>
			<a class="a_3" href="<?php echo RUTA_URL . '/Login_C';?>">Inicia sesión</a>
				
			<div>
				<label id="ComandoMenu" class="comandoMenu" onclick="mostrarMenu()"><span class="icon-menu"></span></label>
				<nav class="menuResponsive" id="MenuResponsive">
					<ul>
						<li><a class="enlace_2" href="<?php echo RUTA_URL . '/Filtro_C/habitaciones';?>">Habitaciones</a></li>
						<li><a class="enlace_2" href="<?php echo RUTA_URL . '/Filtro_C/casas';?>">Casas</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Apartamentos</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Aparta-estudios</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Locales</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Oficinas</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Fincas</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Lotes</a></li>
						<li><a class="enlace_2 enlace_2a" href="">Parqueaderos</a></li>
						<hr class="hr_1">
						<li class="li_1"><a class="enlace_2 enlace_2a " href="">Constructoras</a></li>
						<li class="li_1"><a class="enlace_2 enlace_2a" href="">Arrendadoras</a></li>
						<hr class="hr_1 li_1">
						<li><a class="enlace_2" href="<?php echo RUTA_URL . '/Tarifas_C';?>">Publica con nosotros</a></li>
						<!-- <li><a class="enlace_2" href="Tarifas_C">Publica con nosotros</a></li> 
						<li class="li_1"><a class="enlace_2" href="contactenos.php">Contactenos</a></li>-->
					</ul>
				</nav>   
			</div> 
		</header>

   <!-- No se cierrra la etiqueta <body> porque se cierra en el footer -->