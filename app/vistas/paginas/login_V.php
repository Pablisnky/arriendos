	<?php
		// Se carga el header 
		require(RUTA_APP . "/vistas/inc/header.php");
	?>
	<div class="contenedor_11">
		<div onclick= "ocultarMenu()">
			<div class="contenedor_12">
				<h2>Inicia sesión</h2>
				<form action="<?php echo RUTA_URL . '/Login_C/ValidarSesion';?>" method="POST">
					<fieldset class="fieldset_3">
						<input style="margin-bottom: 2%;" type="email" name="correo_Arr" id="Correo" placeholder="e-mail" autocomplete="off">
						<input style="margin-bottom: 1%;" type="password" name="clave_Arr" id="Clave" placeholder="Contraseña" autocomplete="off">
						<div class="contenedor_13">
							<input type="checkbox" id="Recordar" name="recordar" value="1">
							<label class="recordar" for="Recordar">Recordar datos en este equipo.</label>
						</div>
						<input class="label_1 label_4" type="submit" value="Entrar"><!-- validar_02() se encuentra en return validar_02()validarFormularios.js -->
						<hr>
						<p class="parrafo_1">¿Olvidaste tu contraseña?
						<label class="label_2" onclick="NotificarContrasena()">Recuperala</label></p>
					</fieldset>
				</form>
				<p class="parrafo_1">¿No tienes cuenta?<br>
				<a class="label_2" href="<?php echo RUTA_URL . '/Registro_C';?>">Registrate</a></p>
			</div>
		</div>
		<div class="contenedor_16" id="Contenedor_16" onclick="OcultarDiv()">
			<form action="<?php echo RUTA_URL . '/Login_C/RecuperarClave';?>" method="POST" autocomplete="off">
				<fieldset class="Afiliacion_5" style="background-color: #F4FCFB; border-radius: 15px;">
					<p class="span_2">Indiquenos un correo al cual podamos enviarle un código de recuperación</p>
					<br>
					<input class="etiqueta_35" type="text" name="correo"><!--llamar_VerificarCedula() esta en ajaxBuscador.js-->
					<input style="margin: auto; display: block;" type="submit" id="BotonGuardar" value="Enviar" onclick="">
				</fieldset>
			</form>
		</div>
	</div>
	<footer>
		<?php include(RUTA_APP . "/vistas/inc/footer.php");?>
	</footer>
	</body>
</html>	

<script type="text/javascript" src="../javascript/validarFormularios.js"></script>