function validar_modulo()
{
	var cod = document.getElementById("cod_mod")
	var nom = document.getElementById("nom_mod")
	var rut = document.getElementById("rut_mod")
	var est = document.getElementById("est_mod")

	if (cod.value=="")
	{
		alert("campo codigo es obligatorio")
		cod.className="alerta"
		document.getElementById("cod_mod").focus()
		return
	}cod.className=""

	if (nom.value=="")
	{
		alert("campo Nombre es obligatorio")
		nom.className="alerta"
		document.getElementById("nom_mod").focus()
		return
	}nom.className=""

	if (rut.value=="")
	{
		alert("campo ruta es obligatorio")
		rut.className="alerta"
		document.getElementById("rut_mod").focus()
		return
	}rut.className=""

	document.getElementById("for_mod").submit()
}


function borrar_modulo(cod_mod)
		{
				//alert ("Desea Borrar el Producto: "+cod_pro )
			if (confirm("Desea Borrar modulo "+cod_mod+"?"))
				{
					//alert("si borrare presentacion "+cod_mar)
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_mod').value=cod_mod
					document.getElementById("for_mod").submit();
				}else
				{
					alert("NO borrare modulo "+cod_mod)
				}



		}