<?php
require_once("../../clase/marca/marca.class.php");
require_once("../../clase/producto/producto.class.php");
$cod_pro=$_GET ["cod_pro"];/*aqui recibo el codigo del producto enviado en el listado. recordarn: modificar_producto.php?cod_pro=$pro[cod_pro] el listar_producto.php*/

$obj_pro = new producto;
$pro=$obj_pro->buscar_producto($cod_pro);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>modificar Producto</title>
</head>
<body>
	<form action="../../controlador/producto/controlador_producto.php" method="POST">

	<input type="hidden" name="accion" value="modificar">
	
	<div class="titulo">modificar Producto</div>

	<div class="izq">
		<label>
			Código: 
		</label>
	</div>
	<div class="der">
		<input type="text" name="cod_pro" id="cod_pro" size="15" maxlength="11" required="required" value="<?php echo $pro[cod_pro] ?>">	
	</div>

		<div class="pie_formulario">
			<input type="submit" name="bot_gua" value=Buscar>
		</div>

	</form>
</body>
</html>