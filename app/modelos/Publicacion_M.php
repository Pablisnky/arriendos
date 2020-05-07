<?php
    class Publicacion_M{
        private $db;

        public function __construct(){
            //Se conecta a la BD creando un objeto de Conexion_BD
            $this->db = new Conexion_BD;
        }

        //Se inserta en la tabla inumeble los datos recibidos exeptuando las imagenes, por medio de sentencias preparadas
        public function insertarInmueble($RecibeDatos){
            $this->db->Insertar("INSERT INTO inmueble(ID_Afiliado, aleatorio, tipo_negociacion, tipo_inmueble, departamento, municipio, direccion, barrio, estrato, habitaciones, bano, garaje, jardin, patio, area, gas, internet, cableTV, precio, fecha_publicacion, fecha_caducacion)VALUES (:ID_Afiliado, :AleatorioPago, :TipoNegociacion, :Inmueble, :Departamento, :Municipio, :Direccion, :Barrio, :Estrato, :Habitaciones, :Banos, :Garaje, :Jardin, :Patio, :Metros, :Gas, :Internet, :Cable_TV, :Precio, :Fecha_publicacion, :Fecha_caducacion)");
            
            //Se consulta la fecha actual y se le suman 30 dias
            $Fecha_publicacion = date('Y-m-j');
            $Fecha_caducacion = strtotime( '+30 day' , strtotime($Fecha_publicacion));
            $Fecha_caducacion = date('Y-m-j' , $Fecha_caducacion);

            //Se vinculan los valores de las sentencias preparadas
            $this->db->bind(':ID_Afiliado' , $RecibeDatos['ID_AFILIADO']);
            $this->db->bind(':AleatorioPago' , $RecibeDatos['ALEATORIO']);
            $this->db->bind(':TipoNegociacion' , $RecibeDatos['TIPO_NEGOCIACION']);
            $this->db->bind(':Inmueble' , $RecibeDatos['TIPO_INMUEBLE']);
            $this->db->bind(':Departamento' , $RecibeDatos['DEPARTAMENTO']);
            $this->db->bind(':Municipio' , $RecibeDatos['MUNICIPIO']);
            $this->db->bind(':Direccion' , $RecibeDatos['DIRECCION']);
            $this->db->bind(':Barrio' , $RecibeDatos['BARRIO']);
            $this->db->bind(':Estrato' , $RecibeDatos['ESTRATO']);
            $this->db->bind(':Habitaciones' , $RecibeDatos['HABITACIONES']);
            $this->db->bind(':Banos' , $RecibeDatos['BANIO']);
            $this->db->bind(':Garaje' , $RecibeDatos['GARAJE']);
            $this->db->bind(':Jardin' , $RecibeDatos['JARDIN']);
            $this->db->bind(':Patio' , $RecibeDatos['PATIO']);
            $this->db->bind(':Metros' , $RecibeDatos['METROS']);
            $this->db->bind(':Gas' , $RecibeDatos['GAS']);
            $this->db->bind(':Internet' , $RecibeDatos['INTERNET']);
            $this->db->bind(':Cable_TV' , $RecibeDatos['CABLE_TV']);
            $this->db->bind(':Precio' , $RecibeDatos['PRECIO']);
            $this->db->bind(':Fecha_publicacion' , $Fecha_publicacion);
            $this->db->bind(':Fecha_caducacion' , $Fecha_caducacion);

            //Se ejecuta la inserción de los datos en la tabla
            if($this->db->execute()){
                // echo "Se realizó la inserción en la BD";
                return true;
            }
            else{
                // echo "No se realizó la inserción en la BD";
                return true;
            }
        }      

        public function consultarID_Inmueble($Aleatorio){
            $this->db->Consulta("SELECT ID_Inmueble FROM inmueble WHERE aleatorio = '$Aleatorio'");
            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registros();
            return $resultados;
        }
        
        public function insertarFotografias($ID_Afiliado, $ID_Inmueble, $archivonombre, $tipo, $tamanio){
            print_r($ID_Afiliado) . "<br>";
            print_r($ID_Inmueble) . "<br>";
            print_r($archivonombre) . "<br>";
            print_r($tipo) . "<br>";
            print_r($tamanio) . "<br>";
            //Se inserta en la tabla imagenes as fotografias recibidos desde Publicacion_C/recibeRegistro
            // $this->db->Insertar("INSERT INTO imagenes(ID_Afiliado, ID_Inmueble, nombre_img, tipoArchivo, tamanoArchivo, fecha)VALUES (:ID_Afiliado, :ID_Inmueble, :Nombre_img, :TipoArchivo, :TamanoArchivo, NOW())");
            
            // //Se vinculan los valores de las sentencias preparadas
            // $this->db->bind(':ID_Afiliado' , $ID_Afiliado);
            // $this->db->bind(':ID_Inmueble' , $ID_Inmueble);
            // $this->db->bind(':Nombre_img' , $archivonombre);
            // $this->db->bind(':TipoArchivo' , $tipo);
            // $this->db->bind(':TamanoArchivo' , $tamanio);
            
            // //Se ejecuta la inserción de los datos en la tabla
            // if($this->db->execute()){
            //     // echo "Se realizó la inserción en la BD";
            //     return true;
            // }
            // else{
            //     // echo "No se realizó la inserción en la BD";
            //     return true;
            // }
        }









        // public function insertarFotosInmueble($ID_Afiliado){
        //     $this->db->consultarImagenesInmuebles("SELECT imagenes.nombre_img AS foto, ID_Imagen FROM imagenes INNER JOIN afiliado ON imagenes.ID_Afiliado=afiliado.ID_Afiliado WHERE afiliado.ID_Afiliado ='$ID_Afiliado'");
        // } 

        public function consultarUsuario($Cedula){         
            // //Se consulta en la tabla afiliado el ID_Afiliado del afiliado que se esta registrando
            $this->db->Consulta("SELECT ID_Afiliado FROM afiliado WHERE cedula ='$Cedula'");

            //registros() es un metodo de la clase Conexion_BD
            $resultados =  $this->db->registro();
            return $resultados;
        }

        public function insertarClaveUsuario($Datos, $ClaveCifrada){
            $this->db->Insertar("INSERT INTO usuario(ID_Afiliado, clave) VALUES(:ID_Afiliado, '$ClaveCifrada')");

            //Se traen los datos obtenidos en la consulta consultarUsuario
            foreach($Datos["ID_Afiliado"] as $ID_Afiliado){
                $NombreAfiliado = $ID_Afiliado -> ID_Afiliado;
                  echo "ID_Afiliad: " . $NombreAfiliado  . "<br>"; 
            } 

            //Se vinculan los valores de las sentencias preparadas
            $this->db->bind(':ID_Afiliado' , $ID_Afiliado);
            
            //Se ejecuta la inserción de los datos en la tabla
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }