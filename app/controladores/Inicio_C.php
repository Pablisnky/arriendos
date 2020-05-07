<?php
    class Inicio_C extends Controlador{
        public function __construct(){
            // $this->articuloModelo= $this->modelo("Articulo");
            // echo "Se ha cargado el controlador por defecto \"Inicio_C\"" . "<br>";
            // echo "<br>";
        }
        
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){
            // $Afiliados= $this->articuloModelo->obtenerArticulos();
            // $Datos=[
            //     "titulo"=>"Bienvenidos",
            //     "Afiliados"=>$Afiliados
            // ];
            // echo "Carga la vista"  . "<br>";
            $this->vista("paginas/inicio_V");
        }
    }
?>    