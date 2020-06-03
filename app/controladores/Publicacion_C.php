<?php
    class Publicacion_C extends Controlador{
        public function __construct(){
            //Se accede al servidor de base de datos
            //Se instancia un objeto correspondiente que se comunica con la BD 
            $this->ConsultaPublicacion_M = $this->modelo("Publicacion_M"); 
        }

        //Siempre cargara el metodo index sino se pasa un metodo especifico
        public function index(){
            $this->vista("paginas/publicacion_V");
        }
        
        public function recibeRegistro(){            
            //Captura todos los campos del formulario, se recibe desde publicacion_casa3_V.php
            if($_SERVER["REQUEST_METHOD"] == "POST"){//si son enviados por POST, entra aqui
                $RecibeDatos = [
                    'ID_AFILIADO' => $_POST["ID_Afiliado"],
                    'ALEATORIO' => $_POST["aleatorioPago"],
                    'TIPO_NEGOCIACION' => $_POST["tipoNegociación"],
                    'TIPO_INMUEBLE' => $_POST["inmueble"],
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
                $Aleatorio = $RecibeDatos['ALEATORIO'];
                $ID_Afiliado = $RecibeDatos["ID_AFILIADO"];
                print_r($RecibeDatos);
                echo "<br>";
                echo "Numero aleatorio: " . $Aleatorio . "<br>";
                echo "ID_Afiliado: " . $ID_Afiliado . "<br>";
                echo "<br>";

                // SECCION GALERIA DE FOTOFRAGIAS
                foreach($_FILES["imagen_inmueble"]['tmp_name'] as $key => $tmp_name){                
                    // Nombres de archivos de temporales
                    $archivonombre = $_FILES["imagen_inmueble"]["name"][$key];
                    $tmp_name = $_FILES["imagen_inmueble"]["tmp_name"][$key];
                    $tipo = $_FILES['imagen_inmueble']['type'][$key];
                    $tamanio = $_FILES['imagen_inmueble']['size'][$key];
                    
                    echo $archivonombre;
                    echo "<br>";
                    echo $tmp_name;
                    echo "<br>";
                    echo $tipo;
                    echo "<br>";
                    echo $tamanio;
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
                    // echo $target_path . "<br>"; 

                    if(move_uploaded_file($tmp_name, $target_path)){
                        echo "El archivo $archivonombre se ha cargado de forma    correcta" . "<br><br>";
                    }
                    else{
                        echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo" . "<br>";
                    }
                    // closedir($dir); //Cerramos la conexion con la carpeta destino
                    
                    //Se insertan los datos del inmueble en la BD
                    $this->ConsultaPublicacion_M->insertarInmueble($RecibeDatos); 
                    
                    //Se CONSULTA en la BD el ID_Inmueble recien ingresado para vincular sus imagenes
                    $ID_Inmueble= $this->ConsultaPublicacion_M->consultarID_Inmueble($Aleatorio);
                    // print_r($ID_Inmueble);

                    //Se INSERTAN las fotografias del inmueble en la BD
                    $this->ConsultaPublicacion_M->insertarFotografias($ID_Afiliado, $ID_Inmueble, $archivonombre, $tipo, $tamanio);
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
exit();
            //Redirecciona 
            //La función redireccionar se encuantra en url_helper.php
            redireccionar("/Entrada_C/");
        }
            
        public function negociacion(){
            // echo "Carga la vista publicacion_2_V" . "<br>";
            $Datos =[
                "negociacion" => "arrendar"
            ] ;
            $this->vista("paginas/publicacion_2_V", $Datos);
        }
         
        //Recibe el tipo de inmueble, el array datos que contiene el Nº de consignacion y la negociacion desde la vista publicacion_2_V.php
        public function inmueble($Inmueble){
            // echo "Carga la vista publicacion_casa3_V" . "<br>";
            // echo $Inmueble . "<br>";

            //En $Inmueble se tiene un string y un array, se separan
            $Parametros = explode(',',$Inmueble);

            //$Parametros se convierte nuevamente a un array 
            $array_para_recibir_via_url = stripslashes($Parametros[1]);
            $array_para_recibir_via_url = urldecode($array_para_recibir_via_url );
            $matriz_completa = unserialize($array_para_recibir_via_url);
            // var_dump($matriz_completa);
            // echo "<br>";
            
            $TipoInmueble= $Parametros[0];
            // echo "Tipo de inmueble: " . $TipoInmueble . "<br>";
            // echo "Tipo de negociacion: " . $matriz_completa[0] . "<br>";            
            // echo "Nº consignacion: " . $matriz_completa[1] . "<br>";         
            // echo "Aleatorio: " . $matriz_completa[2] . "<br>";
            
            $Datos=array($TipoInmueble, $matriz_completa[0] , $matriz_completa[1], $matriz_completa[2]);

            switch($Parametros[0]){
                case "Habitacion":
                        // Carga la vista que describe habitaciones
                        // $this->vista("paginas/descripcion_Habitacion_V", $Datos);
                break;
                case "Casas":
                    // Carga la vista que describe casas
                    $this->vista("paginas/publicacion_casa3_V", $Datos);
                break;
                default:
                echo "No se encuentra el inmueble" ;
            }
        }
    }
?>    