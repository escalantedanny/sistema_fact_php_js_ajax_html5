<?php 
require("../../clase/factura/factura.class.php");
$obj_fac = new factura;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar Facturas</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
</head>
<body>
	<div class="contenedor_listado_grande">
		<span class="titulo letra_blanca altura30 columna10">numero fac</span>
		<span class="titulo letra_blanca altura30 columna10">numero control</span>
		<span class="titulo letra_blanca altura30 columna20">fecha fac.</span>
		<span class="titulo letra_blanca altura30 columna20">fecha venc..</span>
		<span class="titulo letra_blanca altura30 columna10">cod cliente</span>
		<span class="titulo letra_blanca altura30 columna10">forma pag.</span>		
		<span class="titulo letra_blanca altura30 columna10">Editar</span>
		<span class="titulo letra_blanca altura30 columna10">Eliminar</span>
		<?php 
		$fac=$obj_fac->listar();
		while(($dat_fac=$obj_fac->extraer_dato($fac))>0)
		{
				echo "<span class='altura30 columna10'>$dat_fac[num_fac]</span>";
				echo "<span class='altura30 columna10'>$dat_fac[ctr_fac]</span>";
				echo "<span class='altura30 columna20'>$dat_fac[fec_fac]</span>";
				echo "<span class='altura30 columna20'>$dat_fac[ven_fac]</span>";				
				echo "<span class='altura30 columna10'>$dat_fac[fky_cli]</span>";
				echo "<span class='altura30 columna10'>$dat_fac[fky_for]</span>";
				echo "<span class='altura30 columna10'>
					<a href='editar_factura.php?num_fac=$dat_fac[num_fac]'>Editar</a></span>";
				echo "<span class='altura30 columna10'>Eliminar</span>";
		}
		 ?>
	</div>	

</body>
</html>



