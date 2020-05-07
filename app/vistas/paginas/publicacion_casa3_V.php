<?php
    session_start();

    //se invoca la sesion que tiene el ID_Afiliado creada en validarSesion.php
    $ID_Afiliado= $_SESSION["ID_Afiliado"];
//     echo $ID_Afiliado . "<br>";

    //Se llama la sesion  el Nombre creada en Login_C.php
    $nombre= $_SESSION["Nombre"];
        
	// Se carga el header 
    require(RUTA_APP . "/vistas/inc/headerLogin.php");
    
    //Se reciben los parametros enviados por el controlador Publicacion_C/inmueble
    print_r($Datos);
    echo "<br>";
    echo gettype($Datos) . "<br>";
    $Datos= implode( "," , $Datos );
    echo gettype($Datos) . "<br>";
    echo $Datos . "<br>";
    $Parametro = explode("," , $Datos);
    // echo $Parametro[0] . "<br>";
    // echo $Parametro[1] . "<br>";
?>
<!-- Se coloca en SDN para la libreria JQuery, necesaria para la previsualización de la imagen--> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?> . /public/javascript/Funciones_varias.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?> . /public/javascript/Municipios_Colombia.js"></script> 
    
    <div class="contenedor_22">    
    <form action="<?php echo RUTA_URL; ?>/Publicacion_C/recibeRegistro" method="POST" enctype="multipart/form-data" autocomplete="off">
        <fieldset class="fieldset_4">
            <legend class="legend_1">Ubicación geografica</legend>
            <label class="etiqueta_1">Departamento</label>
            <br>
                <?php
                    include(RUTA_APP . "/helpers/Departamentos.php");
                ?>
            <br>
            <label class="etiqueta_1">Municipio</label>
            <br>
            <select class="select_1" name="municipio_Col" id="Municipio_Col"">
                <option></option>    
            </select>       
            <br> 
            <label class="etiqueta_1">Barrio</label>
            <input class="input_1" type="text" name="barrio">
            <label class="etiqueta_1">Dirección</label>
            <textarea class="textarea_1" name="direccion"></textarea>
            <br>
            <label class="etiqueta_1">Estrato</label>
            <br> 
            <input type="radio" name="estrato" id="Estrato_1" value="1">
            <label for="Estrato_1">1</label>
            <input type="radio" name="estrato" id="Estrato_2" value="2">
            <label for="Estrato_2">2</label>
            <input type="radio" name="estrato" id="Estrato_3" value="3">
            <label for="Estrato_3">3</label>
            <input type="radio" name="estrato" id="Estrato_4" value="4">
            <label for="Estrato_4">4</label>
            <input type="radio" name="estrato" id="Estrato_5" value="5">
            <label for="Estrato_5">5</label>
            <input type="radio" name="estrato" id="Estrato_6" value="6">
            <label for="Estrato_6">6</label>
            <br>
            <!-- *********************************************** -->
        </fieldset>
        <fieldset class="fieldset_4">
            <legend class="legend_1">Descripcion del inmueble</legend>
            <label class="etiqueta_1">Nº habitaciones</label>
            <br> 
            <input type="radio" name="habitaciones" id="Habitaciones_1" value="1">
            <label for="Habitaciones_1">1</label>
            <input type="radio" name="habitaciones" id="Habitaciones_2" value="2">
            <label for="Habitaciones_2">2</label>
            <input type="radio" name="habitaciones" id="Habitaciones_3" value="3">
            <label for="Habitaciones_3">3</label>
            <input type="radio" name="habitaciones" id="Habitaciones_4" value="4">
            <label for="Habitaciones_4">4</label>
            <input type="radio" name="habitaciones" id="Habitaciones_5" value="5">
            <label for="Habitaciones_5">5</label>
            <input type="radio" name="habitaciones" id="Habitaciones_6" value="6">
            <label for="Habitaciones_6">6</label>
            <br>
            <!-- *********************************************** -->
            <label class="etiqueta_1">Nº baños</label>
            <br> 
            <input type="radio" name="bano" id="bano_1" value="1">
            <label for="bano_1">1</label>
            <input type="radio" name="bano" id="bano_2" value="2">
            <label for="bano_2">2</label>
            <input type="radio" name="bano" id="bano_3" value="3">
            <label for="bano_3">3</label>
            <input type="radio" name="bano" id="bano_4" value="4">
            <label for="bano_4">4</label>
            <br>
            <!-- *********************************************** -->
            <label  class="etiqueta_1">Garaje</label>
            <br> 
            <input type="radio" name="garaje" id="Garaje_1" value="Si">
            <label for="Garaje_1">Si</label>
            <input type="radio" name="garaje" id="Garaje_2" value="No">
            <label for="Garaje_2">No</label>
            <br>
            <!-- *********************************************** -->
            <label  class="etiqueta_1">Jardin</label>
            <br> 
            <input type="radio" name="jardin" id="Jardin_1" value="Si">
            <label for="Jardin_1">Si</label>
            <input type="radio" name="jardin" id="Jardin_2" value="No">
            <label for="Jardin_2">No</label>
            <br>
            <!-- *********************************************** -->
            <label class="etiqueta_1">Patio</label>
            <br> 
            <input type="radio" name="patio" id="Patio_1" value="Si">
            <label for="Patio_1">Si</label>
            <input type="radio" name="patio" id="Patio_2" value="No">
            <label for="Patio_2">No</label>
            <br>
            <!-- *********************************************** -->
            <label class="etiqueta_1">M<sup class="sup_1">2</sup></label>
            <input class="input_3" type="text" name="metros"> 
        </fieldset>
        <fieldset class="fieldset_4">
            <legend class="legend_1">Servicios ofrecidos</legend>
            <label class="etiqueta_1">Gas tuberias</label>
            <br> 
            <input type="radio" name="gas" id="Gas_1" value="Si">
            <label for="Gas_1">Si</label>
            <input type="radio" name="gas" id="Gas_2" value="No">
            <label for="Gas_2">No</label>
            <br>
            <!-- *********************************************** -->
            <label class="etiqueta_1">Internet</label>
            <br> 
            <input type="radio" name="internet" id="Interne_1" value="Si">
            <label for="Interne_1">Si</label>
            <input type="radio" name="internet" id="Interne_2" value="No">
            <label for="Interne_2">No</label>
            <br>
            <!-- *********************************************** -->
            <label class="etiqueta_1">Cable TV</label>
            <br> 
            <input type="radio" name="cable_TV" id="Cable_TV_1" value="Si">
            <label for="Cable_TV_1">Si</label>
            <input type="radio" name="cable_TV" id="Cable_TV_2" value="No">
            <label for="Cable_TV_2">No</label>
            <br>
            <!-- *********************************************** -->
        </fieldset>
        <fieldset class="fieldset_4">
            <legend class="legend_1">Imagenes</legend>
            <label  class="etiqueta_1">Inserte hasta cinco imagenes no mayor de 700 Kb cada una</label><br>
            <label class="label_1" for="ImgInp" name="imgInp" id="ioo">Buscar imagen</label>
            <input hidden type="file" name="imagen_inmueble[]" id="ImgInp" onchange="muestraImg()" multiple/> 
            <div id="muestrasImg"></div>   
        </fieldset>
        <fieldset class="fieldset_4">
            <legend class="legend_1">Precio</legend>
            <label  class="etiqueta_1">Costo mensual</label>
            <input type="text" name="precio">
        </fieldset>
        <input type="text" hidden name="ID_Afiliado" value="<?php echo $ID_Afiliado;?>">
        <input type="text" hidden name="tipoNegociación" value="<?php echo $Parametro[1];?>">
        <input type="text" hidden name="inmueble" value="<?php echo $Parametro[0];?>">
        <input type="text" hidden name="aleatorioPago" value="<?php echo $Parametro[3];?>">
        <input type="submit" value="Guardar">
    </form>
    </div>
        <label class="label_10">3/3</label>
    <footer>
	    <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
    </footer>
  
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