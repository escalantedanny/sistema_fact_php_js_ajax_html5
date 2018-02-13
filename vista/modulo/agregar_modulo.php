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

	<input type="hidden" name="accion" value="agregar">

	<div class="titulo letra_blanca altura30 pocision">Agregar Modulo</div>
<!--
		<div class="izq">
			<label>
				Codigo:
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_mod" id="cod_mod" size="15" maxlength="11">
		</div>
-->
		<div class="izq">
			<label>
				Nombre:
			</label>
		</div>
		<div class="der">
			<input type="text" name="nom_mod" id="nom_mod" size="60" maxlength="50">
		</div>

		<div class="izq">
			<label>
				Ruta:
			</label>
		</div>
		<div class="der">
			<input type="text" name="rut_mod" id="rut_mod" size="60" maxlength="50">
		</div>

		<div class="izq">
			<label>
				Estatus
			</label>
		</div>
		<div class="der">
			<input type="radio" name="est_mod" id="est_mod" value="A" checked="">Activo		
			<input type="radio" name="est_mod" id="est_mod" value="I"> Inactivo
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="button" name="bot_gua" value="guardar" onclick="validar_modulo()">
		</div>

	</form>
	
</body>
</html>