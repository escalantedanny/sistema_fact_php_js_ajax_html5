<?php
//Llamamos a la clase producto para poder instanciar un objeto producto
require("../../../curso_web_octubre/clase/producto/producto.class.php");
/* Instanciamos un objeto de la clase producto dicho objeto podrá accesar a todas las variables públicas y funciones públicas de la clase producto
*/
$obj_pro=new producto;

/*Del formulario recibiremos una variable llamada accion que nos dirá que desea hacer el usuario: agregar, modificar,listar o eliminar*/
$accion=$_REQUEST['accion']; //POST y GET son los 2 métodos de envío
/*
$_POST[] es un vector con los datos enviados en el formulario.
Ejemplo:
$_POST["cod_pro"] vale P001
$_POST["nom_pro"] vale Mayonesa
$_POST["est_pro"] vale A
*/
$obj_pro->asignar_valor("cod_pro",@$_POST["cod_pro"]);
$obj_pro->asignar_valor("nom_pro",@$_POST["nom_pro"]);
$obj_pro->asignar_valor("fky_mar",@$_POST["fky_mar"]);
$obj_pro->asignar_valor("fky_pre",@$_POST["fky_pre"]);
$obj_pro->asignar_valor("pre_pro",@$_POST["pre_pro"]);
$obj_pro->asignar_valor("exp_pro",@$_POST["exp_pro"]);
$obj_pro->asignar_valor("ven_pro",@$_POST["ven_pro"]);
$obj_pro->asignar_valor("sto_pro",@$_POST["sto_pro"]);
$obj_pro->asignar_valor("est_pro",@$_POST["est_pro"]);


switch($accion)
    {
      case "agregar";
      		$agr=$obj_pro->agregar();
          $obj_pro->mensaje($agr,$accion,"Producto");
      break;

      case "modificar":
      		$mod=$obj_pro->modificar();
          $obj_pro->mensaje($mod,$accion,"Producto");
      break;

      case "listar":
      		$lis=$obj_pro->listar();
          $obj_pro->mensaje($lis,$accion,"Producto");
      break;

      case "eliminar":
      		$eli=$obj_pro->eliminar();
          $obj_pro->mensaje($eli,$accion,"Producto");
      break;

      case "buscar_producto":
          $pro=$obj_pro->buscar($_GET['cod_pro']); // enviamos el parametro a la clase con el metodo GET para bsucar el producto y devolverlo a la grids de factura
          echo $pro['nom_pro']."#".$pro["pre_pro"]."#".$pro['sto_pro'];
      break;
      
    }

?>