<?php 
require("../../clase/marca/marca.class.php");
require("../../clase/presentacion/presentacion.class.php");

$obj_mar = new marca;
$obj_pre = new presentacion;

  ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<title>Agregar Producto</title>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<script src="../../js/producto/producto.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../../js/utilidad/utilidad.js" type="text/javascript" charset="utf-8" async defer></script>
	</head>
<body>
	<form action="../../controlador/producto/controlador_producto.php" method="POST" id="for_pro">
		
	<input type="hidden" name="accion" value="agregar">

	<div class="titulo letra_blanca altura30 pocision">Agregar Producto</div>

	<div class="izq">
		<label>Codigo del Producto:	</label>
	</div>

	<div class="der">
			<input type="text" name="cod_pro" id="cod_pro" size="20" maxlength="15">
	</div>

	<div class="izq">
		<label>Nombre del Producto: </label>
	</div>
	
	<div class="der">
		<input type="text" name="nom_pro" id="nom_pro" size="50" maxlength="40">
	</div>

	<div class="izq">
		<label>Marca: </label>
	</div>
		
	<div class="der">
		<select name="fky_mar" id="fky_mar">
				<option>Seleccione...</option>
				<?php 
				/* $mar sera el puntero  en la primera marca*/
				$mar=$obj_mar->listar();
				/*$dat_mar es un vector con solo una marca a la vez*/
				while(  ($dat_mar=$obj_mar->extraer_dato($mar)) >0)
				{
		echo "<option value='$dat_mar[cod_mar]'>$dat_mar[nom_mar] </option>";
				}
				
				 ?>

				<!-- esto es para hacer la busqueda estatica
				********************************************
				<select>
					<option value="1">mavesa</option>
					<option value="2">torre</option>
					<option value="3">kraft</option>
					<option value="4">colombina</option>
					<option value="5">camprolac</option>
				</select>
				********************************************
				-->
		</select>
	</div>

	<div class="izq">
		<label>Presentacion: </label>
	</div>
				
	<div class="der">
		<select name="fky_pre" id="fky_pre">
				<option>Seleccione...</option>		
				<?php 

							$pre=$obj_pre->listar();

							while ( ($dat_pre=$obj_pre->extraer_dato($pre)) >0)
							{
				echo "<option value='$dat_pre[cod_pre]'>$dat_pre[nom_pre]</option>";
							}
						 ?>
		</select>
	</div>

	<div class="izq">
		<label>Precio Unitario: </label>
	</div>
				
	<div class="der">
		<input type="text" name="pre_pro" id="pre_pro" size="15" maxlength="11" onkeydown="return soloMoneda(event)">
	</div>

	<div class="izq">
		<label>Fecha de Expedicion: </label>
	</div>
			
	<div class="der">
		<input type="date" id="exp_pro" name="exp_pro" size="15" maxlength="12">
	</div>

	<div class="izq">
		<label>Fecha de Vencimiento: </label>
	</div>
				
	<div class="der">
		<input type="date" id="ven_pro" name="ven_pro" size="15" maxlength="12">
	</div>

	<div class="izq">
		<label>Stock: </label>
	</div>
				
	<div class="der">
		<input type="number" name="sto_pro" id="sto_pro" size="15" maxlength="11">
	</div>

	<div class="izq">
		<label>Estatus: </label>
	</div>
				
	<div class="der">
		<input type="radio" name="est_pro" value="A" checked="">Activo
		<input type="radio" name="est_pro" value="I"> Inactivo
	</div>

	<div class="pie_formulario pocision letra_blanca altura30">
		<input type="button" name="bot_gua" value="guardar" id="bot_gua" onclick="validar_producto()" >
	</div>

	</form>
	
</body>
</html>