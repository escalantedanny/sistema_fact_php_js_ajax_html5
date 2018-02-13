<?php 
require("../../clase/marca/marca.class.php");

$obj_mar = new marca;

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de Marcas</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/marca/marca.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<form action="../../controlador/marca/controlador_marca.php" method="POST" accept-charset="utf-8" id="for_mar">

		<input type="hidden" name="accion" id="accion" value="">
		<input type="hidden" name="cod_mar" id="cod_mar" value="cod_mar">

		<div class="contenedor_listado_grande">
			
			<span class="titulo pocision letra_blanca altura30 columna20">Codigo</span>
			<span class="titulo pocision letra_blanca altura30 columna40">Descripcion</span>
			<span class="titulo pocision letra_blanca altura30 columna20">Estatus</span>
			<span class="titulo pocision letra_blanca altura30 columna20">Seleccion</span>
			<!--<span class="titulo pocision letra_blanca altura30 columna10">Eliminar</span>-->

			<?php 

					$mar = $obj_mar->listar();

					while( ($dat_mar = $obj_mar->extraer_dato($mar))>0)
					{
						echo "<span class='pocision altura30 columna20'>$dat_mar[cod_mar]</span>";
						echo "<span class='pocision altura30 columna40'>$dat_mar[nom_mar]</span>";
						echo "<span class='pocision altura30 columna20'>$dat_mar[est_mar]</span>";
						echo "<span class='pocision altura30 columna10'>
							<a href='editar_marca.php?cod_mar=$dat_mar[cod_mar]'>Editar</a></span>";
						echo "<span class='pocision altura30 columna10'>
							<a href='javascript:borrar_marca($dat_mar[cod_mar])'>Eliminar</a></span>";

					}

			 ?>




		</div>
	
	</form>
</body>
</html>



