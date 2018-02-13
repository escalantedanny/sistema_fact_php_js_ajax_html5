<?php
require("../../clase/marca/marca.class.php");

$obj_mar = new marca;

$cod_mar = $_GET['cod_mar'];

$dat_mar = $obj_mar->buscar($cod_mar);

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Editar Marca</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>

	<form action="../../controlador/marca/controlador_marca.php" method="POST">

	<input type="hidden" name="accion" value="modificar">

	<div class="titulo letra_blanca altura30 pocision">Editar Marca</div>

		<div class="izq">
			<label>
				Codigo:
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_mar" id="cod_mar" size="15" maxlength="11" value="<?php echo $dat_mar['cod_mar'] ?> ">
		</div>

		<div class="izq">
			<label>
				Nombre:
			</label>
		</div>
		<div class="der">
			<input type="text" name="nom_mar" id="nom_mar" size="60" maxlength="50" value="<?php echo $dat_mar['nom_mar'] ?> ">
		</div>

		<div class="izq">
			<label>
				Estatus
			</label>
		</div>
		<div class="der">
			<?php  

				if($dat_mar['est_mar']=="A")
				{
					echo '<input type="radio" name="est_mar" id="est_mar" value="A" checked="">Activo		
						  <input type="radio" name="est_mar" id="est_mar" value="I"> Inactivo';
				}
				else
				{
					echo '<input type="radio" name="est_mar" id="est_mar" value="A">Activo		
						  <input type="radio" name="est_mar" id="est_mar" value="I" checked=""> Inactivo';				
				}

			?>
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="submit" name="bot_gua" value="guardar">
		</div>

	</form>
		
</body>
</html>