<?php
    class Entrada_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;
        }

        //Se consulta los datos del inmueble a editar
        public function editarInmueble($ID_Inmueble){
            
            echo "El inmueble es el Nº " . $ID_Inmueble;
            // $this->db->Consulta("SELECT * FROM inmueble WHERE ID_Afiliado= '$ID_Afiliado' AND ID_Inmueble = '$ID_Inmueble'");
            // //registros() es un metodo de la clase Conexion_BD
            // $resultados =  $this->db->registros();
            // return $resultados;
        }
        
        // //Se consulta los inmuebles que el usuario a publicado en su cuenta
        // public function consultarInmueblesPublicados($ID_Afiliado){
        //     $this->db->Consulta("SELECT * FROM inmueble  WHERE inmueble.ID_Afiliado= '$ID_Afiliado' ORDER BY inmueble.ID_Inmueble DESC");
        //     //registros() es un metodo de la clase Conexion_BD
        //     $resultados =  $this->db->registros();
        //     return $resultados;
        // }

        // //Se consulta las fotografias del inmueble
        // public function consultarFotoInmuebles($ID_Inmueble){
        //     $this->db->Consulta("SELECT nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 5");
        //     //registros() es un metodo de la clase Conexion_BD
        //     $resultados =  $this->db->registros();
        //     return $resultados;
        // }
        
        // //Se eliminan los datos del inmueble
        // public function eliminarInmueble($ID_Inmueble){
        //     $this->db->Elimina("DELETE FROM inmueble WHERE ID_Inmueble= '$ID_Inmueble'");
        //     //registros() es un metodo de la clase Conexion_BD
        //     $resultados =  $this->db->execute();
        //     return $resultados;
        // }
        
        // //Se eliminan las fotografia del inmueble
        // public function eliminarFotografias($ID_Inmueble){
        //     $this->db->Elimina("DELETE FROM imagenes WHERE ID_Inmueble= '$ID_Inmueble'");
        //     //registros() es un metodo de la clase Conexion_BD
        //     $resultados =  $this->db->execute();
        //     return $resultados;
        // }

        // //Se editan las datos del inmueble
        // public function editarInmueble($ID_Inmueble){
        //     echo "El inmuesble es el Nº " . $ID_Inmueble;
        //     // $this->db->Elimina("DELETE FROM inmueble WHERE ID_Inmueble= '$ID_Inmueble'");
        //     // //registros() es un metodo de la clase Conexion_BD
        //     // $resultados =  $this->db->execute();
        //     // return $resultados;
        // }
    }