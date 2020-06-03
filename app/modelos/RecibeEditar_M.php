<?php
    class RecibeEditar_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD instanciando la clase Conexion_BD
            $this->db = new Conexion_BD;
        }
        
        //Se consulta el ID_Afiliado
        public function consultarID_Afiliado($Correo){
            // $this->db->Consulta("SELECT ID_Afiliado FROM afiliado WHERE Correo = '$Correo'");
            // $resultados = $this->db->registros();
            // return $resultados;
        }  

        public function actualizarInmueble($ID_Inmueble, $RecibeDatos){
            $this->db->Consulta("UPDATE inmueble SET departamento = :DEPARTAMENTO, municipio = :MUNICIPIO, direccion = :DIRECCION, barrio = :BARRIO, estrato = :ESTRATO, habitaciones = :HABITACIONES, bano = :BANIO, garaje = :GARAJE, jardin = :JARDIN, patio = :PATIO, area = :METROS, gas = :GAS, internet = :INTERNET, cableTV = :CABLE_TV, precio = :PRECIO WHERE ID_Inmueble = $ID_Inmueble");
            
            //Se vinculan los valores de las sentencias preparadas
            $this->db->bind(':DEPARTAMENTO' , $RecibeDatos['DEPARTAMENTO']);
            $this->db->bind(':MUNICIPIO' , $RecibeDatos['MUNICIPIO']);
            $this->db->bind(':DIRECCION' , $RecibeDatos['DIRECCION']);
            $this->db->bind(':BARRIO' , $RecibeDatos['BARRIO']);
            $this->db->bind(':ESTRATO' , $RecibeDatos['ESTRATO']);
            $this->db->bind(':HABITACIONES' , $RecibeDatos['HABITACIONES']);
            $this->db->bind(':BANIO' , $RecibeDatos['BANIO']);
            $this->db->bind(':GARAJE' , $RecibeDatos['GARAJE']);
            $this->db->bind(':JARDIN' , $RecibeDatos['JARDIN']);
            $this->db->bind(':PATIO' , $RecibeDatos['PATIO']);
            $this->db->bind(':METROS' , $RecibeDatos['METROS']);
            $this->db->bind(':GAS' , $RecibeDatos['GAS']);
            $this->db->bind(':INTERNET' , $RecibeDatos['INTERNET']);
            $this->db->bind(':CABLE_TV' , $RecibeDatos['CABLE_TV']);
            $this->db->bind(':PRECIO' , $RecibeDatos['PRECIO']);

            //Se ejecuta la actualización de los datos en la tabla
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function actualizarImagenes($ID_Inmueble, $Archivonombre, $Tipo, $Tamanio){
            $this->db->Consulta("UPDATE imagenes SET nombre_img = :NOMBRE_IMG, tipoArchivo = :TIPO_ARCHIVO, tamanoArchivo = :TAMANO_ARCHIVO, fecha = CURDATE() WHERE ID_Inmueble = $ID_Inmueble");
            
            //Se vinculan los valores de las sentencias preparadas
            $this->db->bind(':NOMBRE_IMG' , $Archivonombre);
            $this->db->bind(':TIPO_ARCHIVO' , $Tipo);
            $this->db->bind(':TAMANO_ARCHIVO' , $Tamanio);
            
            //Se ejecuta la actualización de los datos en la tabla
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }