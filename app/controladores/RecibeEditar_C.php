<?php
    class RecibeEditar_C extends Controlador{
        public function __construct(){            
            //Se accede al servidor de base de datos
            //Se instancia un objeto correspondiente que se comunica con la BD 
            $this->obtenerRegistros = $this->modelo("Registro_M");           
        }
        
        //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
        public function index(){          
            //Captura todos los campos del formulario, se recibe desde editarCasa_V.php
            if($_SERVER["REQUEST_METHOD"] == "POST"){//si son enviados por POST, entra aqui
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
                
                //SECCION GALERIA DE FOTOFRAGIAS
                foreach($_FILES["imagen_inmueble"]['tmp_name'] as $key => $tmp_name){
                    
                    // Se consulta en la BD el ID_Inmueble recien ingresado para vincular sus imagenes
                    // $Consulta=  $conexion->query("SELECT ID_Inmueble FROM inmueble WHERE aleatorio = '$AleatorioPago'") or die($conexion->error);
                    // $registros= mysqli_fetch_array($Consulta);
                    // $ID_Inmueble = $registros['ID_Inmueble'];
                    // echo "ID_Inmueble: " . $ID_Inmueble . "<br>";
                
                    // Nombres de archivos de temporales
                    $archivonombre = $_FILES["imagen_inmueble"]["name"][$key];
                    $tmp_name = $_FILES["imagen_inmueble"]["tmp_name"][$key];
                    $tipo = $_FILES['imagen_inmueble']['type'][$key];
                    $tamanio = $_FILES['imagen_inmueble']['size'][$key];
                    
                    var_dump($archivonombre);
                    echo "<br>";
                    var_dump($tmp_name);
                    echo "<br>";
                    var_dump($tipo);
                    echo "<br>";
                    var_dump($tamanio);
                    echo "<br>";
    
                    //Declaramos el nombre de la carpeta que guardara los archivos
                    // En local
                    $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/proyectos/Arriendo/Arriendo_MVC/public/images/';

                    // En remoto
                    // $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/images/';
                    // if(!file_exists($carpeta)){
                    // mkdir($carpeta, 0777) or die("Hubo un error al crear el directorio de almacenamiento");
                    // }
    
                    // $dir=opendir($carpeta);
                    $target_path = $carpeta . $archivonombre; //indicamos la ruta de destino de los archivos
                    echo $target_path . "<br>"; 

                    if(move_uploaded_file($tmp_name, $target_path)){
                        echo "El archivo $archivonombre se ha cargado de forma    correcta" . "<br>";
                    }
                    else{
                        echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo" . "<br>";
                    }
                    // closedir($dir); //Cerramos la conexion con la carpeta destino
    
                    // echo "<br>";                    
                    // echo "<br>";
                    //Se introducen las imagenes en la base de datos
                    // $Insertar = "INSERT INTO imagenes(ID_Afiliado,ID_Inmueble,nombre_img,tipoArchivo,tamanoArchivo,fecha)VALUES('$ID_Afiliado','$ID_Inmueble','$archivonombre','$tipo','$tamaño',NOW())";
                    // mysqli_query($conexion, $Insertar);
                                   
                    // $Actualizar_2= "UPDATE imagenes SET ID_Afiliado = '$ID_Afiliado', ID_Inmueble = '$ID_Inmueble', nombre = '$Inmueble_nombre', tipoArchivo = '$Inmueble_tipo', tamanoArchivo = '$Inmueble_tamaño'";
                        // }
                        // else{
                        //     //si no cumple con el formato
                        //     echo "Solo puede cargar imagenes con formato jpg, jpeg, png o gif";
                        // }
                    // } 
                    // else{
                    //     //si existe la variable pero se pasa del tamaño permitido
                    //     if($Inmueble_nombre == !NULL) echo "La imagen es demasiado grande"; 
                    // }
                }
            }
            
            print_r($RecibeDatos);

            //Carga la vista 
            // $this->vista("paginas/registro_V");
        }
   
        public function edicionCasa(){  
            //  echo "<br>";

            //Se insertan los datos en la BD
            // $this->obtenerRegistros->insertarUsuario($RecibeDatos);

            //se cifran la contraseña con un algoritmo de encriptación
            // $ClaveCifrada= password_hash($RecibeDatos["Clave"], PASSWORD_DEFAULT);
            // echo "La clave cifrada: " . $ClaveCifrada . "<br>";

            //Se consulta el ID_Afiliado del participante registrados en el sistema con el Cedula dado como argumento
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