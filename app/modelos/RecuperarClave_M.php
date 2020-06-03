<?php
    class RecuperarClave_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;
        }

        public function consultarCodigo($CodigoUsuario, $CorreoUsuario){
            $this->db->Consulta("SELECT * FROM codigo_recuperacion WHERE codigoAleatorio = '$CodigoUsuario' AND correo ='$CorreoUsuario'");
            $gsent = $this->db->ContarRegistros();
            return $gsent;
        }       
        
        public function actualizarEst_Cod($CodigoUsuario){
            $this->db->Consulta("UPDATE codigo_recuperacion SET codigoVerificado = 1 WHERE codigoAleatorio= '$CodigoUsuario'");
            $resultados =  $this->db->execute();
            return $resultados;
        }
    }