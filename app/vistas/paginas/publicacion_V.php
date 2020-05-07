<?php
    session_start();

    //se invoca la sesion que tiene el ID_Afiliado, creada en validarSesion.php
    $ID_Afiliado= $_SESSION["ID_Afiliado"];
    // echo $ID_Afiliado . "<br>";

    //Se llama la sesion Nombre, creada en Login_C.php
    $nombre= $_SESSION["Nombre"];
    // echo $nombre . "<br>";

	// Se carga el header 
    require(RUTA_APP . "/vistas/inc/headerLogin.php");
?>

<div class="contenedor_20">
    <div class="contenedor_20_a">
        <a class="label_9 label_11" href="RegistrarPago_C/negociacion/arrendar">Quiero arrendar</a>
        <a class="label_9 label_11" href="RegistrarPago_C/negociacion/comprar">Quiero vender</a>  
        <a class="label_9 label_9a label_11" href="">Quiero dar en cesión</a>
    </div>
    <label class="label_10">1/3</label>
</div> 
<footer>
    <?php include(RUTA_APP . "/vistas/inc/footer.php");?>
</footer>