<?php    
    class Filtro_C extends Controlador{
        public function __construct(){
            // echo "Se ha cargado el controlador \"Filtro_C\"" . "<br>";
        }

        // Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){
        //     //Se accede al servidor de base de datos
        //     //Se instancia un objeto correspondiente que se comunica con la BD 
        //     $this->nombre_M = $this->modelo("Entrada_M");

        //     //Se consulta el nombre del participante registrados en el sistema con el ID_Afiliado dado como argumento
        //     $Nombre= $this->nombre_M->consultarUsuario($ID_Afiliado);
        //     $Datos=[
        //         "Nombre" => $Nombre,
        //     ];
        //     // print_r($Nombre);
        //     // echo "<br>";

            // echo "Carga la vista"  . "<br>";
        //     $this->vista("paginas/entrada_V", $Datos);
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