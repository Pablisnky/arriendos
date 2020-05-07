<?php
    //El parametro se recibe desde Publicacion_C/recibeRegistro
    function redireccionar($Pagina){
        header('location: ' . RUTA_URL . $Pagina);
    }