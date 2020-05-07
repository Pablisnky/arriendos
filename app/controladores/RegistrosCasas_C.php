<?php    
    class RegistrosCasas_C extends Controlador{
        public function __construct(){
            //impide mostrar los errore
            include(RUTA_APP . "/config/muestraError.php");

            echo "Se ha cargado el controlador \"RegistrosCasas_C\"" . "<br>";
            
            //Se accede al servidor de base de datos
            $this->CasasDisponibles = $this->modelo("registrosCasas_M");
        }
        
        //Siempre cargara el metodo index sino se pasa un metodo especifico, los parametros se reciben desde Funciones_Ajax.js; archivo solicitado en filtro_V
        public function index($Precio, $TipoInmueble, $Negociacion){
            // echo $Precio . "<br>";
            // echo $TipoInmueble . "<br>";
            // echo $Negociacion . "<br>";
            // Se verifica que tipo de negociacion se ha pedido
            switch($Negociacion){
                case "Arrenda":
                    //Se hace una petición al modelo para consultar las habitaciones disponibles
                    $Registros= $this->CasasDisponibles->consultarCasas($Precio, $TipoInmueble, $Negociacion);
                    // print_r($Registros);
                    $Datos=[
                        "registros" => $Registros,
                        $Precio, 
                        $TipoInmueble, 
                        "Arriendo" 
                    ];
                    // echo "Carga la vista"  . "<br>";
                    // print_r($Datos)  ;
                    $this->vista("paginas/inmueble_V", $Datos);
                break;
                case "Venta":
                        //Se hace una petición al modelo para consultar las habitaciones disponibles
                        $Registros= $this->CasasDisponibles->consultarCasas($Precio, $TipoInmueble, $Negociacion);
                        // print_r($Registros);
                        $Datos=[
                            "registros" => $Registros,
                            $Precio, 
                            $TipoInmueble, 
                            "Venta" 
                        ];
                        // echo "Carga la vista"  . "<br>";
                        // print_r($Datos)  ;
                        $this->vista("paginas/inmueble_V", $Datos);
                break;
            }
        }
    }
    // Se cambia la expresion (solo para presentar en pantalla)
    // switch($Negociacion){
    //     case "Arrenda":
    //         $Descripcion = "Arrenda";
    //     break;
    //     case "Compra":
    //         $Descripcion = "Venta";
    //     break;
    // }

    // Se consulta en la BD los inmuebles que el usuario a solicitado y que esten liberados por pago
    // $Consulta=  $conexion->query("SELECT * FROM inmueble WHERE tipo_negociacion = '$Descripcion' AND tipo_inmueble= '$Inmueble' AND precio <= $Precio AND pago != 2") or die($conexion->error);
    // if(mysqli_num_rows($Consulta) != 0){    ?>
    
<!-- <!DOCTYPE html>
<html lang="es">
	<head>
		<title>Arriendo PNA</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    </head>
    
    <?php
         // Se cambia la expresion (solo para presentar en pantalla)
        // switch($Negociacion){
        //     case "Arrenda":
        //         $Descripcion = "Arriendo";
        //     break;
        // }
    ?>
    
    <p class="p_2"><?php echo $Inmueble;?> en <?php echo $Descripcion;?></p>
    <table class="table_2">
        <caption class="caption_1"><?php echo $Inmueble;?> en <?php echo $Descripcion;?></caption>
        <thead> 
            <th class="th_5">CÓDIGO</th>
            <!-- <th></th> 
            <th class="th_3">DEPARTAMENTO</th>
            <th class="th_2">MUNICIPIO</th>
            <th class="th_4">BARRIO</th>
            <th class="th_4">DIRECCION</th>
            <th>PRECIO</th>
            <th class="th_1">DETALLES</th>
        </thead>   
        <tbody>     <?php
//             while($registros= mysqli_fetch_array($Consulta)){  
//                 $ID_Inmueble =  $registros["ID_Inmueble"];?>
//                 <tr class="tr_1">
//                     <td><?php echo $registros["ID_Inmueble"];?></td>
//                     <!-- <td><img class="img_1" alt="Fotografia no disponible" src="../images/<?php //echo $registros['nombre_img'];?>"></td> -->
<!-- //                     <td>Norte de Santander</td>
//                     <td>Pamplona</td>
//                     <td><?php echo $registros["barrio"];?></td>
//                     <td><?php echo $registros["direccion"];?></td>
//                     <td class="td_3"><?php echo $registros["precio"];?></td>
//                     <td class="td_3"><label class="label_2" onclick="abrirDetalles(<?php echo $ID_Inmueble;?>)">Ver</label></td>
//                 </tr>
//                     <?php
//             }   ?>
//         </tbody>
//     </table> 
// </html>    -->
 <?php
// }
// else{
//     echo "<p class='p_1'>No se encontraron registros</p>";
//     echo "<img class='imagen_5' src='../images/logo_aplicacion/logo_Mira_horebi.png' alt='imagen de fondo'  onclick='mostrarMenu()'/>";
// }
?>