<?php
session_start();
$email=$_SESSION['email']=$_POST['ema_usu'];
$clave=$_SESSION['cla']=md5($_POST['cla_usu']);
//llamamos a la clase usuario para poder instanciar objeto usuario
require("../../clase/usuario/usuario.class.php");

/*Instanciamos un objeto de la clase usuario dicho objeto podra accesar a todas las variables publicas y funciones publicas de la clases usuario, solo un objeto de esa clase puede abrir la clase opriducto, el this se usa cuando estoy dentro de la calse*/
$obj_usu=new usuario;

$accion=$_REQUEST["accion"];

$obj_usu->asignar_valor("cod_usu",@$_POST['cod_usu']);
$obj_usu->asignar_valor("ced_usu",@$_POST['ced_usu']);
$obj_usu->asignar_valor("ema_usu",@$_POST['ema_usu']);
$obj_usu->asignar_valor("cla_usu",md5(@$_POST['cla_usu']));
$obj_usu->asignar_valor("nom_usu",@$_POST["nom_usu"]);
$obj_usu->asignar_valor("tel_usu",@$_POST['tel_usu']);
$obj_usu->asignar_valor("dir_usu",@$_POST['dir_usu']);
$obj_usu->asignar_valor("fky_rol",@$_POST['fky_rol']);
$obj_usu->asignar_valor("est_usu",@$_POST['est_usu']);



switch($accion)/* el swich realiza la sentencia directa*/
{
	case "agregar":	
		$agr=$obj_usu->agregar();
		$obj_usu->mensaje($agr,$accion,"usuario");
	break;

	case "modificar":
		$mod=$obj_usu->modificar();
		$obj_usu->mensaje($mod,$accion,"usuario");
	break;

	case "listar":
		$lis=$obj_usu->listar();
		$obj_usu->mensaje($lis,$accion,"usuario");
		break;

	case "eliminar":
		$eli=$obj_usu->eliminar();
		$obj_usu->mensaje($eli,$accion,"usuario");
		break;

	case 'buscar':
		$bus=$obj_usu->buscar($_REQUEST['cod_usu']);
		$obj_usu->mensaje($bus,$accion,"usuario");
	break;

	case 'gestionar_permiso':
	
	if ($_REQUEST['est_per']=="true")
        $ret = $obj_usu->agregar_permiso($_REQUEST['fky_usu'],@$_REQUEST['opc_per']);
        else
        $ret = $obj_usu->eliminar_permiso($_REQUEST['fky_usu'],@$_REQUEST['opc_per']);

    echo $ret;
    case 'sesion':
    $res=$obj_usu->session($email,$clave);
    //$obj_usu->mensaje($res,$accion,"usuario");
	echo $res;
	break;
}
?>
