function buscar_cliente()
{
	//alert("entro aqui")
	var cedCli = document.getElementById("fky_cli").value

	/* comienza a buscar*/
	var objAjax=new XMLHttpRequest;  // CREAMOS UN OBJETO DE TIPIO AJAX
	//permite la comunicacion

	/* AHORA CREAMO EL PUENTE ENTRE JAVASSCRIP Y AJAX */
	objAjax.open("GET","../../controlador/cliente/controlador_cliente.php?accion=buscar&ced_cli="+cedCli)//despues del GET ->  TRUE SERIA asyncrono y false Syncrono
	//alert("entro aqui")
	/*   creamos la funcion onreadystatechange para chequear cada vez  que exista algun cambio en la funcion READYSTATE tiene otro valor*/
	objAjax.onreadystatechange=function()
	{
		/* 	alert("estatus vale"+objAjax.status)
			alert("readyState vale"+objAjax.readyState)			
		
			valores del estatus:
			200-> ok
			404-> no encontrado
			500-> error de conexion

			valores de readyState:
			0 -> no encontrado
			4 -> respuesta recibida
		**/

		if (objAjax.status==200 && objAjax.readyState==4)
			{
				/* para  solucionar problemas enviamos un alert a responseText
				alert (objAjax.responseText)*/


				/* recibimos los datos del cliente enviados del servidor  */
				document.getElementById("zona_cliente").innerHTML=objAjax.responseText


			}
	}
	objAjax.send(null);
}



function agregar_fila()
{
	//agregamos numFila para agregarlo un valor cada vez que se incremente una fila
	var numFila = parseInt(document.getElementById("num_fila").value)+1
	//al html le devolvemos la variable ya incremewntada
	document.getElementById("num_fila").value=numFila

	//capturamos la tabla
	var tabla = document.getElementById("tabla_detalle")
	//contamos cuantas filas tiene la tabla
	var totalFilas=tabla.rows.length
    //inserto una nueva fila a la tabla
	var fila=tabla.insertRow(totalFilas)
	//alineamos las filas desde el java script
	fila.align="center"
	var columna0 = fila.insertCell(0)
	var columna1 = fila.insertCell(1)
	var columna2 = fila.insertCell(2)
	var columna3 = fila.insertCell(3)
	var columna4 = fila.insertCell(4)

	columna0.innerHTML = "<input type='text'   name='cod_pro"+numFila+"' id='cod_pro"+numFila+"' size='20' maxlength='10' onkeydown='buscar_producto("+numFila+",event)'>"
	columna1.innerHTML = "<input type='text'   name='nom_pro"+numFila+"' id='nom_pro"+numFila+"' size='40' maxlength='50'>"
	columna2.innerHTML = "<input type='number' name='can_det"+numFila+"' id='can_det"+numFila+"' size='3' maxlength='3' min='0' max='999' value='1' onchange='calcular_fila("+numFila+")'>"
	columna3.innerHTML = "<input type='text'   name='pre_det"+numFila+"' id='pre_det"+numFila+"' size='15' maxlength='10' readonly' value='0'>"
	columna4.innerHTML = "<input type='text'   name='sub_det"+numFila+"' id='sub_det"+numFila+"' size='15' maxlength='10' readonly value='0'>"

}
