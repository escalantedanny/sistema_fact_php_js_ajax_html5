<?php
require("../../../curso_web_octubre/clase/forma_pago/forma_pago.class.php");

$obj_for=new forma_pago;

$accion=$_POST['accion'];

$obj_for->asignar_valor("cod_for",@$_POST['cod_for']);
$obj_for->asignar_valor("nom_for",@$_POST['nom_for']);
$obj_for->asignar_valor("est_for",@$_POST['est_for']);

switch ($accion)
{
	case 'agregar':
		$agr=$obj_for->agregar();
		$obj_for->mensaje($agr,$accion,"Forma de Pago");
		break;
	
	case 'listar':
		$lis=$obj_for->listar();
		$obj_for->mensaje($lis,$accion,"Forma de Pago");
		break;

	case 'modificar':
		$mod=$obj_for->modificar();
		$obj_for->mensaje($mod,$accion,"Forma de Pago");	
	break;

	case 'eliminar':
		$eli=$obj_for->eliminar();
		$obj_for->mensaje($eli,$accion,"Forma de Pago");
	break;
}

?>