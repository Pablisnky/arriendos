<?php
    class Login_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;
        }

        public function consultarAfiliados($Correo){
            $this->db->Consulta("SELECT * FROM afiliado WHERE correo='$Correo'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }
        
        public function consultarContraseña($ID_Afiliado){
            $this->db->Consulta("SELECT * FROM usuario WHERE ID_Afiliado='$ID_Afiliado'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }
        
        public function consultarUsuarioRecordado($Cookie_usuario){
            $this->db->Consulta("SELECT * FROM afiliado WHERE ID_Afiliado= '$Cookie_usuario'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }

       
    }