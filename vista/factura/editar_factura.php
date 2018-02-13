<?php 
require("../../clase/cliente/cliente.class.php");
require("../../clase/forma_pago/forma_pago.class.php");
require("../../clase/factura/factura.class.php");

$obj_cli = new cliente;
$obj_for = new forma_pago;
$obj_fac = new factura;

$num_fac = $_GET['num_fac'];

$dat_fac = $obj_fac->buscar($num_fac);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
 	<title>Editar Factura</title>
 	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
 </head>
 <body>
 <div class="contenedor90">
 	<form action="../../controlador/factura/controlador_factura.php" method="POST">

 	<input type="hidden" name="accion" value="agregar">

 	<div class="titulo letra_blanca altura30 pocision">Editar Factura</div>

	<div class="izq">
		<label>
			Numero Factura:
		</label>
	</div>
	<div class="der">
		<input type="text" name="num_fac" id="num_fac" size="15" maxlength="11" value="<?php echo $dat_fac['num_fac'] ?>">
	</div>

	<div class="izq">
		<label>
			Numero de Control: 
		</label>
	</div>
	<div class="der">
		<input type="text" name="ctr_fac" id="ctr_fac" size="15" maxlength="11"  value="<?php echo $dat_fac['ctr_fac'] ?>">
	</div>

	<div class="izq">
		<label>
			Fecha de Factura:
		</label>
	</div>
	<div class="der">
		<input type="date" name="fec_fac" id="fec_fac" size="15" maxlength="12" value="<?php echo $dat_fac['fec_fac'] ?>">
	</div>

	<div class="izq">
		<label>
			Codigo Cliente:
		</label>
	</div>
	<div class="der">
		<select name="fky_cli" id="fky_cli">
			<?php 

				$cli = $obj_cli->listar();

				while( ($dat_cli= $obj_cli->extraer_dato($cli) ) >0)
				{
echo "<option value='$dat_cli[cod_cli]''>$dat_cli[cod_cli] $dat_cli[nom_cli]</option>";
				}


			 ?>
		</select>
	</div>

	<div class="izq">
		<label>
			Forma de Pago:
		</label>
	</div>
	<div class="der">
		<select name="fky_for" id="fky_for">
		<?php 
				$for = $obj_for->listar();
			 	 while( ( $dat_for=$obj_for->extraer_dato($for) ) >0)
			 	 {
echo "<option value='$dat_for[cod_for]'>$dat_for[nom_for]</option>";			 	 	
			 	 }
		 ?>
		 </select>
	</div>

	<div class="izq">
		<label>
			Tipo de Pago:
		</label>
	</div>
	<div class="der">


	<?php 
			if($dat_fac["con_fac"]=='C')
			{
		echo '<input type="radio" name="con_fac" id="con_fac" value="C" checked="">Contado
		      <input type="radio" name="con_fac" id="con_fac" value="R">Credito';
			}else
			{
		echo '<input type="radio" name="con_fac" id="con_fac" value="C">Contado
		      <input type="radio" name="con_fac" id="con_fac" value="C" checked="">Credito';	
			}


		 ?>

	</div>

	<div class="izq">
		<label>
			Fecha de Vencimiento:
		</label>
	</div>
	<div class="der">
		<input type="date" name="fec_ven" id="fec_ven" size="15" maxlength="12"  value="<?php echo $dat_fac['ven_fac'] ?>">
	</div>

	<div class="izq">
		<label>
			Subtotal: 
		</label>
	</div>
	<div class="der">
		<input type="number" name="sub_fac"  value="<?php echo $dat_fac['sub_fac'] ?>">
	</div>

	<div class="izq">
		<label>
			Impuesto:
		</label>
	</div>
	<div class="der">
		<input type="number" name="imp_fac"  value="<?php echo $dat_fac['imp_fac'] ?>">
	</div>

	<div class="izq">
		<label>
			Total:
		</label>
	</div>
	<div class="der">
		<input type="number" name="tot_fac"  value="<?php echo $dat_fac['tot_fac'] ?>">
	</div>
<!-- comentariooooooooooooo -->
	<div class="izq">
		<label>.
			Estatus
		</label>
	</div>
	<div class="der">

	<?php 
			if($dat_fac["con_fac"]=='C')
			{
		echo '<input type="radio" name="est_fac" id="est_fac" value="A" checked="">Activo
			  <input type="radio" name="est_fac" id="est_fac" value="I">Inactivo';
			}else
			{
		echo '<input type="radio" name="est_fac" id="est_fac" value="A">Activo
			  <input type="radio" name="est_fac" id="est_fac" value="I" checked="">Inactivo';
			}

		 ?>
	</div>


 		
	<div class="pie_formulario pocision letra_blanca">
		<input type="submit" name="bot_gua" value="Guardar" id="bot_gua">
	</div>

 	</form>
 </div>	
 </body>
 </html>