<?php 
require("../../clase/usuario/usuario.class.php");

$obj_usu = new usuario;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<script src="../../js/usuario/usuario.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
	<form action="../../controlador/usuario/controlador_usuario.php" method="POST" accept-charset="utf-8" id="for_usu">

		<input type="hidden" name="accion" id="accion" value="">
		<input type="hidden" name="cod_usu" id="cod_usu" value="cod_usu">
	
			<div class="contenedor_listado_grande">
				
					<span class="titulo letra_blanca pocision altura30 columna10">Cedula</span>
					<span class="titulo letra_blanca pocision altura30 columna40">Nombre</span>
					<span class="titulo letra_blanca pocision altura30 columna30">Permisos</span>
					<span class="titulo letra_blanca pocision altura30 columna10">Editar</span>
					<span class="titulo letra_blanca pocision altura30 columna10">Borrar</span>


					<?php 
						$usu=$obj_usu->listar();
						while( ($dat_usu=$obj_usu->extraer_dato($usu))>0 )
						{
							echo "<span class='pocision altura30 columna10'>$dat_usu[ced_usu]</span>";
							echo "<span class='pocision altura30 columna40'>$dat_usu[nom_usu]</span>";
							echo "<span class='pocision altura30 columna30'>
                                  <a href='ver_permiso.php?fky_usu=$dat_usu[cod_usu]'>Ver permisos</a></span>";
							echo "<span class='pocision altura30 columna10'>
								<a href='editar_usuario.php?cod_usu=$dat_usu[cod_usu]'>Editar</a></span>";
							echo "<span class='pocision altura30 columna10'>
							    <a href='javascript:borrar_usuario($dat_usu[cod_usu])'>Borrar</a></span>";
						}

					 ?>			
			</div>

	</form>

</body>
</html>
