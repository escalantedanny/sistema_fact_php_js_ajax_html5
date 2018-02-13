	<?php 
		require("../../clase/opcion/opcion.class.php");
		require("../../clase/modulo/modulo.class.php");
		$obj_mod = new modulo;
		$obj_opc = new opcion;

		$cod_opc = $_GET["cod_opc"];  /*   recibimos la variable por el metodo get de el framde busqueda para el listado de productos*/

		$dat_opc=$obj_opc->buscar($cod_opc);/*   instanciamos la variable de datos del producto con el codigo*/

    ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<title>Editar Modificar</title>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<script src="../../js/opcion/opcion.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../../js/utilidad/utilidad.js" type="text/javascript" charset="utf-8" async defer></script>
	</head>
<body>
	<form action="../../controlador/opcion/controlador_opcion.php" method="POST" id="for_opc">
		
	<input type="hidden" name="accion" value="modificar">

	<div class="titulo letra_blanca altura30 pocision">Editar Opcion</div>

	<div class="izq">
		<label>Codigo:	</label>
	</div>

	<div class="der">
			<input type="text" name="cod_opc" id="cod_opc" size="20" maxlength="15" value="<?php echo $dat_opc['cod_opc'] ?>">
	</div>

	<div class="izq">
		<label>Nombre: </label>
	</div>
	
	<div class="der">
		<input type="text" name="nom_opc" id="nom_opc" size="50" maxlength="40" value="<?php echo $dat_opc['nom_opc'] ?>">
	</div>

	<div class="izq">
		<label>URL: </label>
	</div>
	
	<div class="der">
		<input type="text" name="url_opc" id="url_opc" size="50" maxlength="40" value="<?php echo $dat_opc['url_opc'] ?>">
	</div>

	<div class="izq">
		<label>Modulo: </label>
	</div>
		
	<div class="der">
		<select name="fky_mod" id="fky_mod">
				<option>Seleccione---</option>		
				<?php 

							$mod=$obj_mod->listar();

							while ( ($dat_mod=$obj_mod->extraer_dato($mod)) >0)
							{
								if ($dat_mod['cod_mod']==$dat_opc['fky_mod'])
								{
									echo "<option value='$dat_mod[cod_mod]' selected >$dat_mod[nom_mod] </option>";
								}else
									{
									echo "<option value='$dat_mod[cod_mod]'$dat_mod[nom_mod] </option>";
									}
									echo "<option value='$dat_mod[cod_mod]'>$dat_mod[nom_mod]</option>";
							}
						 ?>
		</select>
	</div>

	<div class="izq">
		<label>Estatus: </label>
	</div>
				
	<div class="der">
		<?php 
				if($dat_opc["est_opc"]=='A')
				{
			echo '<input type="radio" name="est_opc" value="A" checked="">Activo
				  <input type="radio" name="est_opc" value="I"> Inactivo';
				}else
				{
			echo '<input type="radio" name="est_opc" value="A" >Activo
				  <input type="radio" name="est_opc" value="I" checked=""> Inactivo';		
				}
		 ?>
	</div>

	<div class="pie_formulario pocision letra_blanca altura30">
		<input type="button" name="bot_gua" value="guardar" id="bot_gua" onclick="validar_opcion()" >
	</div>

	</form>
	
</body>
</html>