<?php
	require("./../../clase/cliente/cliente.class.php");
	
	$obj_cli=new cliente;

	$accion=$_REQUEST['accion'];

	$obj_cli->asignar_valor("cod_cli",@$_POST['cod_cli']);
	$obj_cli->asignar_valor("ide_cli",@$_POST['ide_cli']);
	$obj_cli->asignar_valor("nom_cli",@$_POST['nom_cli']);
	$obj_cli->asignar_valor("dir_cli",@$_POST['dir_cli']);
	$obj_cli->asignar_valor("tel_cli",@$_POST['tel_cli']);
	$obj_cli->asignar_valor("est_cli",@$_POST['est_cli']);


	switch($accion){
		case "agregar":
			$agr=$obj_cli->agregar();
			$obj_cli->mensaje($agr,$accion,"Cliente");
			break;
		case "modificar":
			$mod=$obj_cli->modificar();
			$obj_cli->mensaje($mod,$accion,"Cliente");
			break;
		case "listar":
			$lis=$obj_cli->listar();
			$obj_cli->mensaje($lis,$accion,"Cliente");
			break;
		case "eliminar":
			$eli=$obj_cli->eliminar();
			$obj_cli->mensaje($eli,$accion,"Cliente");
			break;
		case 'buscar':
			$bus=$obj_cli->buscar($_REQUEST['ced_cli']);
			$obj_cli->mensaje($bus,$accion,"Cliente");
		break;
	
	}

?>

