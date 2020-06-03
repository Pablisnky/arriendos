<?php
    class RecuperarClave_C extends Controlador{
        public function __construct(){
            $this->obtenerRegistros = $this->modelo("RecuperarClave_M");
        }
        
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index($Correo){
            //Recibe el correo desde Login_C/RecuperarClave
            $Datos=[
                $Correo, 
            ];

            //Se carga la vista donde el usuario introduce el código de verificación
            $this->vista("paginas/RecuperarClave_V", $Datos); 
        }

        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function verificaCodigos(){
            //se recibe desde recibeCodigo.php
            $CodigoUsuario= $_POST["ingresar"];
            $CorreoUsuario= $_POST["correo"];
        
            // EL numero aleatorio es de tipo string se debe cambiar a entero
            gettype($CodigoUsuario) . "<br>";
            settype($CodigoUsuario,"integer");
            gettype($CodigoUsuario) . "<br>";
        
            echo "Código usuario= " . $CodigoUsuario . "<br>";
            echo "Córreo usuario= " . $CorreoUsuario . "<br>";

            //Se CONSULTA el código enviado por el usuario con el código que hay en la BD
            $Aleatorio= $this->obtenerRegistros->consultarCodigo($CodigoUsuario, $CorreoUsuario);
            // print_r($Aleatorio);
            // echo $Aleatorio;
            // echo "<br>";         

            //Si el codigo que envia el usuario es diferente al del sistema       
            if($Aleatorio == 0){
                echo "El código recibido no coincide con el que le hemos enviado"; 
                exit();                
            }
            else{//Si los códigos coinciden se permite hacer el cambio de contraseña
                //Se ACTUALIZA en la BD que el codigo ha sido usado y verificado
                $this->obtenerRegistros->actualizarEst_Cod($CodigoUsuario);
            
                //Se redirecciona, la función redireccionar se encuentra en url_helper.php
                redireccionar("/CambiarClave_C/index/$CorreoUsuario");                 
            }
        }
    }