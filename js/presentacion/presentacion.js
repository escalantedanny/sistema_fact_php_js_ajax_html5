function borrar_presentacion(cod_pre)
		{
				//alert ("Desea Borrar el Producto: "+cod_pro )
			if (confirm("Desea Borrar Presentacion "+cod_pre+"?"))
				{
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_pre').value=cod_pre
					document.getElementById("for_pre").submit();
				}else
				{
					alert("NO borrare presentacion "+cod_pre)
				}



		}

function validar_presentacion()
{
	var cod=document.getElementById("cod_pre")
	var nom=document.getElementById("nom_pre")
	var est=document.getElementById("est_pre")

	if(cod.value=="")
	{
		alert("campo codigo es obligatorio")
		cod.className="alerta"
		return
	}cod.className=""

	if(nom.value=="")
	{
		alert("campo nombre es obligatorio")
		nom.className="alerta"
		return
	}nom.className=""

	document.getElementById("for_pre").submit()

}