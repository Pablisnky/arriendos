<?php
    class RegistrosHabitaciones_C extends Controlador{
        public function __construct(){
            //  echo "Se ha cargado el controlador \"RegistrosHabitaciones_C\"" . "<br>";
            
            //Se accede al servidor de base de datos
            $this->HabitacionesDisponibles = $this->modelo("registrosHabitaciones_M");
        }
        
        //Siempre cargara el metodo index sino se pasa un metodo especifico
        public function index($Precio, $TipoInmueble){
            //Se hace una petición al modelo para consultar las habitaciones disponibles
            $Registros= $this->HabitacionesDisponibles->consultarHabitaciones($Precio, $TipoInmueble);
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
        }
    }
?>    