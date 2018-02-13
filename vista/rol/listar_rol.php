<?php 
require("../../clase/rol/rol.class.php");

$obj_rol = new rol;

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de Roles</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/rol/rol.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<form action="../../controlador/rol/controlador_rol.php" method="POST" accept-charset="utf-8" id="for_rol">

		<input type="hidden" name="accion" id="accion" value="">
		<input type="hidden" name="cod_rol" id="cod_rol" value="cod_rol">

		<div class="contenedor_listado_grande">
			
			<span class="titulo pocision letra_blanca altura30 columna20">Codigo</span>
			<span class="titulo pocision letra_blanca altura30 columna40">Descripcion</span>
			<span class="titulo pocision letra_blanca altura30 columna20">Estatus</span>
			<span class="titulo pocision letra_blanca altura30 columna20">Seleccion</span>
			<!--<span class="titulo pocision letra_blanca altura30 columna10">Eliminar</span>-->
			<?php 
					$rol = $obj_rol->listar();

					while( ($dat_rol = $obj_rol->extraer_dato($rol))>0)
					{
						echo "<span class='pocision altura30 columna20'>$dat_rol[cod_rol]</span>";
						echo "<span class='pocision altura30 columna40'>$dat_rol[nom_rol]</span>";
						echo "<span class='pocision altura30 columna20'>$dat_rol[est_rol]</span>";
						echo "<span class='pocision altura30 columna10'>
							<a href='editar_rol.php?cod_rol=$dat_rol[cod_rol]'>Editar</a></span>";
						echo "<span class='pocision altura30 columna10'>
							<a href='javascript:borrar_rol($dat_rol[cod_rol])'>Eliminar</a></span>";
					}
			 ?>
		</div>
	</form>
</body>
</html>



