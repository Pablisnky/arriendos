<!-- Se carga el header -->
        <?php include(RUTA_APP . "/vistas/inc/header.php"); ?>
        
        <div class="contenedor_19  contenedor_19a" onclick= "ocultarMenu()">
            <h2>Introduzca la nueva clave de usuario</h2>
            <form action="<?php echo RUTA_URL . '/CambiarClave_C/recibeCodigos';?>" method="POST">
                <fieldset class="fieldset_4">
                    <input class="input_5 " type="password" name="clave" placeholder="Nueva clave">
                    <input class="input_5 " type="password" name="repiteClave" placeholder="Repetir clave">
                    <input type="text" value="<?php echo $Datos[0];?>" name="correo"  style="display:none">
                    <input type="submit" value="enviar" name="enviar_2">
                </fieldset>
            </form>
        </div>
        <!-- Hacer un condicional para que entre en este div una vez cambiado la clave -->
        <div class="contenedor_61" onclick= "ocultarMenu()">
            <p class='p_12'>Contraseña cambiada exitosamente</p>
            <a class='boton_1 boton_4' href='<?php echo RUTA_URL . '/login_C';?>'>Inicie sesión</a>
        </div>
        <footer>
		    <?php require(RUTA_APP . "/vistas/inc/footer.php");?>
        </footer>
    </body>
    </html>