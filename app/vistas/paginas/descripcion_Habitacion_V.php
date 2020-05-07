<?php
// Se carga el header
    include(RUTA_APP . "/vistas/inc/headerDescripcion.php"); 
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
                    <label class="label_16">Baño independiente</label>
                    <label class="label_18"><?php echo $Registros->bano;?></label>
                    <label class="label_16">Salida independiente</label>
                    <label class="label_18"><?php echo $Registros->salidaInd;?></label>
                    <label class="label_16">Amoblada</label>
                    <label class="label_18"><?php echo $Registros->amoblada;?></label>
                    <label class="label_16">Closeth</label>
                    <label class="label_18"><?php echo $Registros->closeth;?></label>
                    <label class="label_16">Area</label>
                    <label class="label_18"><?php echo $Registros->area;?></label>
                </div>
                <div class="contenedor_29 contenedor_29a">
                    <label class="label_17">Servicios ofrecidos</label>
                    <label class="label_16">Cocina</label>
                    <label class="label_18"><?php echo $Registros->cocina;?></label>
                    <label class="label_16">Internet</label>
                    <label class="label_18"><?php echo $Registros->internet;?></label>
                    <label class="label_16">Cable TV</label>
                    <label class="label_18"><?php echo $Registros->cableTV;?></label>
                    <label class="label_16">Lavadora</label>
                    <label class="label_18"><?php echo $Registros->lavadora;?></label>
                    <label class="label_16">Tendedero</label>
                    <label class="label_18"><?php echo $Registros->tendedero;?></label>
                </div>
                <div class="contenedor_29 contenedor_29a">
                    <label class="label_17">Renta</label>
                    <label class="label_16">Costo mensual</label>
                    <label class="label_18"><?php echo $Registros->precio;?></label>
                    <label class="label_17">Observaciones</label>
                    <div class="contenedor_56">
                        <div class="contenedor_57">
                            <label class="label_16">Mascotas</label>
                            <label class="label_18"><?php echo $Descripcion_4;?></label>
                        </div>
                        <div>
                            <label class="label_16">Sexo</label>
                            <label class="label_18"><?php echo $Descripcion_3;?></label>
                            </div>
                        </div>
                    <label class="label_16">Compartida</label>
                    <label class="label_18"><?php echo $Registros->compartida;?></label>
                    <br>             
                    <label class="label_17 label_17a">contacto</label>
                    <input class="input_4" type="text" value="<?php echo $Registros_2->nombre . " " . $Registros_2->apellido;?>" readonly>
                    <label class="label_19">telefono</label>
                    <a class="a_5" href="tel:<?php echo $Registros_2->telefono;?>"><?php echo $Registros_2->telefono;;?></a>
                </div>
            </div>
        </div>
        <label class="boton_1 label_29" onclick="cerrarVentana()">Cerrar</label>
    </body>
</html>