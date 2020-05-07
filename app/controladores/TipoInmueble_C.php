<?php
    class TipoInmueble_C extends Controlador{
        public function __construct(){
            // echo "Se ha cargado el controlador \"TipoInmueble_C\"" . "<br>";
            
            //Se accede al servidor de base de datos
            $this->TipoInmueble = $this->modelo("tipoInmueble_M");
        }

        //Siempre cargara el metodo index sino se pasa un metodo especifico, se recibe el ID_Inmueble desde registros_habitaciones_V.php o desde Entrada_C/editarRegistro
        public function index($ID_Inm){
            //Se hace una petición al modelo para consultar las caracteristicas del inmueble seleccionado
            $Registros= $this->TipoInmueble->consultarInmueble($ID_Inm);
            //   print_r($Registros);
            //  echo "<br><br>";
            //Se hace una petición al modelo para consultar el contacto del inmueble seleccionado
            $Registros_2= $this->TipoInmueble->consultarContacto($ID_Inm);
            // print_r($Registros_2);
            //  echo "<br><br>";
            //Se hace una petición al modelo para consultar una fotografia del inmueble seleccionado
            $Fotografia_1= $this->TipoInmueble->consultarFotografia_1($ID_Inm);
            // print_r($Fotografia_1);
            //  echo "<br><br>";
            //Se hace una petición al modelo para consultar una fotografia del inmueble seleccionado
            $Fotografia_2= $this->TipoInmueble->consultarFotografia_2($ID_Inm);
            // print_r($Fotografia_2);
            //  echo "<br><br>";
            //Se hace una petición al modelo para consultar una fotografia del inmueble seleccionado
            $Fotografia_3= $this->TipoInmueble->consultarFotografia_3($ID_Inm);
            // print_r($Fotografia_3);
            //  echo "<br><br>";
            //Se hace una petición al modelo para consultar una fotografia del inmueble seleccionado
            $Fotografia_4= $this->TipoInmueble->consultarFotografia_4($ID_Inm);
            // print_r($Fotografia_4);
            //  echo "<br><br>";
            //Se hace una petición al modelo para consultar una fotografia del inmueble seleccionado
            $Fotografia_5= $this->TipoInmueble->consultarFotografia_5($ID_Inm);
            // print_r($Fotografia_4);
            
            $Datos=[
                "Inmueble" => $Registros,
                "Contacto" => $Registros_2,
                "Fotografia_1" => $Fotografia_1,
                "Fotografia_2" => $Fotografia_2,
                "Fotografia_3" => $Fotografia_3,
                "Fotografia_4" => $Fotografia_4,
                "Fotografia_5" => $Fotografia_5
            ];      

            //Se traen los datos obtenidos en la consulta 
            foreach($Datos["Inmueble"] as $Registros) :            
                switch($Registros->tipo_inmueble){
                    case "Habitaciones":
                            // echo "Carga la vista que describe habitaciones"  . "<br>";
                            $this->vista("paginas/descripcion_Habitacion_V", $Datos);
                    break;
                    case "Casas":
                            // echo "Carga la vista que describe casas"  . "<br>";
                            $this->vista("paginas/descripcion_casa_V", $Datos);
                    break;
                    default:
                    echo "No se encuentran " . $Registros->tipo_inmueble;
                }
            endforeach; 
        }
// // Se consulta que tipo de inmueble es
// $Consulta= $conexion->query("SELECT tipo_inmueble FROM inmueble WHERE ID_Inmueble = '$ID_Inmueble'") or die($conexion->error);
// $Inmueble= mysqli_fetch_array($Consulta);
// // echo $Inmueble["direccion"];

// // Se cambia la expresion (solo para presentar en pantalla)
// switch($Inmueble["tipo_negociacion"]){
//     case "Arrenda":
//         $Descripcion_1 = "arriendo";        
//     break;
// }
// 
}
?>
