<?php
    //Se traen los datos obtenidos en la consulta realizada en registroHabitaciones_M.php
    foreach($Datos["Inmueble"] as $Registros);
    foreach($Datos["Contacto"] as $Registros_2);
    foreach($Datos["Fotografia_1"] as $Fotografia_1);
    foreach($Datos["Fotografia_2"] as $Fotografia_2);
    foreach($Datos["Fotografia_3"] as $Fotografia_3);
    foreach($Datos["Fotografia_4"] as $Fotografia_4);
    foreach($Datos["Fotografia_5"] as $Fotografia_5);
    

    // Se cambia la expresion (solo para presentar en pantalla)
    switch($Registros->tipo_negociacion){
         case "Arrenda":
            $Descripcion_1 = "arriendo";
        break;
        case "Venta":
           $Descripcion_1 = "Venta";
       break;
    }
    switch($Registros->tipo_inmueble){
        case "Habitaciones":
            $Descripcion_2 = "Habitación";
        break;
    }
    switch($Registros->sexo){
        case "F":
            $Descripcion_3 = "Solo damas";
        break;
        case "M":
            $Descripcion_3 = "Solo caballeros";
        break;
        case "Indiferente":
            $Descripcion_3 = "Indiferente";
        break;
    }
    switch($Registros->mascota){
        case "Si":
            $Descripcion_4 = "Aceptadas";
        break;
        case "No":
            $Descripcion_4 = "No aceptadas";
        break;
    } 
?>
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
    <div class="contenedor_43"> 
        <label class="label_23"><?php echo $Registros->tipo_inmueble;?> en <?php echo $Descripcion_1;?></label>
        <label class="label_27">Código: <?php echo $Registros->ID_Inmueble;?></label>
    </div>