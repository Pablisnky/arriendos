<!-- Se carga el header -->
<?php require(RUTA_APP . "/vistas/inc/header.php");?>

        <section class="contenedor_48" onclick="ocultarMenu()">
            <article>
                <h1 class="h1_1">Planes para Arrendadoras</h1>
                <p class="p_5 p_5a">Planes a partir de 10 publicaciones, un banner publicitario identifica la arrendadora mediante el cual los usuarios entran exclusivamente a las publicaciones, entregamos un código QR para incorporar a los medios impresos de promoción y conectar directamente a los clientes con la aplicación móvil.</p>
                <label class="label_3">Colombia <br><span class="span_3">(precios de apertura: -40%)</span></label>
                <div class="contenedor_17">
                    <label class="label_6 label_6b">30 días</label>
                    <label class="label_6">$ 5.000 / inmueble</label>
                </div> 
                <div class="contenedor_17">
                    <label class="label_6 label_6b">15 días</label>
                    <label class="label_6">$ 4.000 / inmueble</label><!-- 2.500-->
                </div>
                <div class="contenedor_17">
                    <label class="label_6 label_6b">7 días</label>
                    <label class="label_6">$ 3.000 / inmueble</label><!-- 1.500-->
                </div>
            </article>
            <article>
                <label class="label_3">Promociones</label>
                <div class="contenedor_17">
                    <label class="label_6 label_7">Más de 20 inmuebles,<br> 20% de descuento</label>
                </div>
                <div class="contenedor_17">
                    <label class="label_6 label_6b">30 días</label>
                    <label class="label_6">$ 4.000 / inmueble</label>
                </div> 
                <div class="contenedor_17">
                    <label class="label_6 label_6b">15 días</label>
                    <label class="label_6">$ 3.200 / inmueble</label>
                </div>
                <div class="contenedor_17">
                    <label class="label_6 label_6b">7 días</label>
                    <label class="label_6">$ 2.400 / inmueble</label>
                </div>
            </article>
            </article>
            <article>
                <label class="label_3">Impulsar publicación</label>
                <div class="contenedor_17">
                    <p class="label_6 label_28">Publicaciones dentro de las primeros diez posiciones de una busqueda,<br> $ 3.000 incremento</p>
                </div>
                <label class="boton_3 boton_4" onclick="formasPago()">Formas de pago</label>
            </article>
        </section>
		<footer>
	        <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
		</footer>
    </body>