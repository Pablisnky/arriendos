 <?php
         session_start();

        //se invoca la sesion que tiene el ID_Afiliado creada en validarSesion.php
        $ID_Afiliado= $_SESSION["ID_Afiliado"];
        //echo $ID_Afiliado . "<br>";

        //Se llama la sesion  el Nombre creada en Login_C.php
        $nombre= $_SESSION["Nombre"];

        // $Datos se recibe desde RegistrarPago_C/seleccionInmueble

        // Se carga el header 
        require(RUTA_APP . "/vistas/inc/headerLogin.php");

        // Debido a que se va a enviar un aray como parametro en la url 
        $Datos_3= serialize($Datos);
        $Datos_3= urlencode($Datos_3);
        // echo $Datos_3;
?>
        <div class="contenedor_21" id="Contenedor_21">
                <p class="p_8">Tipo de inmueble a <?php print_r($Datos[0]);?>.</p><!--$Datos[0] es recibido desde RegistrarPago_C/seleccionInmueble-->
                <div class="contenedor_21_a">
                        <a class="label_9 label_11" href="<?php echo RUTA_URL;?>/Publicacion_C/inmueble/Casas,<?php echo $Datos_3;?>">Casa</a>
                        <a class="label_9 label_9a" href="">Apartamento</a>
                        <a class="label_9 label_9a label_11" href="">Habitación</a>
                        <a class="label_9 label_9a" href="">Aparto-estudio</a>
                        <a class="label_9 label_9a" href="">Parqueadero</a>
                </div>
                <div class="contenedor_21_a">
                        <a class="label_9 label_9a label_11" href="">Local</a>
                        <a class="label_9 label_9a label_11" href="">Finca</a>
                        <a class="label_9 label_9a label_11" href="">Lote</a>
                        <a class="label_9 label_9a label_11" href="">Galpón</a>
                        <a class="label_9 label_9a label_11" href="">Oficina</a>
                </div>
                <label class="label_10">2/3</label>     
        </div>
<footer>
    <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
</footer>