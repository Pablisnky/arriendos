<?php
// Se carga el header
    include(RUTA_APP . "/vistas/inc/headerDescripcion.php"); 

    //$Datos es recibido desde TipoInmueble_C
    $TipoInmueble = $Datos;
?>
        <div class="contenedor_27"> 
            <div class="contenedor_33">
                <div class="contenedor_31">  
                    <nav>
                        <ul class="ul_1">
                            <li class="l_1">
                                <img class="imagen_7 imagen_9" id="Img_1" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_1->nombre_img;?>">
                            </li>
                            <li class="l_1">
                                <img class="imagen_7" id="Img_2" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_2->nombre_img;?>">
                            </li>
                            <li class="l_1">
                                <img class="imagen_7" id="Img_3" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_3->nombre_img;?>">
                            </li>
                            <li class="l_1">
                                <img class="imagen_7" id="Img_4" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_4->nombre_img;?>">
                            </li>
                            <li class="l_1">
                                <img class="imagen_7" id="Img_5" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_5->nombre_img;?>">
                            </li> 
                        </ul> 
                    </nav>
                </div>
                <div class="contenedor_32"> 
                    <ul>      
                        <li> 
                            <img class="imagen_10" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_1->nombre_img;?>" id="ImagenMiniatura_1" onclick="ImagenMiniatura_A()">
                            </label>
                        </li> 
                        <li>
                            <img class="imagen_10" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_2->nombre_img;?>" id="ImagenMiniatura_2"  onclick="ImagenMiniatura_B()">
                            </label>
                        </li> 
                        <li>
                            <img class="imagen_10" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_3->nombre_img;?>" id="ImagenMiniatura_3" onclick="ImagenMiniatura_C()">
                            </label>
                        </li> 
                        <li>
                            <img class="imagen_10" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_4->nombre_img;?>" id="ImagenMiniatura_4" onclick="ImagenMiniatura_D()">
                            </label>
                        </li> 
                        <li>
                            <img class="imagen_10" alt="Fotografia no disponible" src="<?php echo RUTA_URL?>/images/<?php echo $Fotografia_5->nombre_img;?>"id="ImagenMiniatura_5" onclick="ImagenMiniatura_E()">
                            </label>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="contenedor_28">
                <div class="contenedor_29">
                    <label class="label_17">Ubicación geografica</label>
                    <label class="label_16">Departamento</label>
                    <label class="label_18"><?php echo $Registros->departamento;?></label>
                    <label class="label_16">Municipio</label>
                    <label class="label_18"><?php echo $Registros->municipio;?></label>
                    <label class="label_16">Dirección</label>
                    <label class="label_18"><?php echo $Registros->direccion;?></label>
                    <label class="label_16">Barrio</label>
                    <label class="label_18"><?php echo $Registros->barrio;?></label>
                    <label class="label_16">Estrato</label>
                    <label class="label_18"><?php echo $Registros->estrato;?></label>
                </div>
                <div class="contenedor_29">
                    <label class="label_17">Descripción del inmueble</label>
                    <label class="label_16">Habitaciones</label>
                    <label class="label_18"><?php echo $Registros->habitaciones;?></label>
                    <label class="label_16">Baños</label>
                    <label class="label_18"><?php echo $Registros->bano;?></label>
                    <label class="label_16">Garaje</label>
                    <label class="label_18"><?php echo $Registros->garaje;?></label>
                    <label class="label_16">Jardin</label>
                    <label class="label_18"><?php echo $Registros->jardin;?></label>
                    <label class="label_16">Patio</label>
                    <label class="label_18"><?php echo $Registros->patio;?></label>
                    <label class="label_16">Area</label>
                    <label class="label_18"><?php echo $Registros->area;?></label>
                </div>
                <div class="contenedor_29">
                    <label class="label_17">Servicios ofrecidos</label>
                    <label class="label_16">Gas</label>
                    <label class="label_18"><?php echo $Registros->gas;?></label>
                    <label class="label_16">Internet</label>
                    <label class="label_18"><?php echo $Registros->internet;?></label>
                    <label class="label_16">Cable TV</label>
                    <label class="label_18"><?php echo $Registros->cableTV;?></label>
                </div>
                <div class="contenedor_29">
                    <label class="label_17">Precio</label>
                    <label class="label_16">Renta</label>
                    <label class="label_18"><?php echo $Registros->precio;?></label>
                    <br>             
                    <label class="label_17 label_17a">contacto</label>
                    <input class="input_4" type="text" value="<?php echo $Registros_2->nombre . " " . $Registros_2->apellido;?>" readonly>
                    <label class="label_19">telefono</label>
                    <a class="a_5" href="tel:<?php echo $Registros_2->telefono;?>"><?php echo $Registros_2->telefono;?></a>
                </div> 
            </div>
        </div>
        <label class="boton_1 label_29" onclick="cerrarVentana()">Cerrar</label>
    </body>
</html>