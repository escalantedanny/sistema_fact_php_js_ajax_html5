function validar_numero(tecla)
{
	/*alert (tecla.keyCode)*/

	if ( (tecla.keyCode>=48 && tecla.keyCode<=57) || (tecla.keyCode>=96 && tecla.keyCode<=105) || (tecla.keyCode==8) || (tecla.keyCode==13) || (tecla.keyCode==46))
		return true
			else	
				return false



}

function soloMoneda(tecla)
{
if ( (tecla.keyCode>=48 && tecla.keyCode<=57) 
	|| (tecla.keyCode>=96 && tecla.keyCode<=105) 
	|| (tecla.keyCode==8) || (tecla.keyCode==13) || (tecla.keyCode==46)
	|| (tecla.keyCode==188) || (tecla.keyCode==190) || (tecla.keyCode==110)
	)
		return true
			else	
				return false
}