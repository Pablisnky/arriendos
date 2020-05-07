<?php
    class tipoInmueble_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;         
        }

        public function consultarInmueble($ID_Inmueble){
            //Se consulta que tipo de inmuebles se desea ver
            $this->db->Consulta("SELECT * FROM inmueble WHERE ID_Inmueble = '$ID_Inmueble'");
            $resultados = $this->db->registros();
            return $resultados;
        }    

        public function consultarContacto($ID_Inmueble){
            $this->db->Consulta("SELECT nombre, apellido, telefono FROM afiliado INNER JOIN inmueble ON afiliado.ID_Afiliado=inmueble.ID_Afiliado WHERE ID_Inmueble = '$ID_Inmueble'");
            $resultados = $this->db->registros();
            return $resultados;
        }

        public function consultarFotografia_1($ID_Inmueble){
            $this->db->Consulta("SELECT nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 1");
            $resultados = $this->db->registros();
            return $resultados;
        }

        public function consultarFotografia_2($ID_Inmueble){
            $this->db->Consulta("SELECT nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 1,1");
            $resultados = $this->db->registros();
            return $resultados;
        }

        public function consultarFotografia_3($ID_Inmueble){
            $this->db->Consulta("SELECT nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 2,1");
            $resultados = $this->db->registros();
            return $resultados;
        }

        public function consultarFotografia_4($ID_Inmueble){
            $this->db->Consulta("SELECT nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 3,1");
            $resultados = $this->db->registros();
            return $resultados;
        }
        
        public function consultarFotografia_5($ID_Inmueble){
            $this->db->Consulta("SELECT nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 4,1");
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