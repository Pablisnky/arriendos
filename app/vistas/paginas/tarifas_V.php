    <!-- Se carga el header -->
    <?php require(RUTA_APP . "/vistas/inc/header.php");?>

    <section class="contenedor_48"  onclick="ocultarMenu()">
        <article>
            <p class="p_5 p_5b">Escoje un plan que se ajuste a tu condición</p>
            <label class="label_3">Planes Colombia <br><span class="span_3">(precios de apertura: -40%)</span></label>
            <div class="contenedor_52">
                <a class="a_8" href="<?php echo RUTA_URL . '/Tarifas_C/tarifa_natural';?>">Persona natural</a>
                <a class="a_8" href="<?php echo RUTA_URL . '/Tarifas_C/tarifa_inmobiliaria';?>">Arrendadora</a>
                <a class="a_8" href="<?php echo RUTA_URL . '/Tarifas_C/tarifa_constructora';?>">Constructora</a>
            </div> 
        </article>
    </section>
    <footer>
        <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
    </footer>
</body>
</html>