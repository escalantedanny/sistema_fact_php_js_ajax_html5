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
	<title>Editar Cliente</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<script src="../../js/cliente/cliente.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../../js/utilidad/utilidad.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
<div class="contenedor90">
	<form action="../../controlador/cliente/controlador_cliente.php" method="POST" id="for_cli">

	<input type="hidden" name="accion" value="modificar">

	<div class="titulo letra_blanca altura30 pocision">Editar Cliente</div>
		

		<div class="izq altura30">
			<label>
				Cedula/Rif: 
			</label>
		</div>
		<div class="der altura30">
			<input type="text" name="ide_cli" id="ide_cli" size="15" maxlength="12"  value="<?php echo $dat_cli['ide_cli'] ?>">
		</div>

		<div class="izq altura30">
			<label>
				Nombre /Razon Social
			</label>
		</div>
		<div class="der altura30">
			<input type="text" name="nom_cli" id="nom_cli" size="100" maxlength="60" value="<?php echo $dat_cli['nom_cli'] ?>">
		</div>

		<div class="izq altura80">
			<label>
				Direccion:
			</label>
		</div>
		<div class="der altura80">
			<textarea name="dir_cli" id="dir_cli" ><?php echo $dat_cli['dir_cli'] ?></textarea>
		</div>

		<div class="izq altura30">
			<label>
				Telefono:
			</label>
		</div>
		<div class="der altura30">
			<input type="tel" name="tel_cli" id="tel_cli" size="20" maxlength="15" value="<?php echo $dat_cli['tel_cli'] ?>"  onkeydown="return validar_numero(event)">
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
			echo '<input type="radio" name="est_cli" value="A" checked="">Activo
			<input type="radio" name="est_cli" value="I"> Inactivo';
		}
		else
		{
			echo '<input type="radio" name="est_cli" value="A" >Activo
			<input type="radio" name="est_cli" value="I" checked=""> Inactivo';
		}
		?>
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="button" name="bot_gua" value="Guardar" id="bot_gua" onclick="validar_cliente()">
		</div>

	</form>
</div>
</body>
</html>