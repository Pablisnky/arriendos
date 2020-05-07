<?php
    class registrosHabitaciones_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;         
        }

        public function consultarHabitaciones($Precio, $TipoInmueble){
            //Se consulta las habitaciones disponibles
            $this->db->Consulta("SELECT * FROM inmueble WHERE tipo_negociacion = 'Arrenda' AND tipo_inmueble= '$TipoInmueble' AND precio <= $Precio AND pago != 2");
            $resultados = $this->db->registros();
            return $resultados;
        }      

        // public function consultarUsuario($Cedula){         
        //     // //Se consulta en la tabla afiliado el ID_Afiliado del afiliado que se esta registrando
        //     $this->db->Consulta("SELECT ID_Afiliado FROM afiliado WHERE cedula ='$Cedula'");

        //     //registros() es un metodo de la clase Conexion_BD
        //     $resultados =  $this->db->registro();
        //     return $resultados;
        // }

        // public function insertarClaveUsuario($Datos, $ClaveCifrada){
        //     $this->db->Insertar("INSERT INTO usuario(ID_Afiliado, clave) VALUES(:ID_Afiliado, '$ClaveCifrada')");

        //     //Se traen los datos obtenidos en la consulta consultarUsuario
        //     foreach($Datos["ID_Afiliado"] as $ID_Afiliado){
        //         $NombreAfiliado = $ID_Afiliado -> ID_Afiliado;
        //           echo "ID_Afiliad: " . $NombreAfiliado  . "<br>"; 
        //     } 

        //     //Se vinculan los valores de las sentencias preparadas
        //     $this->db->bind(':ID_Afiliado' , $ID_Afiliado);
            
        //     //Se ejecuta la inserción de los datos en la tabla
        //     if($this->db->execute()){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }
    }