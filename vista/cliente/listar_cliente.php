<?php 
require("../../clase/cliente/cliente.class.php");
$obj_cli = new cliente;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar Cliente</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/cliente/cliente.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
	<body>

		<form action="../../controlador/cliente/controlador_cliente.php" method="POST" id="for_cli"  accept-charset="utf-8">

			<input type="hidden" name="accion" id="accion" value="">
			<input type="hidden" name="cod_cli" id="cod_cli" value="cod_cli">

			
				<div class="contenedor_listado_grande">
					
					<span class="titulo columna10 letra_blanca altura30 pocision">Codigo</span>
					<span class="titulo columna10 letra_blanca altura30 pocision">Identificador</span>
					<span class="titulo columna40 letra_blanca altura30 pocision">Nombre</span>
					<span class="titulo columna20 letra_blanca altura30 pocision">Editar</span>
					<span class="titulo columna20 letra_blanca altura30 pocision">Borrar</span>
					
		
					<?php  
						$cli = $obj_cli->listar();
						while(($dat_cli=$obj_cli->extraer_dato($cli)) >0)
						{
							echo "<span class='columna10 altura30 pocision'>$dat_cli[cod_cli]</span>";
							echo "<span class='columna10 altura30 pocision'>$dat_cli[ide_cli]</span>";
							echo "<span class='columna40 altura30 derechaText'>$dat_cli[nom_cli]</span>";
							echo "<span class='columna20 altura30 pocision'>
								<a href='editar_cliente.php?cod_cli=$dat_cli[cod_cli]' >Editar</a></span>";
							echo "<span class='columna20 altura30 pocision'>
								<a href='eliminar_cliente.php?cod_cli=$dat_cli[cod_cli]'>Eliminar</a></span>";
							/*
							echo "<span class='columna20 altura30 pocision'>
								<a href='javascript:borrar_cliente($dat_cli[cod_cli])'>Eliminar</a></span>";
							*/
						}

					?>
				 	
				</div>
		</form>
	</body>
</html>