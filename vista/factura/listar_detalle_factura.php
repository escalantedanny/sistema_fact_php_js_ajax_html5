<?php 
require("../../clase/factura/detalle_factura.class.php");
$obj_det= new detalle_factura;
$ret = $obj_det->listar();
while(($det=$obj_det->extraer_dato($ret))>0)
{
	echo "<div value=$det[ide_det]>ide: $det[ide_det]</div>";
	echo "<div value=$det[fky_fac]>num_fac: $det[fky_fac]</div>";
	echo "<div value=$det[fky_pro]>num_producto: $det[fky_pro]</div>";
	echo "<div value=$det[can_det]>cantidad de producto: $det[can_det]</div>";
	echo "<div value=$det[pre_det]>Precio unitario: $det[pre_det]Bs</div>";
	echo "<div value=$det[sub_det]>sub total: $det[sub_det]Bs</div>";
	echo "<div value=$det[tot_det]>total: $det[tot_det]Bs</div>";
	echo "<br>";
}
 ?>