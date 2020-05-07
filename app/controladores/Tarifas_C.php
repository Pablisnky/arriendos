<?php
    class Tarifas_C extends Controlador{
        public function __construct(){
            // echo "Se ha cargado el controlador \"Tarifas_C\"";
            // echo "<br>";
        }

        // Carga la vista por defecto correspondiente a este controlador"
        public function index(){
            $this->vista("paginas/tarifas_V");
        }

        // Carga la vista de personas naturales"
        public function tarifa_natural(){
            $this->vista("paginas/tarifas_Natural_V");
        }

        // Carga la vista de inmobiliaria"
        public function tarifa_inmobiliaria(){
            $this->vista("paginas/tarifas_Inmobiliaria_V");
        }
        
        // Carga la vista de constructoras"
        public function tarifa_constructora(){
            $this->vista("paginas/tarifas_Constructoras_V");
        }
    }
?>    