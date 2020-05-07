<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo NOMBRESITIO;?></title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php //echo RUTA_URL?>
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilosArriendos_MVC.css"/>
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway:400|Montserrat'>
    </head>
    <body>   
        <div class="contenedor_10">
            <!-- <a class="a_2" href="perfil.php">Mis publicación</a>
            <a class="a_2" href="<?php echo RUTA_URL . '/CerrarSesion.php';?>">Cerrar sesión</a> -->
            <input class="input_2" type="text" value="<?php echo $nombre?>" readonly>
        </div>

		<label id="ComandoMenu" class="comandoMenu" onclick="mostrarMenu()"><span class="icon-menu"></span></label>
        
   <!-- No se cierrra la etiqueta <body> porque se cierra es el footer -->