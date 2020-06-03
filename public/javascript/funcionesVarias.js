//coloca el foco autotmaticamente en el primer input de los formularios
    function foco(id){
        document.getElementById(id).focus();   
    }

// -------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------- 
function Confirmacion(){
	 	if(confirm('¿Esta seguro de eliminar el registro?')==true){
			//alert('El registro ha sido eliminado correctamente!!!');
		    return true;
		}
		else{
		    //alert('Cancelo la eliminacion');
		    return false;
		}
	}

// ----------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
//menu responsive principal, llamado desde todos los archivos headerXxxxxxx.php
    function mostrarMenu(){
        if(window.screen.width<=800){//solo funciona si la pantalla es menor a 800px
            var A= document.getElementById("MenuResponsive");//nav
            if(A.style.marginLeft < "0%"){
                A.style.marginLeft = "0%";
            }
            else if(A.style.marginLeft == "0%"){
                A.style.marginLeft = "-67%";
            }
        }
    }

// ------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------
//menu responsive, llamado desde todas las paginas vistas desde un telefono. 
    function ocultarMenu(){
        if(window.screen.availWidth <= 800){//solo funciona si la pantalla es menor a 800px   
            var A= document.getElementById("MenuResponsive");
            if(A.style.marginLeft == "0%"){
                A.style.marginLeft = "-67%";
            }
        }
    }

// ------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------
//va dando en pantalla la cantidad de caracteres que quedan mientra se escribe un total de 150, llamada desde perfil_comercio.php

  function contar(){
         var max = 500; 
         var cadena = document.getElementById("Contenido").value; 
         var longitud = cadena.length; 

             if(longitud <= max) { 
                  document.getElementById("Contador").value = max-longitud; 
             } else { 
                  document.getElementById("Contenido").value = cadena.subtring(0, max);
             } 
    } 
        
// ----------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------
//Impide que se sigan introduciendo caracteres al alcanzar el limite maximo, llamada desde contactenos.php y perfil_cpmercio.php 
	var contenido_textarea = ""; 	
	function valida_Longitud(){  
		var num_caracteres_permitidos = 500;

		//se averigua la cantidad de caracteres escritos
	   	num_caracteres = document.forms[0].contenido.value.length; 

	   	if(num_caracteres > num_caracteres_permitidos){ 
	      	document.forms[0].contenido.value = contenido_textarea; 
	   	}
	   	else{ 
	      	contenido_textarea = document.forms[0].contenido.value;	
	   	} 
	} 
       
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
//Impide que se sigan introduciendo caracteres al alcanzar el limite maximo, llamada desde perfil_comercio.php 
    var contenido_textarea_2 = "";     
    function valida_Longitud_2(){ 
        var num_caracteres_permitidos = 150;

        //se averigua la cantidad de caracteres escritos
        num_caracteres = document.forms[0].descripcion_1.value.length; 

        if(num_caracteres > num_caracteres_permitidos){ 
            document.forms[0].descripcion_1.value = contenido_textarea_2; 
        }
        else{ 
            contenido_textarea_2 = document.forms[0].descripcion_1.value; 
        } 
    } 
   
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
    //ajusta el texarea con respecto al contenido que trae de la BD es llamado desde .php
    function resize_6(){
        var text = document.getElementById("PerfilProf");
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }

