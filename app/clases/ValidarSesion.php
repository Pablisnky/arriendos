<?php
    // session_start();

    // $Recordar= isset($_POST["recordar"]) == 1 ? $_POST["recordar"] : "No desea recordar";
    // $Clave= $_POST["clave_Arr"];
    // $Correo= $_POST["correo_Arr"];
    // echo "La clave es: " . $Clave . "<br>";
    // echo "El correo es: " . $Correo . "<br>";
    // echo "Desea recordar: " . $Recordar . "<br>";
    
    // //Se accede al servidor de base de datos
    // include("../conexion/Conexion_BD.php");
    
    // //Se consulta el ID_Usuario segun el correo recibido
    // $Consulta="SELECT * FROM afiliado WHERE correo='$Correo' ";
    // $Recordset = mysqli_query($conexion, $Consulta);
    // $Campo= mysqli_fetch_array($Recordset);
    // $ID_Afiliado = $Campo["ID_Afiliado"];
    // $Nombre = $Campo["nombre"];
    // echo "ID_Afiliado= " . $ID_Afiliado . "<br>"; 
    // echo "Nombre= " . $Nombre . "<br>"; 

    // if(isset($_POST["recordar"]) && $_POST["recordar"] == 1){//si pidió memorizar el usuario, se recibe desde principal.php   
    //     //1) Se crea una marca aleatoria en el registro de este usuario
    //     //Se alimenta el generador de aleatorios
    //     mt_srand (time());
    //     //Se genera un número aleatorio
    //     $Aleatorio = mt_rand(1000000,999999999);
    //     echo "Nº aleatorio= " . $Aleatorio . "<br>"; 

    //     //3) Se introduce una cookie en el ordenador del usuario con el identificador del usuario y la cookie aleatoria porque el usuario marca la casilla de recordar
    //     setcookie("id_usuario", $ID_Afiliado, time()+365*24*60*60, "/");
    //     setcookie("clave", $Clave, time()+365*24*60*60, "/");
    //     echo "Se han creado las Cookies en validarSesion" . "<br>";

    //     echo "La cookie ID_Usuario = " . $_COOKIE["id_usuario"] . "<br>";
    //     echo "La cookie clave = " . $_COOKIE["clave"] . "<br>"; 
        
    //     //4) Se introduce la marca aleatoria en el registro correspondiente al usuario
    //     $Actualizar="UPDATE afiliado SET aleatorio='$Aleatorio' WHERE ID_Afiliado='$ID_Afiliado'";
    //     mysqli_query($conexion, $Actualizar);
    // }

    // //Verifica si los campo que se van a recibir desde principal.php estan vacios
    // if(empty($_POST["correo_Arr"]) || empty($_POST["clave_Arr"])){

    //     echo"<script>alert('Debe Llenar todos los campos vacios');window.location.href='../vista/principal.php';</script>";
    // }
    // else{
    //     //sino estan vacios se sanitizan y se reciben
    //     $Correo = filter_input( INPUT_POST, 'correo_Arr', FILTER_SANITIZE_STRING);
    //     $Clave = filter_input(INPUT_POST, 'clave_Arr', FILTER_SANITIZE_STRING);
    //     echo "Correo recibido: " .  $Correo . "<br>";
    //     echo "Clave recibida: " . $Clave . "<br>";

    //     //Se verifica que la contraseña enviada sea igual a la contraseña de la BD        
    //     $Consulta_2="SELECT * FROM usuario WHERE ID_Afiliado='$ID_Afiliado'";
    //     $Recordset_2 = mysqli_query($conexion, $Consulta_2);
    //     $Participante= mysqli_fetch_array($Recordset_2);
    //     echo "Clave Usuario cifrada= " . $Participante["clave"] . "<br>";
    //     echo "Clave Usuario descifrada= " . password_verify($Clave, $Participante["clave"]) . "<br>";

    //     //se descifra la contraseña con un algoritmo de desencriptado.
    //     if($Correo == $Campo["correo"] AND $Clave == password_verify($Clave, $Participante["clave"])){
    //         //se crea una sesion que almacena el ID_ID_Afiliado exigida en todas las páginas de su cuenta

    //         $_SESSION["ID_Afiliado"]= $Participante["ID_Afiliado"];//se crea una $_SESSION llamada ID_ID_Afiliado que almacena el ID del ID_ID_Afiliado para  forzar a que entre a su cuenta solo despues de logearse.
    //         $_SESSION["Nombre"] = $Nombre;//se crea una $_SESSION llamada Nombre que almacena el Nombre del ID_ID_Afiliado
    //         // echo $_SESSION["Nombre"];

    //         $ID_Afiliado = $_SESSION["ID_Afiliado"];
    //         echo $ID_Afiliado . "<br>";
                  
    //         // //Si se recibe el ID_PU se guarda en los registros del ID_Afiliado
    //         // if(!empty($_POST["reto"])){
    //         //     //Sesion creada en core.php si el participante acierta el código secreto
    //         //     if(empty($_SESSION["Ganador"])){
    //         //         $ID_Reto = $_POST["reto"];
    //         //         $Actualiza = "UPDATE pruebas_ID_Afiliado SET ID_ID_Afiliado = '$ID_ID_Afiliado'  WHERE ID_PU = '$ID_Reto'";
    //         //         mysqli_query($conexion, $Actualiza);
    //         //     } 
    //         //     else{//Si la sesión ganador fue creada se inserta el valor 1 en "reto_logrado"        
    //         //         $ID_Reto = $_POST["reto"];
    //         //         $Actualiza = "UPDATE pruebas_usuario SET ID_Usuario = '$ID_Usuario', reto_logrado = 1 WHERE ID_PU = '$ID_Reto'";
    //         //         mysqli_query($conexion, $Actualiza);               
    //         //     }  
    //         // }
                       
    //         header("location:perfil.php");//Se da acceso y se Redirije a la pagina "entrada.php" para comenzar con las preguntas del juego
    //     }
    //     else{  ?>
    //         <script>
    //             alert("USUARIO y CONTRASEÑA no son correctas");
    //             history.back();
    //         </script> 
    //           <?php
    //     }    
    // }   ?>
    