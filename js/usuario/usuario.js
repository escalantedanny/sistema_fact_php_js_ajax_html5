function validar_usuario()
{
	var ced = document.getElementById("ced_usu")
	var ema = document.getElementById("ema_usu")
	var cla = document.getElementById("cla_usu")
	var nom = document.getElementById("nom_usu")
	var tel = document.getElementById("tel_usu")
	var dir = document.getElementById("dir_usu")		
	var est = document.getElementById("est_usu")

	
		if (ced.value=="")
		{
			alert("campo codigo es obligatorio")
			ced.className="alerta"
			document.getElementById("cod_usu").focus()
			return
		}ced.className=""

		if (ema.value=="")
		{
			alert("campo email es obligatorio")
			ema.className="alerta"
			document.getElementById("cod_usu").focus()
			return
		}ema.className=""

		if (cla.value=="")
		{
			alert("campo clave es obligatorio")
			cla.className="alerta"
			document.getElementById("cod_usu").focus()
			return
		}cla.className=""
		

		if (nom.value=="")
		{
			alert("campo Nombre es obligatorio")
			nom.className="alerta"
			document.getElementById("nom_usu").focus()
			return
		}nom.className=""

		if (tel.value=="")
		{
			alert("campo telefono es obligatorio")
			tel.className="alerta"
			document.getElementById("cod_usu").focus()
			return
		}tel.className=""


	document.getElementById("for_usu").submit()
}


function borrar_usuario(cod_usu)
		{
				//alert ("Desea Borrar el Producto: "+cod_pro )
			if (confirm("Desea Borrar El usuario "+cod_usu+"?"))
				{
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_usu').value=cod_usu
					document.getElementById("for_usu").submit();
				}



		}

function gestionar_permiso(usuario,permiso)
{
	document.getElementById("mensaje").innerHTML=""
	document.getElementById("mensaje").className= ''

	//alert(" codigo del usuario es: "+usuario)
	//alert("el codigo del permiso es: "+permiso)
	var activo = document.getElementById(permiso).checked
	
    var objAjax=new XMLHttpRequest;  
    // enviuariamos los parametros requeridos para insertar o eliminar en las tablas
    // accion = la accion requerida para ser llamada
    
	objAjax.open
	("GET","../../controlador/usuario/controlador_usuario.php?accion=gestionar_permiso&fky_usu="+usuario+"&opc_per="+permiso+"&est_per="+activo)

	objAjax.onreadystatechange=function()
	{
		//alert("estatus vale"+objAjax.status)
		//alert("readyState vale"+objAjax.readyState)		

		if (objAjax.status==200 && objAjax.readyState==4)
			{
				var respuesta = objAjax.responseText
				/*respues = si guardamos o no en exitosamente y 
				luego mostraremos un mensaje en la pantalla*/
				//alert("la respues es: "+respuesta)
                if (respuesta==true)
                	{
		document.getElementById("mensaje").innerHTML="Registro Procesado conExito"
		//document.getElementById("mensaje").className= 'ok'
                	}else
                	{
        document.getElementById("mensaje").innerHTML="Error al Procesar Permiso" 
		//document.getElementById("mensaje").className= 'error'
        			}				
		}//end of if
	}// end of readystatechange
	objAjax.send(null);
	// se envia NULL porque estamos enviando los datos con el metodo GET 
	//CASO CONTRARIO
	// si se envian los datos con el metodo _POST se enviarian los datos con el metodo SENs
}//end of function 