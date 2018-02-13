<?php
require("../../clase/rol/rol.class.php");

$obj_rol = new rol;

$cod_rol = $_GET['cod_rol'];

$dat_rol = $obj_rol->buscar($cod_rol);

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Editar Rol</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<script src="../../js/rol/rol.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<form action="../../controlador/rol/controlador_rol.php" method="POST" id="for_rol">

	<input type="hidden" name="accion" value="modificar">

	<div class="titulo letra_blanca altura30 pocision">Editar Rol</div>
<!--
		<div class="izq">
			<label>
				Codigo:
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_rol" id="cod_rol" size="15" maxlength="11"  ">
		</div>
-->
		<div class="izq">
			<label>
				Nombre:
			</label>
		</div>
		<div class="der">
			<input type="text" name="nom_rol" id="nom_rol" size="60" maxlength="50" value="<?php echo $dat_rol['nom_rol'] ?> ">
		</div>

		<div class="izq">
			<label>
				Estatus
			</label>
		</div>
		<div class="der">
			<?php  
				if($dat_rol['est_rol']=="A")
				{
					echo '<input type="radio" name="est_rol" id="est_rol" value="A" checked="">Activo		
						  <input type="radio" name="est_rol" id="est_rol" value="I"> Inactivo';
				}
				else
				{
					echo '<input type="radio" name="est_rol" id="est_rol" value="A">Activo		
						  <input type="radio" name="est_rol" id="est_rol" value="I" checked=""> Inactivo';				
				}

			?>
		</div>
		<div class="pie_formulario pocision letra_blanca">
			<input type="button" name="bot_gua" value="guardar" onclick="validar_rol()">
		</div>

	</form>
		
</body>
</html>