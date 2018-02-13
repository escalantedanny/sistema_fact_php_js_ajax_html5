<?php 
require("../../clase/producto/producto.class.php");
require("../../clase/marca/marca.class.php");
$obj_pro=new producto;
$obj_mar=new marca;

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de Productos</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/producto/producto.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
	<body>

	
	    <!--  realizamos el form para poder llamar al controlador que es el unico que puede levantar la clase para que toquemla base de datos y pueda eliminar  -->
		<form action="../../controlador/producto/controlador_producto.php" method="POST" accept-charset="utf-8" id="for_pro">

		<input type="hidden" name="accion" value="" id="accion">
		<input type="hidden" name="cod_pro" value=cod_pro id="cod_pro">


				<div class="contenedor_listado_grande">
					
					<span class="columna20 titulo letra_blanca pocision altura30">Codigo</span>
					<span class="columna40 titulo letra_blanca pocision altura30">Nombre</span>
					<span class="columna20 titulo letra_blanca pocision altura30">Marca</span>
					<span class="columna10 titulo letra_blanca pocision altura30">Editar</span>
					<span class="columna10 titulo letra_blanca pocision altura30">Borrar</span>

				<?php 
					$pro=$obj_pro->listar();
					while(($dat_pro=$obj_pro->extraer_dato($pro))>0)
					{
							echo "<span class='columna20 altura30'>$dat_pro[cod_pro]</span>";
							echo "<span class='columna40 altura30'>$dat_pro[nom_pro]</span>";
							echo "<span class='columna20 altura30'>$dat_pro[fky_mar]</span>";
							echo "<span class='columna10 altura30'>
								<a href='editar_producto.php?cod_pro=$dat_pro[cod_pro]'>Editar</a></span>";
							/*echo "<span class='columna10 altura30'>
					<a href='javascript:borrar_producto(\"".$dat_pro['cod_pro']."\")'>Eliminar</a></span>";*/
					}
				 ?>

				</div>
		</form>
		
	</body>
</html>