<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/estilologin.css"/>
</head>
<body>
<div id="general">

	<form  id="form1" name="form1" method="post" action="../controladores/cont_log.php">
	<H2> Bienvenido al Sistema de Control de Datos Personales</H2>
		<label for="cedula"> Cedula de Usuario:</label>
		<input type="text" name="cedu" id="cedu" pattern="^([VE]{1})([0-9]{7,12})$" placeholder="V1234567 o E1234567" maxlength="12" required>
		<label for="usuario"> Usuario:</label>
		<input type="text" name="user" id="user"  placeholder="Escriba Usuario" maxlength="30" required>
		<label for="contrasena"> Contraseña:</label>
		<input type="password" name="pass" id="pass"  placeholder="Escriba Contraseña" maxlength="30" required>
		<input type="submit" name="ingresar" value="Ingresar" id="boton"><br>
		<a href="../fpdf/manual.pdf" > Manual de Usuario </a>
</div>
</body>
</html>