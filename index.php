<?php 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<form name="usuario" method="post" action="controlador/usuario/controlador_usuario.php">

	<table border="1px" id="tabla_sesion" align="center">
		<tr align="center" class="titulo1"><td colspan="2">Inicio de Sesion</td></tr>
		<tr><td>Email:</td><td><input type="email" placeholder="Ingrese su Email"  name="ema_usu" id="ema_usu"></td></tr>
		<tr><td>Password:</td><td><input type="Password" placeholder="Password" name="cla_usu" id="cla_usu"></td></tr>
		<tr align="center"><td colspan="2"><input type="submit" value="Iniciar" name="sub_sub"></td></tr>
	</table>
	<input type="hidden" name="accion" id="accion" value="sesion">
</body>
</form>
</html>