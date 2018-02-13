<?php 
require("../../clase/modulo/modulo.class.php");

$obj_mod = new modulo;

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de Modulos</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/modulo/modulo.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<form action="../../controlador/modulo/controlador_modulo.php" method="POST" accept-charset="utf-8" id="for_mod">

		<input type="hidden" name="accion" id="accion" value="">
		<input type="hidden" name="cod_mod" id="cod_mod" value="cod_mod">

		<div class="contenedor_listado_grande">
			
			<span class="titulo pocision letra_blanca altura30 columna20">Codigo</span>
			<span class="titulo pocision letra_blanca altura30 columna40">Descripcion</span>
			<span class="titulo pocision letra_blanca altura30 columna20">Estatus</span>
			<span class="titulo pocision letra_blanca altura30 columna20">Seleccion</span>
			<!--<span class="titulo pocision letra_blanca altura30 columna10">Eliminar</span>-->

			<?php 

					$mod = $obj_mod->listar();

					while( ($dat_mod = $obj_mod->extraer_dato($mod))>0)
					{
						echo "<span class='pocision altura30 columna20'>$dat_mod[cod_mod]</span>";
						echo "<span class='pocision altura30 columna40'>$dat_mod[nom_mod]</span>";
						echo "<span class='pocision altura30 columna20'>$dat_mod[est_mod]</span>";
						echo "<span class='pocision altura30 columna10'>
							<a href='editar_modulo.php?cod_mod=$dat_mod[cod_mod]'>Editar</a></span>";
						echo "<span class='pocision altura30 columna10'>
							<a href='javascript:borrar_modulo($dat_mod[cod_mod])'>Eliminar</a></span>";
					}
			 ?>

		</div>
	
	</form>
</body>
</html>



