var http_request = false;
    var peticion= conexionAJAX();
    function conexionAJAX(){
        http_request = false;
        if(window.XMLHttpRequest){ // Mozilla, Safari,...
            http_request = new XMLHttpRequest();
            if (http_request.overrideMimeType){
                http_request.overrideMimeType('text/xml');
            }
        }
        else if(window.ActiveXObject){ // IE
            try{
                http_request = new ActiveXObject("Msxml2.XMLHTTP");
            }
                catch(e){
                    try{
                        http_request = new ActiveXObject("Microsoft.XMLHTTP");
                    } 
                    catch(e){}
                }
            }
            if(!http_request){
                alert('No es posible crear una instancia XMLHTTP');
                return false;
            }
          	// else{
            //     alert("Instancia creada exitosamente ok");
            // }
            return http_request;
        } 

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
// Verifica que el correo no exista en la BD
    function llamar_verificaCorreo(){//Es llamada desde registroProfesional.php
        A=document.getElementById("Correo").value;//se inserta el ID_Especialidad desde Citas.php
        var url="../modelo/VerificarCorreo.php?val_1=" + A;
        http_request.open('GET',url,true);     
        peticion.onreadystatechange = respuesta_verificaCorreo;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_verificaCorreo(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){
                document.getElementById('Mostrar_verificaCorreo').innerHTML=peticion.responseText;//se recoje el numero de pacientes
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
    }

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------

    function llamar_casa_arriendo(){//Es llamada desde filtro_V.php
        document.getElementById('Loading').style.display = 'block';
        var A= document.getElementById("Casa_Arriendo").value;//se inserta el precio del inmueble 
        var B= document.getElementById("TipoInmueble").value;//se inserta el tipo de inmueble 
        var porNombre= document.getElementsByName("negociacion");
        // Recorremos todos los valores del radio button para encontrar el seleccionado
        for(var i=0; i<porNombre.length; i++){
            if(porNombre[i].checked){
                C= porNombre[i].value;
            }
        }
        var url="../RegistrosCasas_C/index/" + A + "/" + B + "/" + C;
        http_request.open('GET',url,true);   
        //Cuando XMLHttpRequest cambie de estado, ejecutamos esta funcion   
        peticion.onreadystatechange = respuesta_casa_arriendo;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        peticion.send("null");
    }                                                           
    function respuesta_casa_arriendo(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){
                document.getElementById('Mostrar_precio').innerHTML=peticion.responseText;//se recoje el numero de pacientes
                document.getElementById('Loading').style.display = 'none';
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            document.getElementById('Mostrar_evaluar').innerHTML='Cargando';
        }
    }
    
//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------

function llamar_casa_venta(){//Es llamada desde filtro_v.php
    document.getElementById('Loading').style.display = 'block';
    var A= document.getElementById("Casa_Venta").value;//se inserta el precio del inmueble 
    var B= document.getElementById("TipoInmueble").value;//se inserta el tipo de inmueble 
    var porNombre= document.getElementsByName("negociacion");
    // Recorremos todos los valores del radio button para encontrar el seleccionado
    for(var i=0; i<porNombre.length; i++){
        if(porNombre[i].checked){
            C= porNombre[i].value;
        }
    }
    var url="../RegistrosCasas_C/index/" + A + "/" + B + "/" + C;
    http_request.open('GET',url,true);   
    //Cuando XMLHttpRequest cambie de estado, ejecutamos esta funcion   
    peticion.onreadystatechange = respuesta_casa_venta;
    peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
    peticion.send("null");
}                                                           
function respuesta_casa_venta(){
    if(peticion.readyState == 4){
        if(peticion.status == 200){
            document.getElementById('Mostrar_precio').innerHTML=peticion.responseText;//se recoje el numero de pacientes
            document.getElementById('Loading').style.display = 'none';
        } 
        else{
            alert('Hubo problemas con la petición.');
        }
    }
    else{ //en caso contrario, mostramos un gif simulando una precarga
        document.getElementById('Mostrar_evaluar').innerHTML='Cargando';
    }
}

//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
    function llamar_precio_habitacion(){//Es llamada desde filtro_V.php
        document.getElementById('Loading').style.display = 'block';
        var A= document.getElementById("Precio").value;//se inserta el precio del inmueble 
        var B= document.getElementById("TipoInmueble").value;//se inserta el tipo de inmueble 
        var url="../RegistrosHabitaciones_C/index/" + A + "/" + B ;
        http_request.open('GET',url,true); 
        //Cuando XMLHttpRequest cambie de estado, ejecutamos esta funcion    
        peticion.onreadystatechange = respuesta_precio_habitacion;
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded");
        // Enviamos los datos con el metodo send
        peticion.send("null");
    }                                                           
    function respuesta_precio_habitacion(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){
                document.getElementById('Mostrar_precio').innerHTML=peticion.responseText;//se recoje el numero de pacientes
                document.getElementById('Loading').style.display = 'none';
            } 
            else{
                alert('Hubo problemas con la petición.');
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            document.getElementById('Mostrar_evaluar').innerHTML='Cargando registros';
        }
    }
    
//-------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
