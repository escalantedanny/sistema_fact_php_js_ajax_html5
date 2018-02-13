	<?php 
		require("../../clase/modulo/modulo.class.php");
		$obj_mod = new modulo;
    ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<title>Agregar Opcion</title>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<script src="../../js/opcion/opcion.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../../js/utilidad/utilidad.js" type="text/javascript" charset="utf-8" async defer></script>
	</head>
<body>
	<form action="../../controlador/opcion/controlador_opcion.php" method="POST" id="for_opc">
		
	<input type="hidden" name="accion" value="agregar">

	<div class="titulo letra_blanca altura30 pocision">Agregar Opcion</div>
<!--
	<div class="izq">
		<label>Codigo:	</label>
	</div>

	<div class="der">
			<input type="text" name="cod_opc" id="cod_opc" size="20" maxlength="15">
	</div>
-->
	<div class="izq">
		<label>Nombre: </label>
	</div>
	
	<div class="der">
		<input type="text" name="nom_opc" id="nom_opc" size="50" maxlength="40">
	</div>

	<div class="izq">
		<label>URL: </label>
	</div>
	
	<div class="der">
		<input type="text" name="url_opc" id="url_opc" size="50" maxlength="40">
	</div>

	<div class="izq">
		<label>Modulo: </label>
	</div>
		
	<div class="der">
		<select name="fky_mod" id="fky_mod">
				<option>Seleccione...</option>
				<?php 
						/* $mar sera el puntero  en la primera marca*/
						$mod=$obj_mod->listar();
						/*$dat_mod es un vector con solo una modca a la vez*/
						while(  ($dat_mod=$obj_mod->extraer_dato($mod)) >0)
						{
				echo "<option value='$dat_mod[cod_mod]'>$dat_mod[nom_mod] </option>";
						}
				
				 ?>
		</select>
	</div>

	<div class="izq">
		<label>Estatus: </label>
	</div>
				
	<div class="der">
		<input type="radio" name="est_opc" value="A" checked="">Activo
		<input type="radio" name="est_opc" value="I"> Inactivo
	</div>

	<div class="pie_formulario pocision letra_blanca altura30">
		<input type="submit" name="bot_gua" value="guardar" id="bot_gua">
	</div>

	</form>
	
</body>
</html>