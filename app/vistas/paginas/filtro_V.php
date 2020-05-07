<!-- Se carga el header -->
<?php 
    include(RUTA_APP . "/vistas/inc/header.php"); 
    $TipoInmueble = $Datos;
?>
    <label class="label_13"><?php echo $TipoInmueble;?></label>
    <div class="contenedor_26"> 
        <?php
            switch($TipoInmueble){
                case "Casas": 
                case "Apartamentos": 
                case "Aparta-Estudios":  ?>
                    <input class="label_15" type="radio" name="negociacion" value="Arrenda" id="Arrenda" onclick="habilitar_arriendo(); preciosArrendos()">
                    <label class="label_14" for="Arrenda" onclick="habilitar_arriendo(); preciosArrendos()">Arrendar</label>

                    <input type="radio" name="negociacion" value="Venta" id="Compra" onclick="habilitar_compra(); preciosCompra()">
                    <label class="label_14 " for="Compra" onclick="habilitar_compra(); preciosCompra()">Comprar</label>    <?php
                break;
            }   ?>
    </div>
        
    <div class="contenedor_45"  onclick="ocultarMenu()">
        <div class="contenedor_25">
            <div>
                <select class="select_2" id="Departamento" disabled>
                    <option>Norte de Santander</option>
                </select>
            </div>
            <div>
                <select class="select_2" id="Municipio" disabled>
                    <option>Pamplona</option>
                </select>
            </div>

            <div id="Contenedor_Inmueble_Arriendo">
                <?php
                    switch($TipoInmueble){
                        case "Casas":  ?>
                            <select class="select_2" id="Casa_Arriendo" disabled onchange="llamar_casa_arriendo()">
                                <option >Seleccion por precio</option>
                                <option value="500000">hasta 500.000 pesos</option>
                                <option value="600000">hasta 600.000 pesos</option>
                                <option value="700000">hasta 700.000 pesos</option>
                                <option value="800000">hasta 800.000 pesos</option>
                                <option value="900000">hasta 900.000 pesos</option>
                                <option value="1000000">hasta 1.000.000 pesos</option>
                                <option value="1200000">hasta 1.200.000 pesos</option>                
                                <option value="1400000">hasta 1.400.000 pesos</option>
                                <option value="1600000">hasta 1.600.000 pesos</option> 
                                <option value="1800000">hasta 1.800.000 pesos</option> 
                                <option value="2000000">hasta 2.000.000 pesos</option> 
                                <option value="2200000">hasta 2.200.000 pesos</option> 
                                <option value="2400000">hasta 2.400.000 pesos</option>                
                                <option value="2500000">mayor a 2.500.000 pesos</option>
                            </select> <?php
                        break;
                        case "Habitaciones": ?>
                            <select class="select_2" id="Precio" onchange="llamar_precio_habitacion()">
                                <option >Seleccion por precio</option>
                                <option value="100000">hasta 100.000 pesos</option>
                                <option value="150000">hasta 150.000 pesos</option>
                                <option value="200000">hasta 200.000 pesos</option>
                                <option value="250000">hasta 250.000 pesos</option>
                                <option value="300000">hasta 300.000 pesos</option>
                                <option value="350000">hasta 350.000 pesos</option>
                                <option value="400000">hasta 400.000 pesos</option>                
                                <option value="450000">hasta 450.000 pesos</option>
                                <option value="500000">hasta 500.000 pesos</option>                
                                <option value="550000">mayor a 500.000 pesos</option>
                            </select> <?php
                        break;
                    }   ?>
            </div>
            <div class="Contenedor_35" id="Contenedor_Inmueble_Compra">
                <?php
                    switch($TipoInmueble){
                        case "Casas":  ?>
                            <select class="select_2" id="Casa_Venta" onchange="llamar_casa_venta()">
                                <option >Seleccion por precio</option>
                                <option value="20000000">hasta 20.000.000 pesos</option>
                                <option value="30000000">hasta 30.000.000 pesos</option>
                                <option value="40000000">hasta 40.000.000 pesos</option>
                                <option value="50000000">hasta 50.000.000 pesos</option>
                                <option value="60000000">hasta 60.000.000 pesos</option>
                                <option value="70000000">hasta 70.000.000 pesos</option>
                                <option value="80000000">hasta 80.000.000 pesos</option>
                                <option value="90000000">hasta 90.000.000 pesos</option>               
                                <option value="100000000">mayor a 100.000.000 pesos</option>
                            </select> <?php
                        break;
                    }   ?>   
            </div>
        </div>
        <div class="contenedor_66" id='Loading'>
            <p class="p_6">Espere un momento</p>
        </div>
        <div class="mostrar_precio" id="Mostrar_precio">
        </div>
    </div>
    <input type="text" value="<?php echo $TipoInmueble;?>" id="TipoInmueble" hidden>
 
	<footer>
	    <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
	</footer>
    </body>