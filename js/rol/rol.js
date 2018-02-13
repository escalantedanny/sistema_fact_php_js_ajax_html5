function validar_rol()
{
	var cod = document.getElementById("cod_rol")
	var nom = document.getElementById("nom_rol")
	var est = document.getElementById("est_rol")

	if (cod.value=="")
	{
		alert("campo codigo es obligatorio")
		cod.className="alerta"
		document.getElementById("cod_rol").focus()
		return
	}cod.className=""

	if (nom.value=="")
	{
		alert("campo Nombre es obligatorio")
		nom.className="alerta"
		document.getElementById("nom_rol").focus()
		return
	}nom.className=""

	if (est.value=="")
	{
		alert("campo ruta es obligatorio")
		est.className="alerta"
		document.getElementById("est_rol").focus()
		return
	}est.className=""

	document.getElementById("for_rol").submit()
}


function borrar_rol(cod_rol)
		{
				//alert ("Desea Borrar el Producto: "+cod_pro )
			if (confirm("Desea Borrar el rol "+cod_rol+"?"))
				{
					//alert("si borrare presentacion "+cod_mar)
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_rol').value=cod_rol
					document.getElementById("for_rol").submit();
				}else
				{
					alert("NO borrare el rol "+cod_rol)
				}



		}