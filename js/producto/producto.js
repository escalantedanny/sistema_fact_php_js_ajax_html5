function validar_producto()
{
	var cod=document.getElementById("cod_pro")
	var nom=document.getElementById("nom_pro")
	var mar=document.getElementById("fky_mar")    /*.selectedIndex = "2";*/
	var pres=document.getElementById("fky_pre")
	var pre=document.getElementById("pre_pro")
	var exp=document.getElementById("exp_pro")
	var ven=document.getElementById("ven_pro")
	var sto=document.getElementById("sto_pro")

		//validar codigo que no entre en blanco
	if (cod.value=="")
	 	{
	 		alert("el campo codigo es obligatorio")
	 		cod.className="alerta"
	 		return
	 	}cod.className=""

	 	//validar nombre que no entre en blanco
	if (nom.value=="")
	 	{
	 		alert("el campo nombre es obligatorio")
	 		nom.style.backgroundColor='#f4c1f3'
	 		return
	 	}nom.style.backgroundColor=""


	 	//validar marca que no entre en blanco
	if (mar.selectedIndex==0)
		{
			alert("Debe seleccionar alguna marca")
			mar.className="alerta"
	 		return
		}mar.className=""

		//validar presentacion que no entre en blanco
	if (pres.selectedIndex==0)
		{
			alert("Debe seleccionar algunna marca")
			pres.className="alerta"
			return
		}pres.className=""

		//validar precio que no entre en blanco
	if (pre.value=="")
	 	{
	 		alert("el campo precio es obligatorio")
	 		pre.style.backgroundColor='#f4c1f3'
	 		return
	 	}pre.style.backgroundColor=""


	document.getElementById("for_pro").submit()

}

function borrar_producto(cod_pro)
		{
				//alert ("Producto: "+cod_pro )

				
			if (confirm("Desea Borrar Producto "+cod_pro+"?"))
				{
					document.getElementById("accion").value="eliminar"
					document.getElementById('cod_pro').value=cod_pro
					document.getElementById("for_pro").submit();
				}else
				{
					alert("NO borrare producto "+cod_pro)
				}


		}


function buscar_producto(num_pro,tecla)
{

	if (tecla.keyCode==13) // 13 es el valor acsii del enter
		{ 
			// capturamos el codigo del producto a buscar en la fila que sabemos gracias a ((num_pro))
			var cod_pro = document.getElementById("cod_pro"+num_pro).value
			//mostramos el codigo 
			//alert("el codigo es :"+cod_pro)

			objAJAX= new XMLHttpRequest
			objAJAX.open("GET","../../controlador/producto/controlador_producto.php?accion=buscar_producto&cod_pro="+cod_pro)

			objAJAX.onreadystatechange=function()
			{
				if (objAJAX.status==200 && objAJAX.readyState==4 )
					{
						var respuesta = objAJAX.responseText
                        /*  dividimos la respuesta del servidor a partir del # usando split  
                        parte la cadena y la pica por el # y devuelve el vector*/
                        //alert("la respuesta es: "+respuesta)
                        var pro=respuesta.split("#")
                        /*  pro[0]  tiene el descripcion del producto
                            pro[1]  tiene el precio del producto*
                            pro[2]  tiene el stock del producto
                        */

                        document.getElementById("nom_pro"+num_pro).value=pro[0]
                        document.getElementById("pre_det"+num_pro).value=pro[1]
                        calcular_fila(num_pro)

						//alert("respues del servidor: "+respuesta)
					}
			}
		objAJAX.send(null)	
		}//end of iff
}//en of function



function calcular_fila(num_fila)
{
	var canPro = document.getElementById("can_det"+num_fila).value
	var prePro = document.getElementById("pre_det"+num_fila).value
	var subTot = canPro*prePro
	document.getElementById("sub_det"+num_fila).value=subTot
}
