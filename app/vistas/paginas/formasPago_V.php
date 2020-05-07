<!-- Este archivo abre como ventana emergente por medio de window.open desde la función formasPago() -->
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Registro</title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8"/>
		<meta name="description" content="registro de usuarios para el sitio web."/>
		<meta name="keywords" content="registro, usuarios"/>
		<meta name="author" content="Pablo Cabeza"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="expires" content="01 de enero de 2018">

		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilosArriendos_MVC.css"/>
        <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="../css/MediaQuery_EstilosArrendadora_800.css">
	    <link rel="stylesheet" type="text/css" media="(min-width: 1500px)" href="../css/MediaQuery_EstilosArrendadora_1500.css">
	    <link rel="stylesheet" type="text/css" media="(min-width: 800px) and (max-width: 1500px)" href="../css/MediaQuery_EstilosArrendadora_tablet.css">
	    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=RLato|Raleway:400|Montserrat|Indie+Flower|Caveat'>
        <link rel="stylesheet" type="text/css" href="../iconos/icono_menu/style_menu.css"/> <!--galeria icomoon.io  -->
	    <link rel="shortcut icon" type="image/png" href="../images/logo_aplicacion/logo_Mira_horebi.png">

        <script type="text/javascript" src="<?php echo RUTA_URL?>/javascript/funcionesVarias.js"></script> 
    </head>
    <body>
        <div class="contenedor_65">
            <img class="imagen_8" alt="Logotipo horebi.com" src="<?php echo RUTA_URL?>/images/logo_aplicacion/logo_Mira_horebi.png">
        </div>
        <div class="contenedor_62">
            <div class="contenedor_62a">
                <p class="p_8">Canales de pago</p>
                <span class="span_2">(Solo operaciones en Pamplona)</span>
                <div class="contenedor_63">
                    <p class="p_13 p_14">Cuenta Bancolombia</p>
                    <p class="p_13">47600028070</p>
                </div>
                <!-- <div class="contenedor_63">
                    <p class="p_13 p_14">Cuenta Davivienda</p>
                    <p class="p_13">32343223232</p>
                </div> -->
                <div class="contenedor_63 contenedor_64">
                    <p class="p_13 p_14">Directamente en oficina</p>
                    <p class="p_13">Calle 4 con carrera 4<br> local ImpresionArte.<br> Pamplona, Norte de Santander</p>
                </div>
            </div>
            <label class="boton_1 boton_2" onclick="cerrarVentana()">Cerrar</label>
        </div> 
    </body>