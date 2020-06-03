<?php
    class RegistrarPago_C extends Controlador{  
        public $AleatorioPago;

        public function __construct(){
            //$this->articuloModelo= $this->modelo("Articulo");
            // echo "Se ha cargado el controlador \"RegistrarPago_C\"" . "<br>";
        }
        
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){
            //echo "Carga la vista publicacion_V" . "<br>";
            $this->vista("paginas/registrar_Pago_V");
        }
        
        //Se recibe por enlace <a> el tipo de negociacion desde la vista publicacion_V.php
        public function negociacion($Negociacion){
            $Datos= $Negociacion;
            $this->vista("paginas/registrar_Pago_V", $Datos);
        }

        //Inserta el numero de consignacion en la BD para ser verificado
        public function insertarPago(){
            //Se recibe campos de formulario desde registrar_Pago_V.php
            $Negociacion = $_POST["negociacion"];
            $CodigoPago = $_POST["codigo_P"];
            // echo "Negociacion: " . $Negociacion . "<br>";
            // echo "Nº Consignación: " . $CodigoPago . "<br>";
            
            //Se genera numero aleatorio
            mt_srand (time());
            $this->AleatorioPago = mt_rand(1000000,999999999);
            // echo "Aleatorio= " . $this->AleatorioPago . "<br>";

            // $Datos=array($Negociacion, $CodigoPago
            $Datos = [
                $Negociacion, 
                $CodigoPago,
                $this->AleatorioPago 
            ];
            // echo gettype($Datos) . "<br>";
            // var_dump($Datos);
            // echo "<br>";
            
            // //Se inserta la referencia de pago; el aleatorio es pedido en recibe_Confi_Habitacon.php para consultar si es una promoción
            // $Insertar= "INSERT INTO pagos(ID_Afiliado, referenciaPago, aleatorioPago, fecha_pago) VALUES('$ID_Afiliado','$CodigoPago','$AleatorioPago', NOW())"; 
            // mysqli_query($conexion, $Insertar) or DIE ('Falló recepcion de referencia de pago en la base de datos');  

            // //Se envia a correo la notificación de pago         
            // $email_to = "pcabeza7@gmail.com";
            // $email_subject = "Publican inmueble";  
            // $email_message = "Han realizado consignación número: " . $CodigoPago;
    
            // 'X-Mailer: PHP/' . phpversion();
        
            // @mail($email_to, $email_subject, $email_message);
            
            //echo "Carga la vista registrar_Pago_V" . "<br>";
            $this->vista("paginas/registrar_Pago_V", $Datos);
        } 
        
        //Se recibe en $Datos el tipo de negociacion y el Nº de consignacion desde la vista registrar_Pago_V.php
        public function seleccionInmueble($Datos){
            // echo "Carga la vista publicacion_2_V" . "<br>";
            // echo "tipo de inmueble y Nº Consignacion: " . $Datos . "<br>";
            
            //$DatosRecibidos se convierte nuevamente a un array 
            $array_para_recibir_via_url = stripslashes($Datos);
            $array_para_recibir_via_url = urldecode($array_para_recibir_via_url );
            $matriz_completa = unserialize($array_para_recibir_via_url);
            // var_dump($matriz_completa);
            // echo  "<br>";
            $Datos = $matriz_completa;

            $this->vista("paginas/publicacion_2_V", $Datos);
        }
    }
?>