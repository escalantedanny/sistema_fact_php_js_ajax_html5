<?php
//llamamos a la clase marca para poder instanciar objeto marca
require("../../clase/opcion/opcion.class.php");
/*Instanciamos un objeto de la clase marca dicho objeto podra accesar a todas las variables publicas y funciones publicas de la clases marca, solo un objeto de esa clase puede abrir la clase opriducto, el this se usa cuando estoy dentro de la calse*/
$obj_opc=new opcion;

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
$obj_opc->asignar_valor("cod_opc",@$_POST['cod_opc']);
$obj_opc->asignar_valor("nom_opc",@$_POST["nom_opc"]);
$obj_opc->asignar_valor("fky_mod",@$_POST["fky_mod"]);
$obj_opc->asignar_valor("url_opc",@$_POST["url_opc"]);
$obj_opc->asignar_valor("est_opc",@$_POST['est_opc']);



switch($accion)/* el swich realiza la sentencia directa*/
{
	case "agregar":
	/*$obj_pro->agregar(); ojo obj_pro es una persona quecontiene marca que me dice que hay en marca esto es instanciar POO-- luego $agr=$obj_pro->agregar(); se le puede dar el mismo nombre por que estan es archivos distintos*/
		$agr=$obj_opc->agregar();
		$obj_opc->mensaje($agr,$accion,"opcion");
	break;

	case "modificar":
	$mod=$obj_opc->modificar();
		$obj_opc->mensaje($mod,$accion,"opcion");
	break;

	case "listar":
		$lis=$obj_opc->listar();
		$obj_opc->mensaje($lis,$accion,"opcion");
		break;

	case "eliminar":
		$eli=$obj_opc->eliminar();
		$obj_opc->mensaje($eli,$accion,"opcion");
		break;
}
?>
