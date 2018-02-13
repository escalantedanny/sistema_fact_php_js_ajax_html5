<?php
require("../../../curso_web_octubre/clase/presentacion/presentacion.class.php");
$obj_pre=new presentacion;
$accion=$_POST['accion'];

$obj_pre->asignar_valor("cod_pre",@$_POST['cod_pre']);
$obj_pre->asignar_valor("nom_pre",@$_POST['nom_pre']);
$obj_pre->asignar_valor("est_pre",@$_POST['est_pre']);
switch ($accion) {
	case "agregar":
		$agr=$obj_pre->agregar();
		$obj_pre->mensaje($agr,$accion,"Presentacion");

		break;
	case "modificar":
		$mod=$obj_pre->modificar();
		$obj_pre->mensaje($mod,$accion,"Presentacion");
		break;
	case "listar":
		$lis=$obj_pre->listar();
		$obj_pre->mensaje($lis,$accion,"Presentacion");
		break;
	case "eliminar":
		$eli=$obj_pre->eliminar();
		$obj_pre->mensaje($eli,$accion,"Presentacion");
		break;
}
?>