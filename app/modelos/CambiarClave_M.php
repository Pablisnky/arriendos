<?php
    class CambiarClave_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;
        }
        
        //Se consulta el ID_Afiliado
        public function consultarID_Afiliado($Correo){
            $this->db->Consulta("SELECT ID_Afiliado FROM afiliado WHERE Correo = '$Correo'");
            $resultados = $this->db->registros();
            return $resultados;
        }  

        public function actualizarClave($ID_Afiliado, $ClaveCifrada){
            $this->db->Consulta("UPDATE usuario SET clave = '$ClaveCifrada' WHERE ID_Afiliado= '$ID_Afiliado'");
            $resultados =  $this->db->execute();
            return $resultados;
        }
    }


    