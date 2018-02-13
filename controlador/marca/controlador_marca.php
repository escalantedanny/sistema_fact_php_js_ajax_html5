<?php
//llamamos a la clase marca para poder instanciar objeto marca
require("../../clase/marca/marca.class.php");
/*Instanciamos un objeto de la clase marca dicho objeto podra accesar a todas las variables publicas y funciones publicas de la clases marca, solo un objeto de esa clase puede abrir la clase opriducto, el this se usa cuando estoy dentro de la calse*/
$obj_mar=new marca;

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
$obj_mar->asignar_valor("cod_mar",@$_POST['cod_mar']);
$obj_mar->asignar_valor("nom_mar",@$_POST["nom_mar"]);
$obj_mar->asignar_valor("est_mar",@$_POST['est_mar']);



switch($accion)/* el swich realiza la sentencia directa*/
{
	case "agregar":
	/*$obj_pro->agregar(); ojo obj_pro es una persona quecontiene marca que me dice que hay en marca esto es instanciar POO-- luego $agr=$obj_pro->agregar(); se le puede dar el mismo nombre por que estan es archivos distintos*/
		$agr=$obj_mar->agregar();
		$obj_mar->mensaje($agr,$accion,"Marca");
	break;

	case "modificar":
	$mod=$obj_mar->modificar();
		$obj_mar->mensaje($mod,$accion,"Marca");
	break;

	case "listar":
		$lis=$obj_mar->listar();
		$obj_mar->mensaje($lis,$accion,"Marca");
		break;

	case "eliminar":
		$eli=$obj_mar->eliminar();
		$obj_mar->mensaje($eli,$accion,"Marca");
		break;
}
?>
