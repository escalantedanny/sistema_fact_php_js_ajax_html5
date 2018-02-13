<?php 
require("../../clase/cliente/cliente.class.php");
require("../../clase/forma_pago/forma_pago.class.php");

$obj_cli = new cliente;
$obj_for = new forma_pago;

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
 	<title>Agregar Factura</title>
 	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
 	<script src="../../js/factura/factura.js" type="text/javascript" charset="utf-8" async defer></script>
 	<script src="../../js/producto/producto.js" type="text/javascript" charset="utf-8" async defer></script>
 </head>
 <body>
 <div class="contenedor90">
 	<form action="../../controlador/factura/controlador_factura.php" method="POST" id="for_fac">

 	<input type="hidden" name="accion" value="agregar">

 	<input type="hidden" name="num_fila" id="num_fila" value="0">

 	<div class="titulo letra_blanca altura30 pocision">Agregar Factura</div>
	
	<div class="izq">
		<label>
			Numero de Cedula:
		</label>
	</div>
	<div class="der">
		<input type="text" name="fky_cli" id="fky_cli" size="20" maxlength="15"><a href="javascript:buscar_cliente()" id="buscar"><b>  Buscar...</b></a>

		<span id="zona_cliente"></span>
	</div>



	<div class="izq">
		<label>
			Numero Factura:
		</label>
	</div>
	<div class="der">
		<input type="text" name="num_fac" id="num_fac" size="15" maxlength="11"><span id="num_fac"</span>
	</div>

	<div class="izq">
		<label>
			Numero de Control: 
		</label>
	</div>
	<div class="der">
		<input type="text" name="ctr_fac" id="ctr_fac" size="15" maxlength="11">
	</div>

	<div class="izq">
		<label>
			Fecha de Factura:
		</label>
	</div>
	<div class="der">
		<input type="date" name="fec_fac" id="fec_fac" size="15" maxlength="12">
	</div>

	<!--
	<div class="izq">
		<label>
			Codigo Cliente:
		</label>
	</div>
	<div class="der">
		<select name="fky_cli" id="fky_cli">
			<?php 
			/*
				$cli = $obj_cli->listar();

				while( ($dat_cli= $obj_cli->extraer_dato($cli) ) >0)
				{
echo "<option value='$dat_cli[cod_cli]''>$dat_cli[cod_cli] $dat_cli[nom_cli]</option>";
				}

			*/
			 ?>
		</select>
	</div>
	-->
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
		<input type="radio" name="con_fac" id="con_fac" value="C" checked="">Contado
		<input type="radio" name="con_fac" id="con_fac" value="C">Credito
	</div>

	<div class="izq">
		<label>
			Fecha de Vencimiento:
		</label>
	</div>
	<div class="der">
		<input type="date" name="fec_ven" id="fec_ven" size="15" maxlength="12">
	</div>



	<table id="tabla_detalle" width="100%">
		<tr  class="altura30 pocision letra_blanca titulo">
			<td width="15%">Codigo</td>
			<td width="25%">Descripcion</td>
			<td width="20%">Cantidad</td>
			<td width="15%">Precio</td>
			<td width="15%">Total</td>
		</tr>
	
		<tr align="center">
			<td  class="pocision"  ><input type="text" name="cod_pro0" size="20" maxlength="10" id="cod_pro0" onkeydown="buscar_producto(0,event)"></td>
			<td  class="pocision"  ><input type="text" name="nom_pro0" size="40" maxlength="50" id="nom_pro0"></td>
			<td  align="center" ><input type="number" size="3" maxlength="3" min="0" max="999" name="can_det0" id="can_det0" value="1" onchange="calcular_fila(0)"></td>
			<td  class="pocision"  ><input type="text" name="pre_det0" size="15" maxlength="10" id="pre_det0" readonly value="0"></td>
			<td  class="derechaText"  ><input type="text" size="15" maxlength="10" readonly name="sub_det0" id="sub_det0" value="0"></td>
		</tr>
    </table>

	<div class="izq">
		<label>
			Subtotal: 
		</label>
	</div>
	<div class="der">
		<input type="number" name="sub_fac">
	</div>

	<div class="izq">
		<label>
			Impuesto:
		</label>
	</div>
	<div class="der">
		<input type="number" name="imp_fac">
	</div>

	<div class="izq">
		<label >
			Total:
		</label>
	</div>
	<div class="der">
		<input type="number" name="tot_fac">
	</div>
<!-- comentariooooooooooooo -->
	<div class="izq">
		<label>.
			Estatus
		</label>
	</div>
	<div class="der">
		<input type="radio" name="est_fac" id="est_fac" value="A" checked="">Activo
		<input type="radio" name="est_fac" id="est_fac" value="I">Inactivo
	</div>


 		
	<div class="pie_formulario pocision letra_blanca">
		<input type="button" name="bot_gua" value="Agregar Fila" id="bot_gua" onclick="agregar_fila()">
		<input type="button" name="bot_gua" value="Guardar" id="bot_gua">
	</div>

 	</form>
 </div>	
 </body>
 </html>