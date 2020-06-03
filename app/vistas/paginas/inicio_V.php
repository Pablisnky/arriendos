<!-- Se carga el header -->
	<?php include(RUTA_APP . "/vistas/inc/header.php"); ?>
	
	<section class="contenedor_44">
		<div onclick="ocultarMenu()"><!--en este contenedor se hace click y se oculta el menu responsive, la función ocultarMEnu e encuentra en Funciones_varias.js-->
			<img class="imagen" src="<?php echo RUTA_URL?>/images/logo_aplicacion/logo_Mira_horebi.png" alt="imagen de fondo"/> 
			<p class="Inicio_11">horebi</p>  
			<p class="Inicio_10">Inmuebles para arrendar o comprar</p>  
		</div>
	</section>
	<footer>
		<?php require(RUTA_APP . "/vistas/inc/footer.php");?>
	</footer>
</body>
</html>

<script type="text/javascript" src="<?php echo RUTA_URL;?>/javascript/funcionesVarias.js"></script>