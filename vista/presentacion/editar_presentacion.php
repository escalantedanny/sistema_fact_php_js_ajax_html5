<?php

require("../../clase/presentacion/presentacion.class.php");

$obj_pre = new presentacion;

$cod_pre = $_GET['cod_pre'];

$dat_pre = $obj_pre->buscar($cod_pre);


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Editar Presentacion</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	
</head>
<body>
	
	<form action="../../controlador/presentacion/controlador_presentacion.php" method="POST">

		<input type="hidden" name="accion" value="modificar">

		<div class="titulo letra_blanca altura30 pocision">Editar ¨Presentacion</div>

		<div class="izq">
			<label>
				Codigo: 
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_pre" id="cod_pre" size="15" maxlength="11"  value=" <?php echo $dat_pre['cod_pre'] ?>">
		</div>

		<div class="izq">
			<label>
				Nombre: 
			</label>
		</div>
		<div class="der">
			<input type="text" name="nom_pre" id="nom_pre" size="60" maxlength="40" value="  <?php echo $dat_pre['nom_pre'] ?> ">
		</div>

		<div class="izq">
			<label>
				Estatus: 
			</label>
		</div>
		<div class="der">


		<?php  

			if ($dat_pre['est_pre']=='A')
			{
				echo '<input type="radio" name="est_pre" value="A" checked="">Activo
					  <input type="radio" name="est_pre" value="I">Inactivo';
			}else
			{
				echo '<input type="radio" name="est_pre" value="A">Activo
					  <input type="radio" name="est_pre" value="I" checked="">Inactivo';
			}

		?>	
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="submit" name="bot_gua" value=guardar>
		</div>

	</form>
</body>
</html>