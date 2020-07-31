<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Sistema CDP</title>
<style type="text/css">
</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<link rel="stylesheet" href="estilo.css">
<?php

	session_start();
	if(!isset($_SESSION["usuario"])){
		
		header("location:v_login.php");
	}

?>


<div id="apDiv1">
<div 
<ul id="MenuBar1" class="MenuBarVertical">
   	<li><a href="#" class="MenuBarItemSubmenu">Gestionar Alumno</a>
       	<ul>
         <li><a href="../vista/v_registro_alumno.php">Nuevo Registro</a></li>
         <li><a href="../vista/v_actualizar_alumno.php">Actualizar Datos</a></li>
       </ul>
    </li>
    <li><a href="" class="MenuBarItemSubmenu">Gestionar Personal</a>
      <ul class="MenuBarVertical">
        <li><a href="../vista/v_registro_personal.php">Nuevo Ingreso</a></li>
        <li><a href="../vista/v_actualizar_personal.php">Actualizar Datos</a></li>
      </ul>
    </li>
<li><a href="genr_rep">Generar Reporte</a></li>
    <li><a href="../controladores/cont_cierre.php">Cerrar Sesi&oacute;n</a></li>
  </ul>
</div>
<div id="apDiv2">
  
</div>
<div id="apDiv3">

  <form>

Cedula:
<select name="n">
	<option> V</option>
	<option>E</option>
</select>
<input type="Number" name="cedula"><br><br>	
Nombre:<br>
<input type="text" name="nombre"><br><br>
Telefono:<br>
<input type="tel" name="telefono"><br><br>
Materias:<br>
<input type="checkbox" name="materia[]" value="Matematica"> Matematica<br>
<input type="checkbox" name="materia[]" value="Fisica"> Fisica<br>
<input type="checkbox" name="materia[]" value="Quimica">Quimica<br>
<input type="checkbox" name="materia[]" value="Ingles"> Ingles<br>
<input type="checkbox" name="materia[]" value="HTML"> HTML<br>
<br>

Turno:<br>
<input type="radio" name="turno" value="Mañana"> Mañana<br>
<input type="radio" name="turno" value="Tarde"> Tarde<br>
<input type="radio" name="turno" value="Noche"> Noche<br>

Sexo:
<select name="sexo">
	<option>Seleccione</option>
	<option>Femenino</option>
	<option>Masculino</option>
</select><br><br>

Direccion:<br>
<textarea cols="20 rows"10" name="direccion"></textarea><br>
<input type="submit" value="Inscribir">	

</form>
</div>
<div id="apDiv4"><span class="font"><img src="../imagenes/logo.jpg.jpg" width="213" height="167" /></span></div>

<div id="apDiv7"></div>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
