<?php 
require("../../clase/forma_pago/forma_pago.class.php");

$obj_for = new forma_pago;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Formas de Pago</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/forma_pago/forma_pago.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

<form action="../../controlador/forma_pago/controlador_forma_pago.php" method="POST"  accept-charset="utf-8" id="for_for">

	<input type="hidden" name="accion" id="accion" value="">
	<input type="hidden" name="cod_for" id="cod_for" value="cod_for">

		<div class="contenedor_listado_grande">
			
			<span class="titulo letra_blanca pocision altura30 columna10">Codigo</span>
			<span class="titulo letra_blanca pocision altura30 columna40">Descripcion</span>
			<span class="titulo letra_blanca pocision altura30 columna10">Estatus</span>
			<span class="titulo letra_blanca pocision altura30 columna20">Editar</span>
			<span class="titulo letra_blanca pocision altura30 columna20">Eliminar</span>

			<?php 
				
					$for = $obj_for->listar();

					while( ($dat_for = $obj_for->extraer_dato($for))>0)
					{
						echo "<span class='pocision altura30 columna10'>$dat_for[cod_for]</span>";
						echo "<span class='pocision altura30 columna40'>$dat_for[nom_for]</span>";
						echo "<span class='pocision altura30 columna10'>$dat_for[est_for]</span>";
						echo "<span class='pocision altura30 columna20'>
							<a href='editar_forma_pago.php?cod_for=$dat_for[cod_for]'>Editar</a></span>";
						echo "<span class='pocision altura30 columna20'>
							<a href='javascript:borrar_forma_pago($dat_for[cod_for])'>Eliminar</a></span>";

					}

			?>

		</div>


</form>
</body>
</html>

