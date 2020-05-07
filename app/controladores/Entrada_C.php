<?php
    session_start();          
    if(isset($_SESSION["ID_Afiliado"])){//sino esta declarada la variable $_SESSION devuelve a ingresar.php, con esto se garantiza que se hizo login    

        class Entrada_C extends Controlador{
            public function __construct(){
                //Se accede al servidor de base de datos
                //Se instancia el objeto correspondiente al controlador invocado, que se encargara de abrir la comunicacion con la BD 
                $this->nombre_M = $this->modelo("Entrada_M");
            }

            //Siempre cargara el metodo por defecto sino se pasa un metodo especifico
            public function index(){
                //sesion creada en Login_C.php
                $ID_Afiliado = $_SESSION["ID_Afiliado"];

                //Se hace una petición al modelo para consultar el nombre del usuario
                $Nombre= $this->nombre_M->consultarUsuario($ID_Afiliado);

                //Se hace una petición al modelo para consultar los inmuebles publicados por el usuario
                $InmueblesPub= $this->nombre_M->consultarInmueblesPublicados($ID_Afiliado);
                // var_dump($InmueblesPub);
                // $InmueblesPub= array(2,3,4,5,6);

                // Debido a que se va a enviar un aray como parametro
                // $InmueblesPub_2= serialize($ID_Inmueble);
                // $InmueblesPub_2= urlencode($InmueblesPub_2);
                // echo $InmueblesPub_2;
               
                $ID_Inmueble=37;                 
                //Se hace una petición al modelo para consultar las fotos de un inmueble en particular
                $FotoInmueble= $this->nombre_M->consultarFotoInmuebles($ID_Inmueble);  
                  
                $Datos=[
                    "Nombre" => $Nombre,
                    "inmueblesPubli" => $InmueblesPub,
                    "inmueblesFoto" => $FotoInmueble
                ];
        
                // Se consulta el ID_Inmueble 
                // print_r($Datos["inmueblesPubli"]["ID_Inmueble"]);

                //Carga la vista
                $this->vista("paginas/entrada_V", $Datos);
            }
            
            //Metodo llamado desde entrada_V, se recibe el ID_Inmueble 
            public function editarRegistro($ID_Inmueble){ 
                //sesion creada en Login_C.php
                $ID_Afiliado = $_SESSION["ID_Afiliado"];

                //Se hace una petición al modelo para consultar el nombre del usuario
                $NombreAfiliado= $this->nombre_M->consultarUsuario($ID_Afiliado);
                
                // //Se hace una petición al modelo para consultar los datos del inmueble
                $DatosInmueble= $this->nombre_M->editarInmueble($ID_Inmueble); 
                
                //Se hace una petición al modelo para consultar las fotos de un inmueble en particular
                $FotografiasInm= $this->nombre_M->consultarFotoInmuebles($ID_Inmueble);  
                
                //Se hace una petición al modelo para consultar el nombre del usuario
                // $Nombre= $this->nombre_M->consultarUsuario($ID_Afiliado);
                
                $Datos=[
                    "Nombre" => $NombreAfiliado,
                    "datosInmueble" => $DatosInmueble,
                    "fotografias" => $FotografiasInm
                ];     
                
                // print_r($Datos["datosInmueble"]);
                // print_r($Datos["fotografias"]);
                
                //Carga la vista
                $this->vista("paginas/editarCasa_V",$Datos);
            }

            //Metodo llamado desde entrada_V, se recibe el ID_Inmueble 
            public function eliminarRegistro($ID_Inmueble){  
            
                //Se hace una petición al modelo para eliminar los datos del inmueble
                $this->nombre_M->eliminarInmueble($ID_Inmueble);

                //Se hace una petición al modelo para eliminar las fotografias del inmueble
                $this->nombre_M->eliminarFotografias($ID_Inmueble);

                //     // No se estan eliminando los archivos de la carpeta images
                //     // Se elimina de la carpeta images
                //     $Consulta="SELECT nombre_img FROM imagenes WHERE ID_Immueble= '$ID_Inmueble'";
                //     $Recordset= mysqli_query($conexion, $Consulta);
                //     while($Eliminar= mysqli_fetch_array($Recordset)){
                //         $NombreImagen = $Eliminar["nombre_img"];
                //         echo $NombreImagen;
                //         unlink("../images/" . $NombreImagen); 
                //     }
            
                header("location:../Entrada_C");       
            }
        }
    }
    else{
        header("location:Login_C");
    }
?>    