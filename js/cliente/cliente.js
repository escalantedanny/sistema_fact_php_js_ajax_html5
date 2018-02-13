function validar_cliente()
{
	/* funcion para obtener un elemento del formulario por id*/
	 var cli=document.getElementById("ide_cli")
	 var nom=document.getElementById("nom_cli")
	 var dir=document.getElementById("dir_cli")
	 /*  alert (cli)  */

	 if (cli.value=="")
	 	{
	 		alert("el campo cedula el obligatorio")
	 		cli.className="vacio"
	 		document.getElementById("ide_cli").focus();
	 		//cli.className="alerta"
	 		return
	 	}cli.className=""

	 if (nom.value=="")
	 	{
	 		alert("el campo nombre es obligatorio")
	 		nom.style.backgroundColor='#ddd8d7'
	 		document.getElementById("nom_cli").focus();
	 		return
	 	}nom.style.backgroundColor=""


	 if (dir.value=="")
	 	{
	 		alert("el campo direccion es obligatorio")
	 		dir.style.backgroundColor='#ddd8d7'
	 		return
	 	}dir.style.backgroundColor=""

document.getElementById("for_cli").submit();


}

function borrar_cliente()
{
	if(confirm("Esta Seguro lo desea eliminar"))
	{

		document.getElementById('for_cli').submit();
	}
}

