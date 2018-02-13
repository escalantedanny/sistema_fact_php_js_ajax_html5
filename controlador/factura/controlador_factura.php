<?php

require("../../clase/factura/factura.class.php");

$obj_fac=new factura();

$accion=$_POST["accion"];


$obj_fac->asignar_valor("num_fac",$_POST['num_fac']);
$obj_fac->asignar_valor("ctr_fac",$_POST['ctr_fac']);
$obj_fac->asignar_valor("fec_fac",$_POST['fec_fac']);
$obj_fac->asignar_valor("fky_cli",$_POST['fky_cli']);
$obj_fac->asignar_valor("fky_for",$_POST['fky_for']);
$obj_fac->asignar_valor("con_fac",$_POST['con_fac']);
$obj_fac->asignar_valor("ven_fac",$_POST['ven_fac']);
$obj_fac->asignar_valor("sub_fac",$_POST['sub_fac']);
$obj_fac->asignar_valor("imp_fac",$_POST['imp_fac']);
$obj_fac->asignar_valor("tot_fac",$_POST['tot_fac']);
$obj_fac->asignar_valor("est_fac",$_POST['est_fac']);


switch ($accion) {

		case 'agregar':
			$agr=$obj_fac->agregar();
			$obj_fac->mensaje($agr,$accion,"Factura");
		break;

		case 'modificar':
			$mod=$obj_fac->modificar();
			$obj_fac->mensaje($mod,$accion,"Factura");		
		break;

		case 'listar':
			$lis=$obj_fac->listar();
			$obj_fac->mensaje($lis,$accion,"Factura");	
		break;

	    case 'eliminar':
			$eli=$obj_fac->eliminar();
			$obj_fac->mensaje($eli,$accion,"Factura");
		break;

}

  ?>