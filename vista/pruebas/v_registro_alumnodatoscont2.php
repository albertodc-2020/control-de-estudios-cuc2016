<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login E.B.N. Tomas Aguerrevere Pacanins</title>
<style type="text/css">


.font{
font-size: 200%;
	font-family: "Comic Sans MS", bold;
	text-align: center;
}

.font2{
	font-size: 100%;
	font-family: "Comic Sans MS", cursive;
	text-align: left;
	color: #000;
	}
#apDiv1 {
	position:absolute;
	left:2px;
	top:159px;
	width:212px;
	height:176px;
	z-index:1;
	background-position:center;
	background-color: #000000;
	background-repeat: repeat;
}
#apDiv2 {
	position:absolute;
	border-top-right-radius: 30px;
	border-bottom-left-radius: 30px;
	left:213px;
	top:0px;
	width:896px;
	height:160px;
	z-index:2;
	text-align: center;
	background-color: #003399;
}
#apDiv3 {
	position:absolute;
	border-bottom-right-radius: 30px;
	border-bottom-left-radius: 30px;
	left:214px;
	top:160px;
	width:895px;
	height:489px;
	z-index:0;
	font-size: x-large;
	text-align: center;
	background-image: url(../imagenes/fachada%20escuela1.jpg);
}

#apDiv4 {
	position:absolute;
	left:2px;
	top:-8px;
	width:207px;
	height:153px;
	z-index:4;
}
body,td,th {
	color: #CCC;
}
body {
	background-color: #000;
	font-weight: bold;
	background-image: url();
	background-repeat: no-repeat;
}


</style>
<link href="../../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv5 {
	position:absolute;
	width:373px;
	height:43px;
	z-index:5;
	left: 94px;
	top: 422px;
}
#apDiv3 #form1 .font2 label center {
	color: #8080FF;
}
#apDiv6 {
	position:absolute;
	width:762px;
	height:451px;
	z-index:5;
	left: 1px;
	top: 22px;
	background-image: url(../imagenes/250px-Tomas_Aguerrevere_Pacanins.jpg);
}
#apDiv7 {
	position:absolute;
	border-bottom-right-radius: 30px;
	border-bottom-left-radius: 30px;
	width:214px;
	height:389px;
	z-index:5;
	left: 1px;
	top: 265px;
	background-color: #666666;
}
#apDiv8 {
	position:absolute;
	border-top-right-radius: 30px;
	border-top-left-radius: 30px;
	border-bottom-right-radius: 30px;
	border-bottom-left-radius: 30px;
	width:200px;
	height:647px;
	z-index:6;
	left: 1114px;
	top: 2px;
	background-color: #FF6600;
}
</style>
<script src="../../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<?php

	session_start();
	if(!isset($_SESSION["usuario"])){
		
		header("location:v_login.php");
	}
?>
<div id="apDiv1">
<ul id="MenuBar1" class="MenuBarVertical">
    <li><a href="#" class="MenuBarItemSubmenu">Gestionar Alumno</a>
       <ul>
         <li><a href="./v_registro_alumno2.php">Nuevo Registro</a></li>
         <li><a href="./v_actualizar_alumno2.php">Actualizar Datos</a></li>
       </ul>
    </li>
    <li><a href="" class="MenuBarItemSubmenu">Gestionar Personal</a>
      <ul class="MenuBarVertical">
        <li><a href="./v_registro_personal2.php">Nuevo Ingreso</a></li>
        <li><a href="./v_actualizar_personal2.php">Actualizar Datos</a></li>
      </ul>
    </li>
<li><a href="../controladores/cont_cierre.php">Cerrar Sesi&oacute;n</a></li>
  </ul>
</div>
<div id="apDiv2">
  <p>&nbsp;</p>
<p class="font">E.B.N Tomas Aguerrevere Pacanins </p>
</div>
<div id="apDiv3">

 <p class="font2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingresar datos de contacto</p>
  <p class="font2"> <label for="direccion">&nbsp;Dirección: </label><input type="text" name="direccion" size="100" id="direccion" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
     <p class="font2"> <label for="vivienda">&nbsp;Tipo de Vivenda:&nbsp;&nbsp;</label><input type="text" name="vivienda" size="60" id="vivienda" /></p>
    <p class="font2">
      <label for="telefono">&nbsp;Teléfono Local:&nbsp;&nbsp;&nbsp; </label><input type="text" name="telefono" size ="13"id="telefono" /><label for="celular">&nbsp;Teléfono celular:&nbsp;</label><input type="text" name="celular" size ="13"id="celular" /></p>
    
    <p class="font2">
    <label for="email">&nbsp;Correo Electronico:</label><input type="text" name="email" size="30" id="email" />&nbsp;&nbsp;
    
    <p class="font2">
      <center><input type="submit" name="borrar" id="borrar" value="Borrar" />
      <input type="submit" name="sig_repr" id="sig_repr" value="Guardar" /></center>
    </p>
    
    
    </p>
    <p class="font2">&nbsp;</p>
    <p class="font2">&nbsp;</p>
<p>&nbsp;</p>
  </form>
</div>
<div id="apDiv4"><span class="font"><img src="../imagenes/logo.jpg.jpg" width="213" height="167" /></span></div>
<h1>&nbsp;</h1>
<div id="apDiv7"></div>
<div id="apDiv8"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
