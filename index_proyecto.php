<!DOCTYPE html>

<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_proyect.css">
</head>
<body>
	<form method="POST">
		<h1>Registrar usuario<h1>
		<!--<input type="text"name="idusuario"placeholder="idusuario">-->
		
		<input type="text"  name="nombre"placeholder="Nombre"><br>
		<input type="text" 	name="apellido"placeholder="Apellido"><br>
		<input type="text" 	name="edad"placeholder="Edad"><br>
		<input type="text" 	name="email"placeholder="algo@email.com"><br>
		<input type="submit" name="registrar" value="Registrar" >
	</form>
	<?php
		include("proyect_registrar.php");
		
		include("con_conexion_bd.php");
	?>
	
</body>
</html>	