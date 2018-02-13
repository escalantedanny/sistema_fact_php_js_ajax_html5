<?php
require ("../../clase/factura/detalle_factura.class.php");


$obj_det=new detalle_factura;

$accion=$_POST['accion'];

$obj_det->asignar_valor("ide_det",$_POST['ide_det']);
$obj_det->asignar_valor("fky_fac",$_POST['fky_fac']);
$obj_det->asignar_valor("fky_pro",$_POST['fky_pro']);
$obj_det->asignar_valor("can_det",$_POST['can_det']);
$obj_det->asignar_valor("pre_det",$_POST['pre_det']);
$obj_det->asignar_valor("sub_det",$_POST['sub_det']);
$obj_det->asignar_valor("tot_det",$_POST['tot_det']);

switch ($accion) {

	case 'agregar':
		 	$agr=$obj_det->agregar();
		 	$obj_det->mensaje($agr,$accion,"Detalle Factura");
			
		break;
	
	case 'modificar':
			$mod=$obj_det->modificar();
		 	$obj_det->mensaje($mod,$accion,"Detalle Factura"); 
		break;

	case 'listar':
			$lis=$obj_det->listar();
		 	$obj_det->mensaje($lis,$accion,"Detalle Factura");			
		break;

	case 'eliminar':
			$eli=$obj_det->eliminar();
		 	$obj_det->mensaje($eli,$accion,"Detalle Factura");
		break;
}


?>