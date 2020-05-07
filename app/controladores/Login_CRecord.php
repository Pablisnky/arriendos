<?php
    session_start();

    class Login_CRecord extends Controlador{
        public function __construct(){
            echo "Se ha cargado el controlador \"Login_CRecord\"";
            echo "<br>";
        }

        // //Siempre cargara el metodo por defecto correspondiente a este controlador sino se pasa un metodo especifico
        public function index(){
        //     //Se verifica en BD el usuario y contraseña
        //     // $usuarios= $this->usuarioRecordado->obtenerAfiliados();
        //     // $Datos=[
        //     //     "usuarios"=>$usuarios,
        //     // ];

             echo "Carga la vista por defecto correspondiente a este controlador: login_V"  . "<br>";
        //     $this->vista("paginas/login_V");
        

        // *********************************************************************************************

            $Clave= $_POST["clave_Arr"];
            $Correo= $_POST["correo_Arr"];
            // echo "La clave es: " . $Clave . "<br>";
            // echo "El correo es: " . $Correo . "<br>";
            
            //Se accede al servidor de base de datos
            //Se solicita informacion a la BD, se llama al metodo modelo de la clase Controlador, que devuelve una instacia del objeto 
            $this->usuarioM = $this->modelo("Login_M");
            
            //Se obtienen el usuario registrados en el sistema con el correo dado como argumento
            $usuarios= $this->usuarioM->obtenerAfiliados($Correo);
            $Datos=[
                "usuarios"=>$usuarios,
            ];

            // print_r($usuarios);
            // echo "<br>";
            
            foreach($Datos["usuarios"] as  $usuario){
                $ID_Afiliado= $usuario->ID_Afiliado;
                // echo "ID_Afiliado: " . $ID_Afiliado  . "<br>"; 
            } 
    
            //Verifica si los campo que se van a recibir estan vacios
            if(empty($_POST["correo_Arr"]) || empty($_POST["clave_Arr"])){
        
                 echo"<script>alert('Debe Llenar todos los campos vacios');window.location.href='../vista/principal.php';</script>";
            }
            else{
                //sino estan vacios se sanitizan y se reciben
                $Correo = filter_input( INPUT_POST, 'correo_Arr', FILTER_SANITIZE_STRING);
                $Clave = filter_input(INPUT_POST, 'clave_Arr', FILTER_SANITIZE_STRING);
                // echo "Correo recibido: " .  $Correo . "<br>";
                // echo "Clave recibida: " . $Clave . "<br>";
        
                //Se solicita informacion a la BD, se llama al metodo modelo de la clase Controlador, que devuelve una instacia del objeto 
                $this->usuarioM = $this->modelo("Login_M");

                //Se consulta la contraseña enviada, que sea igual a la contraseña de la BD
                $usuarios_2= $this->usuarioM->verificarContraseña($ID_Afiliado);
                $Datos_2=[
                    "usuarios_2"=>$usuarios_2,
                ];

                print_r($usuarios_2);
                echo "<br>";

                foreach($Datos_2["usuarios_2"] as $usuario_2){
                    echo "Clave Usuario cifrada= " . $usuario_2->clave . "<br>"; 
                    echo "Clave Usuario descifrada= " .  password_verify($Clave,$usuario_2->clave) . "<br>";
                } 
        
                //se descifra la contraseña con un algoritmo de desencriptado.
                if($Correo == $usuario->correo AND $Clave == password_verify($Clave,$usuario_2->clave)){
                    //se crea una sesion que almacena el ID_ID_Afiliado exigida en todas las páginas de su cuenta
            
                    $_SESSION["ID_Afiliado"]= $ID_Afiliado;//se crea una $_SESSION llamada ID_ID_Afiliado que almacena el ID del ID_ID_Afiliado para  forzar a que entre a su cuenta solo despues de logearse.
                    $_SESSION["Nombre"] = $usuario->nombre;//se crea una $_SESSION llamada Nombre que almacena el Nombre del ID_ID_Afiliado
                    // echo $_SESSION["Nombre"];
            
                    $ID_Afiliado = $_SESSION["ID_Afiliado"];
                    echo $_SESSION["ID_Afiliado"] . "<br>";

                    //Se da acceso y se redirije a la pagina entrada.php
                    header("location:" . RUTA_URL . "/Entrada_C");                            
                }
                else{  ?>
                        <script>
                            alert("USUARIO y CONTRASEÑA no son correctas");
                            history.back();
                        </script>
                        <?php 
                }    
            }
        }  
    }
?>    