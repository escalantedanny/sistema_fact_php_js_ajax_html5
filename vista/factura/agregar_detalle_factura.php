<?php 

require("../../clase/factura/factura.class.php");
require("../../clase/producto/producto.class.php");

$obj_fac = new factura;
$obj_pro = new producto;

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Agregar Detalle Factura</title>
 </head>
 <body>
 	<form action="../../controlador/factura/controlador_detalle_factura.php" method="POST">

 	<input type="hidden" name="accion" value="agregar">

	<titulo class="titulo">Agregar Detalle Factura</titulo>

	<div class="izq">
		<label>
			Codigo:
		</label>
	</div>
	<div class="der">
		<input type="text" name="ide_det" id="ide_det" size="15" maxlength="11">
	</div>

	<div class="izq">
		<label>
			Numero Factura:
		</label>
	</div>
	<div class="der">
		<select name="fky_fac" id="fky_fac">
			<?php
			$num = $obj_fac->listar();
			
			while( ($dat_fac = $obj_fac->extraer_dato($num) )>0)
			{
echo "<option value=$dat_fac[num_fac]>$dat_fac[num_fac] $dat_fac[ctr_fac]</option>";
			}
			?>
		</select>
	</div>

	<div class="izq">
		<label>
			Codigo Producto:
		</label>
	</div>
	<div class="der">
		<select name="fky_pro" id="fky_pro">
			<?php 
				$pro=$obj_pro->listar();
				while( ($dat_pro = $obj_pro->extraer_dato($pro))>0){
echo "<option value=$dat_pro[cod_pro]>$dat_pro[nom_pro]</option>";					
				}
			 ?>
		</select>
	</div>

	<div class="izq">
		<label>
			Cantidad:
		</label>
	</div>
	<div class="der">
		<input type="number" name="can_det" id="can_det" size="15" maxlength="11">
	</div>

	<div class="izq">
		<label>
			Precios:
		</label>
	</div>
	<div class="der">
		<input type="number" name="pre_det" id="pre_det" size="15" maxlength="11">
	</div>

	<div class="izq">
		<label>
			Sub-Total:
		</label>
	</div>
	<div class="der">
		<input type="number" name="sub_det" id="sub_det" size="15" maxlength="11">
	</div>

	<div class="izq">
		<label>
			Total:
		</label>
	</div>
	<div class="der">
		<input type="number" name="tot_det" id="tot_det" size="15" maxlength="11">
	</div>

	<div class="pie_formulario">
		<input type="submit" name="bot_gua" value="Guardar">
	</div>
 		
 	</form> 	
 </body>
 </html>