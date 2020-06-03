<?php
session_start(); 
    class RecibeEditar_C extends Controlador{
        public function __construct(){            
            //Se accede al servidor de base de datos
            //Se instancia un objeto correspondiente que se comunica con la BD 
            $this->ConsultaRecibeEditar_M = $this->modelo("RecibeEditar_M");            
        }
        
        //Captura todos los campos del formulario, se recibe desde editarCasa_V.php
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){          
            if($_SERVER["REQUEST_METHOD"] == "POST"){//si son enviados por POST, entra aqui
                $ID_Inmueble = $_POST["ID_Inmueble"];
                // echo "ID_Inmueble: " . $ID_Inmueble;
                $RecibeDatos = [
                    'DEPARTAMENTO' => $_POST["departamento"], 
                    'MUNICIPIO' => $_POST["municipio_Col"],
                    'DIRECCION' => $_POST["direccion"],
                    'BARRIO' => $_POST["barrio"],
                    'ESTRATO' => $_POST["estrato"],
                    'HABITACIONES' => $_POST["habitaciones"],
                    'BANIO' => $_POST["bano"],
                    'GARAJE' => $_POST["garaje"],
                    'JARDIN' => $_POST["jardin"],
                    'PATIO' => $_POST["patio"],
                    'METROS' => $_POST["metros"],
                    'GAS' => $_POST["gas"],
                    'INTERNET' => $_POST["internet"],
                    'CABLE_TV' => $_POST["cable_TV"],
                    'PRECIO' => $_POST["precio"],
                ];
                
                //Se ACTUALIZAN los datos en la BD
                $this->ConsultaRecibeEditar_M->actualizarInmueble($ID_Inmueble, $RecibeDatos);
                
                // //Se hace una petición al modelo para consultar los datos del inmueble
                // $DatosInm= $this->nombre_M->consultarInmueble($ID_Inmueble); 
                
                // //sesion creada en Login_C.php
                // $ID_Afiliado = $_SESSION["ID_Afiliado"];

                // //Se hace una petición al modelo para consultar el nombre del usuario
                // $NombreAfiliado= $this->nombre_M->consultarUsuario($ID_Afiliado);
            
                // $Datos=[
                //     "Nombre" => $NombreAfiliado,
                //     "datosInmueble" => $DatosInm,
                // ]; 
                
                //SECCION GALERIA DE FOTOFRAGIAS
                foreach($_FILES["imagen_inmueble"]['tmp_name'] as $key => $tmp_name){                
                    // Nombres de archivos de temporales
                    $Archivonombre = $_FILES["imagen_inmueble"]["name"][$key];
                    $tmp_name = $_FILES["imagen_inmueble"]["tmp_name"][$key];
                    $Tipo = $_FILES['imagen_inmueble']['type'][$key];
                    $Tamanio = $_FILES['imagen_inmueble']['size'][$key];
                       
                    //Declaramos el nombre de la carpeta que guardara los archivos
                    // En local
                    $Carpeta = $_SERVER['DOCUMENT_ROOT'] . '/proyectos/Arriendo/Arriendo_MVC/public/images/';

                    // En remoto
                    // $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/images/';

                    $Target_path = $Carpeta . $Archivonombre; //indicamos la ruta de destino de los archivos
                    echo $Target_path . "<br>"; 

                    if(move_uploaded_file($tmp_name, $Target_path)){
                        echo "El archivo $Archivonombre se ha cargado de forma    correcta" . "<br>";
                    }
                    else{
                        echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo" . "<br>";
                    }
                    // closedir($dir); //Cerramos la conexion con la carpeta destino
                        
                    //Se ACTUALIZAN las fotografias en la BD, solo si se ha presionado el boton de buscar fotografia
                    if(($_FILES['imagen_inmueble']['name'])[$key] != ""){
                        $this->ConsultaRecibeEditar_M->actualizarImagenes($ID_Inmueble, $Archivonombre, $Tipo, $Tamanio);
                    }
                }                        
                //Redirecciona 
                //La función redireccionar se encuantra en url_helper.php
                redireccionar("/Entrada_C/");
            }
            
        }
   
        public function edicionCasa(){  
            //  echo "<br>";

            //Se INSERTAN los datos en la BD
            // $this->obtenerRegistros->insertarUsuario($RecibeDatos);

            //se cifran la contraseña con un algoritmo de encriptación
            // $ClaveCifrada= password_hash($RecibeDatos["Clave"], PASSWORD_DEFAULT);
            // echo "La clave cifrada: " . $ClaveCifrada . "<br>";

            //Se CONSULTA el ID_Afiliado del participante registrados en el sistema con el Cedula dado como argumento
            // $ID_Afiliado= $this->obtenerRegistros->consultarUsuario($RecibeDatos['Cedula']);
            // $Datos=[
            //     "ID_Afiliado" => $ID_Afiliado,
            // ];
            // print_r($ID_Afiliado);
            // echo "<br>";

            //Se inserta el ID_Afiliado en la tabla usuario para almacenar la contraseña.
            // $this->obtenerRegistros->insertarClaveUsuario($Datos, $ClaveCifrada);

            //Redirecciona 
            //La función redireccionar se encuantra en url_helper.php
            // redireccionar("/Login_C/");
        }
    }
?>    