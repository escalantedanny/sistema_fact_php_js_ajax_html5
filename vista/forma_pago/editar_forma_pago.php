<?php 
require("../../clase/forma_pago/forma_pago.class.php");

$obj_for = new forma_pago;

$cod_for = $_GET['cod_for'];

$dat_for = $obj_for->buscar($cod_for);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Editar Forma de Pago</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>

	<form action="../../controlador/forma_pago/controlador_forma_pago.php" method="POST">

		<input type="hidden" name="accion" value="modificar">

		<div class="titulo letra_blanca altura30 pocision">Editar Forma de Pago</div>

		<div class="izq">
			<label>
					Codigo:
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_for" id="cod_for" size="15" maxlength="11" value="<?php echo $dat_for['cod_for'] ?>"  >
		</div>

		<div class="izq">
			<label>Nombre</label>
		</div>
		<div class="der">
			<input type="text" name="nom_for" id="nom_for" size="30" maxlength="25" value="<?php echo $dat_for['nom_for'] ?>">
		</div>

		<div class="izq">
			<label>Estatus</label>
		</div>
		<div class="der">
			<?php 
				if($dat_for['est_for']=="A")
				{
					echo '<input type="radio" name="est_for" id="est_for" value="A" checked="">Activo
					  <input type="radio" name="est_for" id="est_for" value="I">Inactivo';
				}else
				{
					echo '<input type="radio" name="est_for" id="est_for" value="A">Activo
					  <input type="radio" name="est_for" id="est_for" value="I" checked="">Inactivo';
				}
			 ?>
		</div>
		
		<div class="pie_formulario pocision letra_blanca">
			<input type="submit" name="bot_gua" value="guardar">
		</div>

	</form>	
</body>
</html>