<?php 
require("../../clase/presentacion/presentacion.class.php");

$obj_pre = new presentacion;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar Presentacion</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/presentacion/presentacion.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
	<form action="../../controlador/presentacion/controlador_presentacion.php" method="POST" accept-charset="utf-8" id="for_pre">

		<input type="hidden" name="accion" id="accion" value="">
		<input type="hidden" name="cod_pre" id="cod_pre" value="cod_pre">
	
			<div class="contenedor_listado_grande">
				
					<span class="titulo letra_blanca pocision altura30 columna10">Codigo</span>
					<span class="titulo letra_blanca pocision altura30 columna40">Descripcion</span>
					<span class="titulo letra_blanca pocision altura30 columna10">Estatus</span>
					<span class="titulo letra_blanca pocision altura30 columna20">Editar</span>
					<span class="titulo letra_blanca pocision altura30 columna20">Borrar</span>


					<?php 
						$pre=$obj_pre->listar();
						while( ($dat_pre=$obj_pre->extraer_dato($pre))>0 )
						{
							echo "<span class='pocision altura30 columna10'>$dat_pre[cod_pre]</span>";
							echo "<span class='pocision altura30 columna40'>$dat_pre[nom_pre]</span>";
							echo "<span class='pocision altura30 columna10'>$dat_pre[est_pre]</span>";
							echo "<span class='pocision altura30 columna20'>
								<a href='editar_presentacion.php?cod_pre=$dat_pre[cod_pre]'>Editar</a></span>";
							echo "<span class='pocision altura30 columna20'>
							    <a href='javascript:borrar_presentacion($dat_pre[cod_pre])'>Borrar</a></span>";
						}

					 ?>			
			</div>

	</form>

</body>
</html>
