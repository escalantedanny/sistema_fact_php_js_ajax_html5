<?php
//llamamos a la clase marca para poder instanciar objeto marca
require("../../clase/modulo/modulo.class.php");
/*Instanciamos un objeto de la clase marca dicho objeto podra accesar a todas las variables publicas y funciones publicas de la clases marca, solo un objeto de esa clase puede abrir la clase opriducto, el this se usa cuando estoy dentro de la calse*/
$obj_mod=new modulo;

$accion=$_POST["accion"];//Post y Get son los dos metodos de envio//
/*Del formulario recibiremos una variable llamada accion que nos dira que desea hacer el usuario: agregar, modificar,listar o eliminar */
/*$accion=$_POST["accion"];*///POST Y GET son los 2 metodos de envio*/
/*$_POST[] es un vector con los datos enviados en el formulario. OJO ESTO ES UN VECTOR []
Ejemplo:
$_POST["COD_PRO"] vale P001
$_POST["COD_PRO"]
$_POST["COD_PRO"]
*/
/*asignacion de variables que estan en marca*/
$obj_mod->asignar_valor("cod_mod",@$_POST['cod_mod']);
$obj_mod->asignar_valor("nom_mod",@$_POST["nom_mod"]);
$obj_mod->asignar_valor("rut_mod",@$_POST["rut_mod"]);
$obj_mod->asignar_valor("est_mod",@$_POST['est_mod']);



switch($accion)/* el swich realiza la sentencia directa*/
{
	case "agregar":
	/*$obj_pro->agregar(); ojo obj_pro es una persona quecontiene marca que me dice que hay en marca esto es instanciar POO-- luego $agr=$obj_pro->agregar(); se le puede dar el mismo nombre por que estan es archivos distintos*/
		$agr=$obj_mod->agregar();
		$obj_mod->mensaje($agr,$accion,"modulo");
	break;

	case "modificar":
	$mod=$obj_mod->modificar();
		$obj_mod->mensaje($mod,$accion,"modulo");
	break;

	case "listar":
		$lis=$obj_mod->listar();
		$obj_mod->mensaje($lis,$accion,"modulo");
		break;

	case "eliminar":
		$eli=$obj_mod->eliminar();
		$obj_mod->mensaje($eli,$accion,"modulo");
		break;
}
?>
