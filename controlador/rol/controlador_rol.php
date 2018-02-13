<?php
//llamamos a la clase rol para poder instanciar objeto rol
require("../../clase/rol/rol.class.php");
/*Instanciamos un objeto de la clase rol dicho objeto podra accesar a todas las variables publicas y funciones publicas de la clases rol, solo un objeto de esa clase puede abrir la clase opriducto, el this se usa cuando estoy dentro de la calse*/
$obj_rol=new rol;

$accion=$_POST["accion"];//Post y Get son los dos metodos de envio//
/*Del formulario recibiremos una variable llamada accion que nos dira que desea hacer el usuario: agregar, modificar,listar o eliminar */
/*$accion=$_POST["accion"];*///POST Y GET son los 2 metodos de envio*/
/*$_POST[] es un vector con los datos enviados en el formulario. OJO ESTO ES UN VECTOR []
Ejemplo:
$_POST["COD_PRO"] vale P001
$_POST["COD_PRO"]
$_POST["COD_PRO"]
*/
/*asignacion de variables que estan en rol*/
$obj_rol->asignar_valor("cod_rol",@$_POST['cod_rol']);
$obj_rol->asignar_valor("nom_rol",@$_POST["nom_rol"]);
$obj_rol->asignar_valor("est_rol",@$_POST['est_rol']);



switch($accion)/* el swich realiza la sentencia directa*/
{
	case "agregar":
	/*$obj_pro->agregar(); ojo obj_pro es una persona quecontiene rol que me dice que hay en rol esto es instanciar POO-- luego $agr=$obj_pro->agregar(); se le puede dar el mismo nombre por que estan es archivos distintos*/
		$agr=$obj_rol->agregar();
		$obj_rol->mensaje($agr,$accion,"rol");
	break;

	case "modificar":
	$mod=$obj_rol->modificar();
		$obj_rol->mensaje($mod,$accion,"rol");
	break;

	case "listar":
		$lis=$obj_rol->listar();
		$obj_rol->mensaje($lis,$accion,"rol");
		break;

	case "eliminar":
		$eli=$obj_rol->eliminar();
		$obj_rol->mensaje($eli,$accion,"rol");
		break;
}
?>
