<?php 
require_once("../../clase/opcion/opcion.class.php");
require_once("../../clase/modulo/modulo.class.php");
$obj_opc=new opcion;
$obj_mod=new modulo;

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de Opciones</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/opcion/opcion.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
	<body>

		<form action="../../controlador/opcion/controlador_opcion.php" method="POST" accept-charset="utf-8" id="for_opc">

		<input type="hidden" name="accion" value="" id="accion">
		<input type="hidden" name="cod_opc" value=cod_opc id="cod_opc">


				<div class="contenedor_listado_grande">
					
					<span class="columna20 titulo letra_blanca pocision altura30">Codigo</span>
					<span class="columna40 titulo letra_blanca pocision altura30">Nombre</span>
					<span class="columna20 titulo letra_blanca pocision altura30">Modulo</span>
					<span class="columna10 titulo letra_blanca pocision altura30">Editar</span>
					<span class="columna10 titulo letra_blanca pocision altura30">Borrar</span>

				<?php 
					$opc=$obj_opc->listar();
					while(($dat_opc=$obj_opc->extraer_dato($opc))>0)
					{
							echo "<span class='columna20 altura30'>$dat_opc[cod_opc]</span>";
							echo "<span class='columna40 altura30'>$dat_opc[nom_opc]</span>";
							echo "<span class='columna20 altura30'>$dat_opc[fky_mod]</span>";
							echo "<span class='columna10 altura30'>
								<a href='editar_opcion.php?cod_opc=$dat_opc[cod_opc]'>Editar</a></span>";
							echo "<span class='columna10 altura30'>
					<a href='javascript:borrar_opcion($dat_opc[cod_opc])'>Eliminar</a></span>";
					}
				 ?>

				</div>
		</form>
		
	</body>
</html>