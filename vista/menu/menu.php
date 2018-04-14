<?php
session_start();
require('../../clase/modulo/modulo.class.php');
//require('../../clase/modulo/modulo.class.php');
if(isset($_SESSION['email']))
{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<title>Sistema de Facturacion</title>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	</head>
	<body>
		<div class="contenedor">
			
			<div class="superior">
				<img src="../../img/CENTral.jpg" href="../curso_web_octubre/index.html">
			</div>
				
			<div class="menu">
				<ul>
					<?php
					$obj_modulo=new modulo;
					$obj_utilidad=new utilidad;
					$res=$obj_modulo->menu($_SESSION['usuario']);
					//$lis=$obj_modulo->listar();
				$modulo="";
				while($fila=$obj_utilidad->extraer_dato($res))
					{
					if ($fila['nom_mod']!=$modulo) {
						$modulo=$fila['nom_mod'];
					?>
									
					<li class="titulo letra_blanca altura30 pocision" ><?php echo $fila['nom_mod'] ;
					}
					?></li>
					
					<li class="opcion altura30"><a href='<?php echo "../../".$fila["rut_mod"]."/".$fila["url_opc"] ?>' target="pagina"><?php echo $fila['nom_opc'] ?></a></li>
					<?php
						}		
					?>
					
					<li class="titulo letra_blanca altura30 pocision" >Sesion</li>
						<li class="opcion altura30 "><a href="../usuario/cerrar_sesion.php">Cerrar</a></li>

				</ul>

			</div>

			<div class="centro">
				
				<iframe name="pagina" id="pagina" width="100%" height="100%" frameborder="0"></iframe>		

			</div>

			<div class="pie"></div>
			
		</div>
<?php 
		}
		else
			echo "No puede Ingresar";
		 ?>
	</body>
</html>