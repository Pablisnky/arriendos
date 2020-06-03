        
        <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilosArriendos_MVC.css"/>
        
        <div class="contenedor_19" onclick= "ocultarMenu()">
            <p class='p_8 p_5b'>Se ha enviado un código de recuperación de contraseña al correo suministrado.</p> 
            <form action="<?php echo RUTA_URL . '/RecuperarClave_C/verificaCodigos';?>"  method="POST">
                <input class="input_6 input_9" type="text" name="ingresar" placeholder="Ingresar Código"> 
                <input type= "text" style="display:none" value="<?php echo $Datos[0];?>" name="correo">
                <input type="submit" value="enviar">
            </form>  
        </div> 
        <div class="contenedor_58">
            <?php
            // echo "<p class='p_8'>Código invalido</p>";
            // echo "<a class='boton_1 boton_3' href='javascript:history.go(-1)'>Regresar</a>"; 
            ?>
        </div>
		<footer>
	        <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
		</footer>
	</body>
</html>	

<script type="text/javascript" src="../javascript/validarFormularios.js"></script>