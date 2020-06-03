<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo NOMBRESITIO;?></title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php //echo RUTA_URL?>
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilosArriendos_MVC.css"/>
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway:400|Montserrat'>
        
        <script type="text/javascript" src="<?php echo RUTA_URL . '/public/javascript/funcionesVarias.js';?>"></script> 
    </head>       
    <body>
<?php
    //Se verifica que la sesion del usuario halla sido creada y exista
    if(isset($_SESSION["ID_Afiliado"])){ 
        // require(RUTA_APP . "/vistas/inc/header.php");
        
        //Se traen los datos obtenidos en la consulta Entrada_C
        foreach($Datos["Nombre"] as $Nombres){
            $NombreAfiliado = $Nombres -> nombre;
            // echo "Nombre: " . $NombreAfiliado  . "<br>"; 
        } 
        ?>

        <div class="contenedor_10">
            <a class="a_2" href="">Mis publicaciones</a>
            <a class="a_2" href="<?php echo RUTA_URL . '/Publicacion_C';?>">Nueva publicación</a>
            <a class="a_2" href="<?php echo RUTA_URL . '/CerrarS_C';?>">Cerrar sesión</a>
            <input class="input_2" type="text" value="<?php echo $NombreAfiliado?>" readonly>
        </div>
        <div class="contenedor_37"> 
            <table class="table_2 table_3">
                <thead class="thead_2">
                    <th class="th_1">CÓDIGO</th>
                    <th class="th_6">INMUEBLE</th>
                    <th class="th_2">NEGOCIACIÓN</th>
                    <th class="th_3">DEPARTAMENTO</th>
                    <th class="th_2">MUNICIPIO</th>
                    <th class="th_4">BARRIO</th>
                    <th class="th_4">DIRECCION</th>
                    <th class="th_5">PRECIO</th>
                </thead>   
                <tbody>     
                    <?php
                    foreach($Datos["Inf_Inmueble"] as $InmueblesPub) :
                        $ID_Inmueble = $InmueblesPub->ID_Inmueble;
                            ?>
                            <tr class="tr_5">
                                <td><?php echo $InmueblesPub->ID_Inmueble;?></td>
                                <td class=""><?php echo $InmueblesPub->tipo_inmueble;?></td>
                                <td class="td_4"><?php echo $InmueblesPub->tipo_negociacion;?></td>
                                <td class=""><?php echo $InmueblesPub->departamento;?></td>
                                <td class=""><?php echo $InmueblesPub->municipio;?></td>
                                <td class=""><?php echo $InmueblesPub->barrio;?></td>
                                <td class=""><?php echo $InmueblesPub->direccion;?></td>
                                <td class="td_3"><?php echo $InmueblesPub->precio;?></td>
                            </tr> 
                            <tr> 
                                <td class="td_3" colspan="8">
                                    <?php 
                                    //Se traen los datos de la consulta de fotografias del inmueble
                                    //Se CONSULTA haciendo una petición al modelo por las fotos de un inmueble en particular (esta consulta debería realizarse en el controlador pero no encuentro forma de hacerla alla y traerme el resultado para la vista)
                                    $FotoInmueble= $this->ConsultaEntrada_M->consultarFotoInmuebles($ID_Inmueble);  
                                    foreach($FotoInmueble as $FotoInm){  
                                        $NombreFoto = $FotoInm->nombre_img; ?>
                                        <img class="imagen_4"  src="<?php echo RUTA_URL?>/images/<?php echo $FotoInm->nombre_img;?>" alt="Foto">  
                                            <?php
                                        }           
                                    ?>                                     
                                </td> 
                            </tr>
                            <tr class="tr_2">
                                <td colspan="3">
                                    <label class="label_26 generic_1" onclick="abrirDetalles_2(<?php echo $ID_Inmueble;?>)">Ver</label>

                                    <input type="text" value="<?php echo $ID_Inmueble;?>" hidden>
                                    <a class="generic_1" href="<?php echo RUTA_URL?>/Entrada_C/editarRegistro/<?php echo $ID_Inmueble;?>">Editar</a>
                                    
                                    <a class="generic_1" href="<?php echo RUTA_URL?>/Entrada_C/eliminarRegistro/<?php echo $ID_Inmueble;?>" onclick="return Confirmacion()">Eiminar</a>
                                </td>
                                <?php 
                                    // Se verifica si el usuario pago la publicación
                                    if($InmueblesPub->pago == 2){  ?>
                                        <td class="td_5" colspan="3">
                                            <p>En proceso de verificación de pago</p>
                                        </td>   <?php 
                                    }     
                                    else if($InmueblesPub->pago  == 1){  ?>
                                        <td class="td_6" colspan="4">
                                            <label>Publicación </label>
                                            <label>culmina el</label> <?php echo $InmueblesPub->fecha_caducacion?>
                                        </td>
                                        <?php
                                    }   
                                    else if($InmueblesPub->pago  == 0){  ?>
                                        <td class="td_6" colspan="4">
                                            <label>Publicación por promoción de apertura,</label>
                                            <label>culmina el</label>  <?php echo $InmueblesPub->fecha_caducacion?>
                                        </td>
                                        <?php
                                    }   ?>
                            </tr>
                            <tr class="tr_5">
                                <td colspan="9" ><hr></td></tr>
                            <?php     
                    endforeach;  
                        ?> 
                        </tbody>
                    </table>   
        </div>
                
            
        </body>
        <?php
    }
    else{
        //la sesion no existe y se redirige a la pagina de inicio
        header("location:" . RUTA_URL);
    }