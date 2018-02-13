<?php 
require("../../clase/cliente/cliente.class.php");

$obj_cli = new cliente;

$cod_cli= $_GET['cod_cli'];

$dat_cli=$obj_cli->buscar($cod_cli);

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Eliminar Cliente</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<script src="../../js/cliente/cliente.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../../js/utilidad/utilidad.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
<div class="contenedor90">
	<form action="../../controlador/cliente/controlador_cliente.php" method="POST" id="for_cli">

	<input type="hidden" name="accion" value="eliminar">

	<div class="titulo letra_blanca altura30 pocision">Eliminar Cliente</div>
		
		<div>
		<input type="hidden" name="cod_cli" id="cod_cli" size="15" maxlength="11" value="<?php echo $dat_cli['cod_cli'] ?>" >
		</div>

		<div class="izq altura30">
			<label>
				Cedula/Rif: 
			</label>
		</div>
		<div class="der altura30">
			<input type="text" name="ide_cli" id="ide_cli" size="15" maxlength="12"  value="<?php echo $dat_cli['ide_cli'] ?>" readonly="readonly">
			<a href="javascript:buscar_cliente()" id="buscar"><b>  Buscar...</b></a>
		</div>

		<div class="izq altura30">
			<label>
				Nombre /Razon Social
			</label>
		</div>
		<div class="der altura30">
			<input type="text" name="nom_cli" id="nom_cli" size="100" maxlength="60" value="<?php echo $dat_cli['nom_cli'] ?>" readonly="readonly">
		</div>

		<div class="izq altura80">
			<label>
				Direccion:
			</label>
		</div>
		<div class="der altura80">
			<textarea name="dir_cli" id="dir_cli"  readonly="readonly"><?php echo $dat_cli['dir_cli'] ?></textarea>
		</div>

		<div class="izq altura30">
			<label>
				Telefono:
			</label>
		</div>
		<div class="der altura30">
			<input type="tel" name="tel_cli" id="tel_cli" size="20" maxlength="15" value="<?php echo $dat_cli['tel_cli'] ?>" readonly="readonly">
		</div>

		<div class="izq altura30">
		<!-- para que se pueda elegir solo un radio,. la propiedad Name debe ser la misma-->
			<label>
				Estatus:
			</label>
		</div>
		<div class="der altura30">

		<?php
		if ($dat_cli['est_cli']=='A')
		{
			echo '<input type="radio" name="est_cli" value="A" checked="" readonly="readonly">Activo
			<input type="radio" name="est_cli" value="I" readonly="readonly"> Inactivo';
		}
		else
		{
			echo '<input type="radio" name="est_cli" value="A"  readonly="readonly">Activo
			<input type="radio" name="est_cli" value="I" checked="" readonly="readonly"> Inactivo';
		}
		?>
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="button" name="bot_gua" value="Eliminar" id="bot_gua" onclick="borrar_cliente(cod_cli)">
		</div>

	</form>
</div>
</body>
</html>