<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<title>Permisos</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">	
	<script src="../../js/usuario/usuario.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
		
		<body>
		<?php 
			require("../../clase/usuario/usuario.class.php");
			require("../../clase/modulo/modulo.class.php");
			require("../../clase/opcion/opcion.class.php");

			$obj_usu = new usuario;
			$obj_mod = new modulo;
			$obj_opc = new opcion;

			$cod_usu = $_GET['fky_usu']; //recibimos el codigo del usuario de listar_usuario.php

			/* buscamos los permisos del usuario en la tabla privilegio, recibimos el puntero*/
			$pri_usu = $obj_usu->ver_todos_permisos();
			 // diseñamos el encabezado 
		?>

			<div id="mensaje"></div>


			<div class="contenedor_listado_grande">	
				<span class='titulo letra_blanca pocision altura30 columna10'>Item</span>
				<span class='titulo letra_blanca pocision altura30 columna30'>Modulo</span>
				<span class='titulo letra_blanca pocision altura30 columna30'>Opcion </span>
				<span class='titulo letra_blanca pocision altura30 columna30'>Politica</span>
				<?php
			/* empezamos a recorrer con el puntero */
					$i=1;
					while(($opc_usu=$obj_usu->extraer_dato($pri_usu))>0)
					{
				?>
						<span class='pocision altura30 columna10'><?php echo $i; ?>                </span>
						<span class='pocision altura30 columna30'><?php echo $opc_usu['nom_mod'] ?></span>
						<span class='pocision altura30 columna30'><?php echo $opc_usu['nom_opc'] ?></span>
						<span class='pocision altura30 columna30'>
		<input type="checkbox" onclick="gestionar_permiso(<?php echo  $cod_usu ?>,<?php echo $opc_usu['cod_opc'] ?>)" 
							   name="<?php echo $opc_usu['cod_opc'] ?>"  
							   id="<?php echo $opc_usu['cod_opc'] ?>" 
					<?php if ($obj_usu->buscar_permiso($cod_usu,$opc_usu['cod_opc'])=="A") echo "checked" ?> >

						</span>
				<?php
					$i++;
					}

		?>	
			</div>
		</body>
</html>