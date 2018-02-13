function borrar_marca(cod_mar)
		{
				//alert ("Desea Borrar el Producto: "+cod_pro )
			if (confirm("Desea Borrar marca "+cod_mar+"?"))
				{
					//alert("si borrare presentacion "+cod_mar)
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_mar').value=cod_mar
					document.getElementById("for_mar").submit();
				}else
				{
					alert("NO borrare presentacion "+cod_mar)
				}



		}

function validar_marca()
{

	var cod= document.getElementById("cod_mar")
	var nom= document.getElementById("nom_mar")
	var est= document.getElementById("est_mar")


	if (cod.value=="")
	{
		alert("campo codigo es obligatorio")
		cod.className="alerta"
		return
	}cod.className=""

		if (nom.value=="")
	{
		alert("campo Nombre es obligatorio")
		nom.className="alerta"
		return
	}nom.className=""

	document.getElementById("for_mar").submit()

}