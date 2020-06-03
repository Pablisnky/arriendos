<?php
    session_start();

    //se invoca la sesion que tiene el ID_Afiliado, creada en validarSesion.php
    $ID_Afiliado= $_SESSION["ID_Afiliado"];
    //  echo $ID_Afiliado . "<br>";

    //Se llama la sesion  el Nombre creada en Login_C.php
    $nombre= $_SESSION["Nombre"];

    // Se carga el header 
    require(RUTA_APP . "/vistas/inc/headerLogin.php");
        
            if(!isset($_POST["pagar"])){     ?>
                <div class="contenedor_40">
                    <p class="p_8">Para continuar debes registrar tu pago.</p>
                    <form action="<?php echo RUTA_URL; ?>/RegistrarPago_C/insertarPago" method="POST" autocomplete="off">
                        <input class="input_6" type="text" name="codigo_P" placeholder="Código de consignación">
                        <input type="text" name="negociacion" value="<?php echo $Datos;?>" hidden><!--$Datos es recibido desde RegistrarPago_C/negociacion--> 

                        <input type="submit" name="pagar" value="Pagar">
                    </form> 
                    <label class="boton_5 boton_3" onclick="formasPago()">Formas de pago</label>
                </div>
                <?php
            }   
            else{   ?>
                <div class="contenedor_40">
                    <?php 
                    // echo gettype($Datos) . "<br>";
                    // print_r($Datos);
                    // echo  "<br>";

                    // Debido a que se va a enviar un aray como parametro en la url 
                    $Datos_2= serialize($Datos);
                    $Datos_2= urlencode($Datos_2);
                    // echo $Datos_2;
                    ?>
                    <p class="p_8">Verificaremos y en aproximadamente dos horas tu publicación será incorporada a promoción.</p>
                    <p class="p_8 p_3">Continua cargando la información de tu inmueble</p>
                    <a class="boton_3 boton_6" href="<?php echo RUTA_URL; ?>/RegistrarPago_C/seleccionInmueble/<?php echo $Datos_2;?>">Continuar</a><!--$Datos es recibido desde RegistrarPago_C/insertarPago-->
                </div>
                <?php
            }   ?>
		<footer>
	        <?php  include(RUTA_APP . "/vistas/inc/footer.php");?>
		</footer>
    </body>
</html>