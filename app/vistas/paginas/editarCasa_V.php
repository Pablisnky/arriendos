<?php
    $ID_Afiliado= $_SESSION["ID_Afiliado"];
    // echo $ID_Afiliado . "<br>";

    //Se verifica si se realizó login para entrar en este  archivo
    //include("../../../modulos/verificar_Afiliado.php");

    //Administra los errores del sistema e impide mostrarlos en remoto
    // include("../../../modulos/muestraError.php");

    // Se reciben datos desde Enrada_C/editarRegistro
    foreach($Datos["datosInmueble"] as $DatosInmueble) : 
        $Descripcion_1= $DatosInmueble->tipo_negociacion;
        $Descripcion_2= $DatosInmueble->tipo_inmueble;
    endforeach;   
    
    // // Se cambia la expresion(solo para presentar en pantalla)
    switch($Descripcion_1){
        case "Arrenda":
            $Descripcion_1 = "arriendo";
        break;
    }
    switch($Descripcion_2){
        case "Casas":
            $Descripcion_2 = "Casa";
        break;
    }
?><!DOCTYPE html>
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
    //  Se verifica que la sesion del usuario halla sido creada y exista
    // if(isset($_SESSION["ID_Afiliado"])){ 
        // require(RUTA_APP . "/vistas/inc/header.php");
        
        //Se traen los datos obtenidos en la consulta; Recibe $Datos desde Entrada_C/editarRegistro
        foreach($Datos["Nombre"] as $NombreAfiliado){} 
        ?>

        <div class="contenedor_10">
            <a class="a_2" href="<?php echo RUTA_URL . '/Entrada_C';?>">Mis publicaciones</a>
            <a class="a_2" href="<?php echo RUTA_URL . '/Publicacion_C';?>">Nueva publicación</a>
            <a class="a_2" href="<?php echo RUTA_URL . '/CerrarS_C';?>">Cerrar sesión</a>
            <input class="input_2" type="text" value="<?php echo $NombreAfiliado->nombre?>" readonly>
        </div>
        <div> 
            <div class="contenedor_36">
                <label class="label_21">Editar <?php echo $Descripcion_2;?> en <?php echo $Descripcion_1;?></label> 
            </div> 
            <form action="<?php echo RUTA_URL;?>/RecibeEditar_C" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="contenedor_23"> 
                    <?php
                    //Se traen los datos obtenidos en la consulta; Recibe $Datos desde Entrada_C/editarRegistro
                    foreach($Datos["datosInmueble"] as $DatosInmueble) :    ?>
                        <div id="marcador_01"> 
                            <fieldset class="fieldset_4">
                                <legend class="legend_1">Ubicación geografica</legend>
                                <!--<div class="contenedor_25">
                                    <?php
                                        // include("Departamentos.php");
                                    ?>
                                    <br>
                                    <select class="select_1" name="municipio_Col" id="Municipio_Col"">
                                        <option><?php //echo $registros["municipio"];?></option>    
                                    </select>        
                                </div> -->
                                <!-- <div class="contenedor_26">
                                    <!-- <label class="label_12">Departamento</label>
                                    <input type="text" value="<?php // echo $registros["departamento"];?>"><br> -->
                                    <!-- <label class="label_12">Municipio</label>
                                    <input type="text" value="<?php //echo $registros["municipio"];?>"><br> 
                                </div> -->
                                <label class="label_12">Departamento</label>
                                <select class="select_3" name="departamento">
                                    <option>Norte de Santander</option>
                                </select>
                                <label class="label_12">Municipio</label>
                                <br>
                                    <select class="select_3"  name="municipio_Col">
                                        <option>Pamplona</option>
                                    </select>
                                <label class="label_12">Barrio</label>
                                <input type="text" name="barrio" value="<?php echo $DatosInmueble->barrio;?>">
                                <label class="label_12">Dirección</label>
                                <textarea class="textarea_1" name="direccion"><?php echo $DatosInmueble->direccion;?></textarea><br>
                                <label class="label_12">Estrato</label><br>
                                <input type="radio" value="1" name="estrato" id="Estrato_1"   
                                <?php if(($DatosInmueble->estrato) == 1){ echo 'checked';}?>>
                                <label for="Estrato_1">1</label>                        
                                <input  type="radio" value="2" name="estrato" id="Estrato_2"   
                                <?php if(($DatosInmueble->estrato) == 2) { echo ' checked'; }?> >
                                <label for="Estrato_2">2</label>
                                <input type="radio" value="3" name="estrato" id="Estrato_3"    
                                <?php if(($DatosInmueble->estrato) == 3) { echo ' checked'; }?>>
                                <label for="Estrato_3">3</label>
                                <input type="radio" value="4" name="estrato" id="Estrato_4"    
                                <?php if(($DatosInmueble->estrato) == 4) { echo ' checked'; }?>>
                                <label for="Estrato_4">4</label>
                                <input type="radio" value="5" name="estrato" id="Estrato_5"    
                                <?php if(($DatosInmueble->estrato) == 5) { echo ' checked'; }?>>
                                <label for="Estrato_5">5</label>
                                <input type="radio" value="6" name="estrato" id="Estrato_6"    
                                <?php if(($DatosInmueble->estrato) == 6) { echo ' checked'; }?>>
                                <label for="Estrato_6">6</label>
                            </fieldset>
                        </div>
                        <div id="marcador_02">
                            <fieldset class="fieldset_4">
                                <legend class="legend_1">Descripcion del inmueble</legend>
                                <label class="label_12">Nº habitaciones</label>
                                <br> 
                                <input type="radio" value="1" name="habitaciones" id="Habitaciones_1"    
                                <?php if(($DatosInmueble->habitaciones) == 1){ echo 'checked';}?>>
                                <label for="Habitaciones_1">1</label>                        
                                <input  type="radio" value="2" name="habitaciones" id="Habitaciones_2"    
                                <?php if(($DatosInmueble->habitaciones) == 2) { echo ' checked'; }?> >
                                <label for="Habitaciones_2">2</label>
                                <input type="radio" value="3" name="habitaciones" id="Habitaciones_3"    
                                <?php if(($DatosInmueble->habitaciones) == 3) { echo ' checked'; }?>>
                                <label for="Habitaciones_3">3</label>
                                <input type="radio" value="4" name="habitaciones" id="Habitaciones_4"    
                                <?php if(($DatosInmueble->habitaciones) == 4) { echo ' checked'; }?>>
                                <label for="Habitaciones_4">4</label>
                                <input type="radio" value="5" name="habitaciones" id="Habitaciones_5"    
                                <?php if(($DatosInmueble->habitaciones) == 5) { echo ' checked'; }?>>
                                <label for="Habitaciones_5">5</label>
                                <input type="radio" value="6" name="habitaciones" id="Habitaciones_6"    
                                <?php if(($DatosInmueble->habitaciones) == 6) { echo ' checked'; }?>>
                                <label for="Habitaciones_6">6</label>
                                <br>
                                <!-- ***************************************** --> 
                                <label class="label_12">Nº baños</label>
                                <br> 
                                <input type="radio" value="1" name="bano" id="Bano_1"    
                                <?php if(($DatosInmueble->bano) == 1){ echo 'checked';}?>>
                                <label for="Bano_1">1</label>                        
                                <input  type="radio" value="2" name="bano" id="Bano_2"    
                                <?php if(($DatosInmueble->bano) == 2) { echo ' checked'; }?> >
                                <label for="Bano_2">2</label>
                                <input type="radio" value="3" name="bano" id="Bano_3"    
                                <?php if(($DatosInmueble->bano) == 3) { echo ' checked'; }?>>
                                <label for="Bano_3">3</label>
                                <input type="radio" value="4" name="bano" id="Bano_4"    
                                <?php if(($DatosInmueble->bano) == 4) { echo ' checked'; }?>>
                                <label for="Bano_4">4</label>
                                <br>
                                <!-- ***************************************** -->                         
                                <label class="label_12">Garaje</label>
                                <br> 
                                <input type="radio" value="Si" name="garaje" id="Garaje_si"    
                                <?php if(($DatosInmueble->garaje) == "Si"){ echo 'checked';}?>>
                                <label for="Garaje_si">Si</label>                        
                                <input  type="radio" value="No" name="garaje" id="Garaje_no"    
                                <?php if(($DatosInmueble->garaje) == "No") { echo ' checked'; }?> >
                                <label for="Garaje_no">No</label>
                                <br>
                                <!-- *********************************************** -->
                                <label class="label_12">Jardin</label>
                                <br> 
                                <input type="radio" value="Si" name="jardin" id="Jardin_si"    
                                <?php if(($DatosInmueble->jardin) == "Si"){ echo 'checked';}?>>
                                <label for="Jardin_si">Si</label>                        
                                <input  type="radio" value="No" name="jardin" id="Jardin_no"    
                                <?php if(($DatosInmueble->jardin) == "No") { echo ' checked'; }?> >
                                <label for="Jardin_no">No</label>
                                <br>
                                <!-- *********************************************** -->
                                <label class="label_12">Patio</label>
                                <br> 
                                <input type="radio" value="Si" name="patio" id="Patio_si"   
                                <?php if(($DatosInmueble->patio) == "Si"){ echo 'checked';}?>>
                                <label for="Patio_si">Si</label>                        
                                <input  type="radio" value="No" name="patio" id="Patio_no"    
                                <?php if(($DatosInmueble->patio) == "No") { echo ' checked'; }?> >
                                <label for="Patio_no">No</label>
                                <br>
                                <!-- *********************************************** -->
                                <label class="label_12">M<sup class="sup_1">2</sup></label>
                                <input class="input_3" type="text" name="metros" value="<?php echo $DatosInmueble->area;?>"> 
                            </fieldset>
                        </div>
                        <div id="marcador_03">
                            <fieldset class="fieldset_4">
                                <legend class="legend_1">Servicios ofrecidos</legend>
                                <label class="label_12">Gas tuberias</label>
                                <br> 
                                <input type="radio" value="Si" name="gas" id="Gas_si"    
                                <?php if(($DatosInmueble->gas) == "Si"){ echo 'checked';}?>>
                                <label for="Gas_si">Si</label>                        
                                <input  type="radio" value="No" name="gas" id="Gas_no"    
                                <?php if(($DatosInmueble->gas) == "No") { echo ' checked'; }?> >
                                <label for="Gas_no">No</label>
                                <br>
                                <!-- *********************************************** -->
                                <label class="label_12">Internet</label>
                                <br> 
                                <input type="radio" value="Si" name="internet" id="Internet_si"    
                                <?php if(($DatosInmueble->internet) == "Si"){ echo 'checked';}?>>
                                <label for="Internet_si">Si</label>                        
                                <input  type="radio" value="No" name="internet" id="Internet_no"    
                                <?php if(($DatosInmueble->internet) == "No") { echo ' checked'; }?> >
                                <label for="Internet_no">No</label>
                                <br>
                                <!-- *********************************************** -->
                                <label class="label_12">Cable TV</label>
                                <br> 
                                <input type="radio" value="Si" name="cable_TV" id="CableTV_si"    
                                <?php if(($DatosInmueble->cableTV) == "Si"){ echo 'checked';}?>>
                                <label for="CableTV_si">Si</label>                        
                                <input  type="radio" value="No" name="cable_TV" id="CableTV_no"    
                                <?php if(($DatosInmueble->cableTV) == "No") { echo ' checked'; }?> >
                                <label for="CableTV_no">No</label>
                                <br>
                                <!-- *********************************************** -->
                            </fieldset>
                        </div>
                        <div id="marcador_04">
                            <fieldset class="fieldset_4">
                                <legend class="legend_1">Precio</legend>
                                <label class="label_12">Costo mensual</label>
                                <input type="text" name="precio" value="<?php echo $DatosInmueble->precio;?>">
                            </fieldset>
                        </div>
                        <div id="marcador_05">                    
                            <fieldset class="fieldset_4">
                                <legend class="legend_1">Imagenes</legend>
                                <label class="label_22">Actualice con imagenes no mayor de 700 Kb</label>
                                <!-- Se muestran las imagenes que estan en BD -->                    
                                <div class="contenedor_24">
                                    <?php                                     
                                    //Se traen los datos de la consulta de fotografias del inmueble
                                        foreach($Datos["fotografias"] as $FotografiasInm){  ?>
                                            <img class="imagen_4" src="<?php echo RUTA_URL?>/images/<?php echo $FotografiasInm->nombre_img;?>" alt="Foto">    
                                            <?php
                                        }           
                                    ?>  
                                </div>
                                <!-- Da una vista previa de las nuevas imagenes que se van a colocar -->
                                <div class="contenedor_24"> 
                                    <?php    ?>
                                    <input  type="file" name="imagen_inmueble[]" id="ImgInp" onchange="muestraImg()" multiple hidden/>                     
                                    <div id="muestrasImg"></div> 
                                </div>
                                <label class="label_1" for="ImgInp">Buscar imagen</label>
                            </fieldset> 
                        </div>              
                        <div class="contenedor_47">
                            <p style="background-color: #BEBFDD; text-align: center; margin-left: 0%; margin-bottom: 2%; font-size: 18px;">Secciones</p>
                            <a class="a_6" href="#marcador_01">Ubicación geografica</a><br>
                            <a class="a_6" href="#marcador_02">Descripcion del inmueble</a><br>
                            <a class="a_6" href="#marcador_03">Servicios ofrecidos</a><br>
                            <a class="a_6" href="#marcador_04">Precio</a><br>
                            <a class="a_6" href="#marcador_05">Imagenes</a><br>
                        </div>    
                        <input type="text" name="ID_Inmueble" value="<?php echo $ID_Inmueble;?>" hidden>
                        <input class="input_7" type="submit" value="Guardar" onclick="this.disabled=true; this.value='Enviando...'"> 
                        <?php 
                    endforeach  ?>
                </div>
            </form>
       </div>
       <footer>
	        <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
       </footer>
    </body>
</html>

<!-- Función que da una vista previa de la fotografia antes de guardarla en la B -->
<script>
    function muestraImg(){
        var contenedor = document.getElementById("muestrasImg");
        var archivos = document.getElementById("ImgInp").files;
        for(i = 0; i < archivos.length; i++){
            imgTag = document.createElement("img");
            imgTag.height = 200;//ESTAS LINEAS NO SON "NECESARIAS"
            imgTag.width = 400; //ÚNICAMENTE HACEN QUE LAS IMÁGENES SE VEAN
            imgTag.id = i;      // ORDENADAS CON UN TAMAÑO ESTÁNDAR
            imgTag.src = URL.createObjectURL(archivos[i]);
            contenedor.appendChild(imgTag);
        }
    }
</script>