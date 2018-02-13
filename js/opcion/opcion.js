function validar_opcion()
{
	var cod = document.getElementById("cod_opc")
	var nom = document.getElementById("nom_opc")
	var mod = document.getElementById("fky_mod")	
	var url = document.getElementById("url_opc")
	var est = document.getElementById("est_opc")

	if (cod.value=="")
	{
		alert("campo codigo es obligatorio")
		cod.className="alerta"
		document.getElementById("cod_opc").focus()
		return
	}cod.className=""

	if (nom.value=="")
	{
		alert("campo Nombre es obligatorio")
		nom.className="alerta"
		document.getElementById("nom_opc").focus()
		return
	}nom.className=""

	if (mod.value=="")
	{
		alert("campo modulo es obligatorio")

		mod.className="alerta"
		document.getElementById("fky_mod").focus()
		return
	}mod.className=""
	
	if (url.value=="")

	{
		alert("campo url es obligatorio")

		url.className="alerta"
		document.getElementById("url_opc").focus()
		return
	}url.className=""

	document.getElementById("for_opc").submit()
}


function borrar_opcion(cod_opc)
		{
				//alert ("Desea Borrar el Producto: "+cod_pro )
			if (confirm("Desea Borrar la opcion "+cod_opc+"?"))
				{
					//alert("si borrare presentacion "+cod_mar)
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_opc').value=cod_opc
					document.getElementById("for_opc").submit();
				}else
				{
					alert("NO borrare la opcion "+cod_opc)
				}



		}