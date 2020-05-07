<?php
    class FormasPago_C extends Controlador{
        public function __construct(){
            //Se carga la vista"  . "<br>";
            $this->vista("paginas/formasPago_V");
        }
        
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){
            // $Afiliados= $this->articuloModelo->obtenerArticulos();
            // $Datos=[
            //     "titulo"=>"Bienvenidos",
            //     "Afiliados"=>$Afiliados
            // ];
        }
    }
?>    