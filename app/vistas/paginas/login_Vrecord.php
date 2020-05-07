<?php
	// session_start();
	//Se traen los datos obtenidos en la consulta Entrada_C
	foreach($Datos["usuarioRecord"] as $usuarioRec){
        $Correo= $usuarioRec->correo;
        // echo "Correo: " . $Correo  . "<br>"; 
    } 
	$Cookie_clave = $_COOKIE["clave"];

    // Se carga el header 
    require(RUTA_APP . "/vistas/inc/header.php");
?>
    	<div class="contenedor_11">
			<div onclick="ocultarMenu()">
				<div class="contenedor_12">
					<h2>Inicia sesión</h2>			
					<form action="<?php echo RUTA_URL . '/Login_C/ValidarSesion';?>" method="POST">
						<fieldset class="fieldset_4">
			    			<!-- el formulario se autorellena con la informacion recuperada de la BD porque existian las cookies-->
							<br>
							<input style="margin-bottom: 2%" type="email" name="correo_Arr" id="Correo" value="<?php if(isset($Correo)) echo $Correo;?>">
							<input style="margin-bottom: 2%" type="password" name="clave_Arr" id="Clave" value="<?php if(isset($Cookie_clave)) echo $Cookie_clave ;?>">
							<div class="contenedor_13">
								<input type="checkbox" id="Recordar" name="recordar" value="1">
								<label class="recordar" for="Recordar">Recordar datos en este equipo.</label>
							</div>
							<input class="label_1 label_4" type="submit" value="Entrar" onclick=""><!-- validar_02() se encuentra en return validar_02()validarFormularios.js -->
							<hr>
							<p class="parrafo_1">¿Olvidaste tu contraseña de <span class="span_1">Arrianda.com</span>?
							<label class="label_2" onclick="NotificarContrasena()">Recuperala</label></p>
						</fieldset>
					</form>
					<p class="parrafo_1">¿No tienes cuenta en <span class="span_1">Arrienda</span> ?<br>
					<a class="label_2" href="registro.php">Registrate</a></p>
				</div>
			</div>
			<div class="contenedor_16"  id="Contenedor_16">
				<form action="../controlador/recibeCorreo.php" method="POST" autocomplete="off">
					<fieldset class="Afiliacion_5" style="background-color: #F4FCFB; border-radius: 15px;">
					    <p class="span_9">Indiquenos un correo al cual podamos enviarle un código de recuperación</p>
					    <br>
					    <input class="etiqueta_35" type="text" name="correo"><!--llamar_VerificarCedula() esta en ajaxBuscador.js-->
					    <input style="margin: auto; display: block;" type="submit" id="BotonGuardar" value="Enviar" onclick="">
				    </fieldset>
				</form>
			</div>
        	<div class="tapa_2" id="Tapa_2" onclick="quitarTapa_2()"></div><!--Este Div es la parte oscura, quitarTapa_2() esta al final de este archivo-->
		</div >
	</body>
</html>

<script type="text/javascript" src="../javascript/validarFormularios.js"></script>