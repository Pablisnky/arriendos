<?php    
    class Filtro_C extends Controlador{
        public function __construct(){
            
        }

        // Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){

        }

        public function habitaciones(){
            // echo "Carga la vista"  . "<br>";
            $Datos= "Habitaciones";
            $this->vista("paginas/filtro_V", $Datos);
        }

        public function casas(){
            // echo "Carga la vista"  . "<br>";
            $Datos= "Casas";
            $this->vista("paginas/filtro_V", $Datos);
        }
    }
?>    