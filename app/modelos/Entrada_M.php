<?php
    class Entrada_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;
        }

        //Se consulta el nombre del usurio que inicia sesión
        public function consultarUsuario($ID_Afiliado){
            $this->db->Consulta("SELECT nombre FROM afiliado WHERE ID_Afiliado='$ID_Afiliado'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }
        
        //Se consulta los inmuebles que el usuario a publicado en su cuenta
        public function consultarInmueblesPublicados($ID_Afiliado){
            $this->db->Consulta("SELECT * FROM inmueble WHERE inmueble.ID_Afiliado= '$ID_Afiliado' ORDER BY inmueble.ID_Inmueble DESC");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }

        //Se consulta las fotografias del inmueble
        public function consultarFotoInmuebles($ID_Inmueble){
            $this->db->Consulta("SELECT ID_Imagen, nombre_img FROM imagenes WHERE ID_Inmueble = '$ID_Inmueble' ORDER BY ID_Imagen DESC LIMIT 5");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }
        
        //Se eliminan los datos del inmueble
        public function eliminarInmueble($ID_Inmueble){
            $this->db->Elimina("DELETE FROM inmueble WHERE ID_Inmueble= '$ID_Inmueble'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->execute();
            return $resultados;
        }
        
        //Se eliminan las fotografia del inmueble
        public function eliminarFotografias($ID_Imagen){
            $this->db->Elimina("DELETE FROM imagenes WHERE ID_Imagen= '$ID_Imagen'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->execute();
            return $resultados;
        }

        //Se consultan los datos del inmueble
        public function consultarInmueble($ID_Inmueble){
            $this->db->Consulta("SELECT * FROM inmueble WHERE ID_Inmueble = '$ID_Inmueble'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }
    }