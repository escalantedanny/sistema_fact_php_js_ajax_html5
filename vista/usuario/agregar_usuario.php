<?php 
require("../../clase/rol/rol.class.php");
$obj_rol = new rol;
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Agregar Usuario</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<script src="../../js/usuario/usuario.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../../js/utilidad/utilidad.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<form action="../../controlador/usuario/controlador_usuario.php" method="POST" id="for_usu">
	<input type="hidden" name="accion" value="agregar">
	<div class="titulo letra_blanca altura30 pocision">Agregar Usuario</div>
		<!--
		<div class="izq">
			<label>
				Codigo:
			</label>
		</div>
		<div class="der">
			<input type="text" name="cod_usu" id="cod_usu" size="15" maxlength="11">
		</div>
		-->
		<div class="izq">
			<label>
				Cedula:
			</label>
		</div>
		<div class="der">
			<input type="text" name="ced_usu" id="ced_usu" size="15" maxlength="11">
		</div>

		<div class="izq">
			<label>
				Email:
			</label>
		</div>
		<div class="der">
			<input type="text" name="ema_usu" id="ema_usu" size="60" maxlength="55|">
		</div>
		
		<div class="izq">
			<label>
				Clave:
			</label>
		</div>
		<div class="der">
			<input type="password" name="cla_usu" id="cla_usu" size="15" maxlength="11">
		</div>

		<div class="izq">
			<label>
				Nombre:
			</label>
		</div>
		<div class="der">
			<input type="text" name="nom_usu" id="nom_usu" size="60" maxlength="50">
		</div>

		<div class="izq">
			<label>
				Telefono:
			</label>
		</div>
		<div class="der">
			<input type="text" name="tel_usu" id="tel_usu" size="15" maxlength="11" onkeydown="return validar_numero(event)">
		</div>

		<div class="izq">
			<label>
				Direccion:
			</label>
		</div>
		<div class="der">
		<textarea name="dir_usu" id="dir_usu"></textarea>
			
		</div>

		<div class="izq">
			<label>
				Rol:
			</label>
		</div>
		<div class="der">
		<select name="fky_rol" id="fky_rol">
				<option>Seleccione...</option>
				<?php 
						/* $mar sera el puntero  en la primera marca*/
						$rol=$obj_rol->listar();
						/*$dat_rol es un vector con solo una rolca a la vez*/
						while(  ($dat_rol=$obj_rol->extraer_dato($rol)) >0)
						{
				echo "<option value='$dat_rol[cod_rol]'>$dat_rol[nom_rol] </option>";
						}
				
				 ?>
		</select>
		</div>

		<div class="izq">
			<label>
				Estatus
			</label>
		</div>
		<div class="der">
			<input type="radio" name="est_usu" id="est_usu" value="A" checked="">	Activo		
			<input type="radio" name="est_usu" id="est_usu" value="I"> Inactivo
		</div>

		<div class="pie_formulario pocision letra_blanca">
			<input type="button" name="bot_gua" value="guardar" onclick="validar_usuario()">
		</div>

	</form>
		
</body>
</html>