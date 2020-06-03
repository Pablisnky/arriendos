<?php
    class CambiarClave_C extends Controlador{
        public function __construct(){
            $this->ConsultaCambiarClave_M = $this->modelo("CambiarClave_M");
        }
        
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index($CorreoUsuario){
            //Recibe el correo desde RecuperarClave_C
            $Datos=[
                $CorreoUsuario, 
            ];

            //Se carga la vista donde el usuario introduce el código de verificación
            $this->vista("paginas/CambiarClave_V", $Datos); 
        }

        public function recibeCodigos(){
            $ClaveNueva=$_POST["clave"];
            $RepiteClaveNueva= $_POST["repiteClave"];
            $Correo = strtolower($_POST["correo"]);
            
            echo "Clave nueva= " . $ClaveNueva . "<br>";
            echo "Repite clave nueva= " . $RepiteClaveNueva . "<br>";
            echo "Correo= " . $Correo . "<br>";

            //Se verifica que las claves recibidas sean iguales
            if($ClaveNueva == $RepiteClaveNueva){
                //se cifra la contraseña con un algoritmo de encriptación
                $ClaveCifrada= password_hash($ClaveNueva, PASSWORD_DEFAULT);
                echo "Clave cifrada= " . $ClaveCifrada . "<br>";
        
                //Se CONSULTA el ID_Participante correspondiente al correo
                $Usuario= $this->ConsultaCambiarClave_M->consultarID_Afiliado($Correo);
                $Datos=[
                    "usuarios"=>$Usuario,
                ];
    
                // print_r($usuarios);
                // echo "<br>";
                
                foreach($Datos["usuarios"] as  $usuario){
                    $ID_Afiliado= $usuario->ID_Afiliado;
                    // echo "ID_Afiliado: " . $ID_Afiliado  . "<br>"; 
                }     
       
                //Se ACTUALIZA en la base de datos la clave del usuario
                $this->ConsultaCambiarClave_M->actualizarClave($ID_Afiliado, $ClaveCifrada);
        
                //Se destruyen las cookies que recuerdan la contraseña antigua, creadas en validarSesion.php
                // echo "Cookie_usuario= " . $_COOKIE["id_usuario"] . "<br>";
                // echo "Cookie_clave= " . $_COOKIE["clave"] . "<br>";
        
                setcookie("id_usuario",'',time()-100);
                setcookie("clave",'',time()-100);
        
                
            //Se carga la vista confirmando el cámbio de clave exitoso
            $this->vista("paginas/CambiarClave_V"); 
            }
            else{
                echo "Las contraseñas no coinciden";
            }
        }
    }   ?>   
