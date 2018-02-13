function borrar_forma_pago(cod_for)
{
	if (confirm("desea eliminar la forma de pago: "+cod_for))
	{
		document.getElementById('accion').value="eliminar"
		document.getElementById('cod_for').value=cod_for
		document.getElementById('for_for').submit();
	}
	else
	{
		alert("no borrara ninguna forma de pago")
	}
}


function validar_forma_pago()
{
	var cod=document.getElementById("cod_for")
	var nom=document.getElementById("nom_for")
	var est=document.getElementById("est_for")

	if (cod.value=="") 
	{
		alert("campo codigo es obligatorio")
		cod.className="alerta"
		return
	} cod.className=""

	if (nom.value=="")
	{	
		alert("campo nombre es oblogatorio")
		nom.className="alerta"
		return
	}nom.className=""

	document.getElementById("for_for").submit()
}