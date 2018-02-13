<?php
require("../../clase/modulo/modulo.class.php");

$obj_mod = new modulo;

$cod_mod = $_GET['cod_mod'];

$dat_mod = $obj_mod->buscar($cod_mod);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Agregar Modulo</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<script src="../../js/modulo/modulo.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<form action="../../controlador/modulo/controlador_modulo.php" method="POST" id="for_mod">

	<input type="hidden" name="accion" value="modificar">

	<div class="titulo letra_blanca altura30 pocision">Editar Modulo</div>

		<div class="izq">
			<label>
				Codigo:
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_mod" id="cod_mod" size="15" maxlength="11" value="<?php echo $dat_mod['cod_mod'] ?>">
		</div>

		<div class="izq">
			<label>
				Nombre:
			</label>
		</div>
		<div class="der">
			<input type="text" name="nom_mod" id="nom_mod" size="60" maxlength="50" value="<?php echo $dat_mod['nom_mod'] ?>">
		</div>

		<div class="izq">
			<label>
				Ruta:
			</label>
		</div>
		<div class="der">
			<input type="text" name="rut_mod" id="rut_mod" size="60" maxlength="50" value="<?php echo $dat_mod['rut_mod'] ?>">
		</div>

		<div class="izq">
			<label>
				Estatus
			</label>
		</div>
		<div class="der">
			<?php  

				if($dat_mod['est_mod']=="A")
				{
					echo '<input type="radio" name="est_mod" id="est_mod" value="A" checked="">Activo		
						  <input type="radio" name="est_mod" id="est_mod" value="I"> Inactivo';
				}
				else
				{
					echo '<input type="radio" name="est_mod" id="est_mod" value="A">Activo		
						  <input type="radio" name="est_mod" id="est_mod" value="I" checked=""> Inactivo';				
				}

			?>
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="submit" name="bot_gua" value="guardar"">
		</div>

	</form>
	
</body>
</html>