// --------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------

    //ajusta el texarea con respecto al contenido que trae de la BD es llamado desde MiPerfil_Basico.php
    function resize_7(){
        var text = document.getElementById("Direccion");
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
// --------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------

    //ajusta el texarea con respecto al contenido que trae de la BD es llamado desde MiPerfil_Basico.php
    function resize_8(){
        var text = document.getElementById("CentroSalud");
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
// --------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------

//Impide que se siga introduciendo caracteres al alcanzar el limite maximo en el telefono, llamado desde registroEspecialista.php
    var contenidoTelefono = ""; 
    var num_caracteres_permitidos = 14; 

    function valida_LongitudTelefono(){ 
       num_caracteres = document.forms[0].telefono.value.length; 

       if(num_caracteres > num_caracteres_permitidos){ 
          document.forms[0].telefono.value = contenidoTelefono; 
       }
       else{ 
          contenidoTelefono = document.forms[0].telefono.value;   
       } 
    } 

// --------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------
    //Mascara de entrada para el telefono
    // Telefono.addEventListener("input", function(){
    //     if(this.value.length == 4){
    //         this.value += "-"; 
    //     }
    //     else if(this.value.length == 8){
    //         this.value += ".";  
    //     }
    //     else if(this.value.length == 11){
    //         this.value += ".";  
    //     }
    // }, false);

// --------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------

    // //Validar el formato de telefono
    // avisado=false;
    // function validarFormatoTelefono(campo){
    //     var RegExPattern = /^\d{4}\-\d{3}\.\d{2}\.\d{2}$/;
    //     if((campo.match(RegExPattern)) && (campo!='')){
    //         return true;
    //     }
    //     else{
    //         alert("Telefono con formato incorrecto");
    //         document.getElementById("Telefono").value = "";
    //         document.getElementById("Telefono").style.backgroundColor = 'red'; 
    //         return false;
    //     }
    // }

// --------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------
//Cambia la imagen del slider. invocada desde Tienda_Comercio.php
    function CambiarImagen(){
        var A= document.getElementById("Radio_2");
        var B= document.getElementById("Radio_4");
        var C= document.getElementById("Radio_5");
        var D= document.getElementById("Radio_6");
        var E= document.getElementById("Radio_7");
        if(B.checked ="true"){
            B.checked = "true";
        }
        else if(C.checked ="true"){
            C.checked = "true";
        }
        else if(D.checked ="true"){
            D.checked = "true";
        }
        else if(E.checked ="true"){
            E.checked = "true";
        }
    }

// ***************************************************************************************

//llamada desde inicio.php 
function NotificarContrasena(){
    let A= document.getElementById("Contenedor_16");
    // var B= document.getElementById("Tapa_2");

    if(A.style.display = "none"){
        A.style.display = "block";
    }
}

// ***************************************************************************************

//llamada desde inicio.php 
function OcultarDiv(){
    //     var div = document.querySelector("div"),
    // button = document.querySelector("button");
     
    window.addEventListener("click", function(event){
        var objetivo = event.target;
        if (objetivo != div && objetivo != button) div.style.display = "none";
    }, false);
     
    button.addEventListener("click", function(){
        var visible = getComputedStyle(div).display;
        div.style.display = visible == "block" ? "none" : "block";
    }, false);

}

// *************************************************************************************************
// Llamada desde inmueble_V.php
function abrirDetalles(ID_Inm){     
        window.open("../TipoInmueble_C/index/" + ID_Inm, "ventana1", "width=1300,height=650,scrollbars=YES");
}

// *************************************************************************************************
// Llamada desde entrada_V.php
function abrirDetalles_2(ID_Inm){     
    window.open("../TipoInmueble_C/index/" + ID_Inm, "ventana1", "width=1300,height=650,scrollbars=YES");
}

// ***************************************************************************************************
// Llamada desde registrar_Pago.php
function formasPago(){            
    window.open("../FormasPago_C", "ventana1", "width=500,height=600,scrollbars=YES");
}

// ***************************************************************************************************
//LLamada desde descripcion_casa.php  descripcion_habitacion.php
function cerrarVentana(){            
    window.close();
}
// ***************************************************************************************************
//llamada desde filtro.php
function habilitar_compra(){
    // location.reload()
    let Departamento = document.getElementById("Departamento");
    let Municipio = document.getElementById("Municipio");
    let Precio = document.getElementById("Casa_Venta");
	Departamento.disabled = false;
	Municipio.disabled = false;
	Precio.disabled = false;
}

// ***************************************************************************************************
//llamada desde filtro.php
function habilitar_arriendo(){
    // location.reload()
    let Departamento = document.getElementById("Departamento");
    let Municipio = document.getElementById("Municipio");
    let Precio = document.getElementById("Casa_Arriendo");
	Departamento.disabled = false;
	Municipio.disabled = false;
	Precio.disabled = false;
}
// ***************************************************************************************************
// Llamada desde filtro.php
function preciosArrendos(){
    let Arrendar = document.getElementById("Arrenda");
    let ArriendoCasa = document.getElementById("Contenedor_Inmueble_Arriendo");
    let CompraCasa = document.getElementById("Contenedor_Inmueble_Compra");
    if(Arrendar.checked = true){
        CompraCasa.style.display = "none";
        ArriendoCasa.style.display = "block";
    }
}

// ***************************************************************************************************
// Llamada desde filtro.php
function preciosCompra(){
    let Comprar = document.getElementById("Compra");
    let ArriendoCasa = document.getElementById("Contenedor_Inmueble_Arriendo");
    let CompraCasa = document.getElementById("Contenedor_Inmueble_Compra");
    if(Comprar.checked = true){
        ArriendoCasa.style.display = "none";
        CompraCasa.style.display = "block";
    }
}

// ***************************************************************************************************
// Llamada desde nuevaP_Casa.php  nuevaP_habitacion.php
// Función que da una vista previa de la fotografia antes de guardarla en la BD 
function muestraImg(){
    var contenedor = document.getElementById("muestrasImg");
    var archivos = document.getElementById("ImgInp").files;
    for(i = 0; i < archivos.length; i++){
        imgTag = document.createElement("img");
        imgTag.height = 200;//ESTAS LINEAS NO SON "NECESARIAS"
        imgTag.width = 290; //ÚNICAMENTE HACEN QUE LAS IMÁGENES SE VEAN
        imgTag.id = i;      // ORDENADAS CON UN TAMAÑO ESTÁNDAR
        imgTag.src = URL.createObjectURL(archivos[i]);
        contenedor.appendChild(imgTag);
    }
}

// ************************************************************************************************
//Llamada desde descripcion_habitacion_V.php 
function ImagenMiniatura_A(){
    let Img_A = document.getElementById("Img_1");
    let Img_B = document.getElementById("Img_2");
    let Img_C = document.getElementById("Img_3");
    let Img_D = document.getElementById("Img_4");
    let Img_E = document.getElementById("Img_5");
     
    Img_A.style.opacity = 1; 
    Img_B.style.opacity = 0;
    Img_C.style.opacity = 0;
    Img_D.style.opacity = 0;
    Img_E.style.opacity = 0;
}

// ************************************************************************************************
//Llamada desde descripcion_habitacion.php  descripcion_casa.php
function ImagenMiniatura_B(){
    let Img_A = document.getElementById("Img_1");
    let Img_B = document.getElementById("Img_2");
    let Img_C = document.getElementById("Img_3");
    let Img_D = document.getElementById("Img_4");
    let Img_E = document.getElementById("Img_5");

    Img_A.style.opacity = 0;
    Img_B.style.opacity = 1;
    Img_C.style.opacity = 0;
    Img_D.style.opacity = 0;
    Img_E.style.opacity = 0;
}

// ************************************************************************************************
//Llamada desde descripcion_habitacion.php  descripcion_casa.php
function ImagenMiniatura_C(){
    let Img_A = document.getElementById("Img_1");
    let Img_B = document.getElementById("Img_2");
    let Img_C = document.getElementById("Img_3");
    let Img_D = document.getElementById("Img_4");
    let Img_E = document.getElementById("Img_5");

    Img_A.style.opacity = 0; 
    Img_B.style.opacity = 0;
    Img_C.style.opacity = 1;
    Img_D.style.opacity = 0;
    Img_E.style.opacity = 0;
}

// ************************************************************************************************
//Llamada desde descripcion_habitacion.php  descripcion_casa.php
function ImagenMiniatura_D(){
    let Img_A = document.getElementById("Img_1");
    let Img_B = document.getElementById("Img_2");
    let Img_C = document.getElementById("Img_3");
    let Img_D = document.getElementById("Img_4");
    let Img_E = document.getElementById("Img_5");

    Img_A.style.opacity = 0; 
    Img_B.style.opacity = 0;
    Img_C.style.opacity = 0;
    Img_D.style.opacity = 1;
    Img_E.style.opacity = 0;
}

// ************************************************************************************************
//Llamada desde descripcion_habitacion.php  descripcion_casa.php
function ImagenMiniatura_E(){
    let Img_A = document.getElementById("Img_1");
    let Img_B = document.getElementById("Img_2");
    let Img_C = document.getElementById("Img_3");
    let Img_D = document.getElementById("Img_4");
    let Img_E = document.getElementById("Img_5");

    Img_A.style.opacity = 0; 
    Img_B.style.opacity = 0;
    Img_C.style.opacity = 0;
    Img_D.style.opacity = 0;
    Img_E.style.opacity = 1;
}

// ************************************************************************************************