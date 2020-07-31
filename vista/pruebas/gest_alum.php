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
	color: #000;
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
	left:214px;
	top:160px;
	width:895px;
	height:489px;
	z-index:0;
	font-size: x-large;
	text-align: center;
	background-image: url(proyecto_tap/imagenes/fachada%20escuela1.jpg);
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
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
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
	background-image: url(proyecto_tap/imagenes/250px-Tomas_Aguerrevere_Pacanins.jpg);
}
#apDiv7 {
	position:absolute;
	border-bottom-right-radius: 30px;
	border-bottom-left-radius: 30px;
	width:214px;
	height:361px;
	z-index:5;
	left: 1px;
	top: 293px;
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
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1">
  <ul id="MenuBar1" class="MenuBarVertical">
     <li><a href=".\gest_alum.php" class="MenuBarItemSubmenu">Gestionar Alumno</a>
       <ul>
         <li><a href="#">Nuevo Registro</a></li>
         <li><a href="#">Actualizar Datos</a></li>
       </ul>
     </li>
    <li><a href="" class="MenuBarItemSubmenu">Gestionar Personal</a>
      <ul>
        <li><a href=".\gest_doc.php" class="MenuBarItemSubmenu">Docente</a>
          <ul>
            <li><a href="#">Nuevo Ingreso</a></li>
            <li><a href="#">Actualizar Datos</a></li>
          </ul>
        </li>
        <li><a href=".\gest_per.php" class="MenuBarItemSubmenu">Administrativo</a>
          <ul>
            <li><a href="#">Nuevo Ingreso</a></li>
            <li><a href="#">Actualizar Datos</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="consulta.php">Consulta</a>    </li>
    <li><a href="genr_rep">Generar Reporte</a></li>
    <li><a href="login.php">Cerrar Sesi&oacute;n</a></li>
  </ul>
</div>
<div id="apDiv2">
  <p>&nbsp;</p>
<p class="font">E.B.N Tomas Aguerrevere Pacanins </p>
</div>
<div id="apDiv3">

    <p class="font2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p class="font2">&nbsp;</p>
<p>&nbsp;</p>
  </form>
</div>
<div id="apDiv4"><img src="../imagenes/logo.jpg.jpg" width="222" height="164" />
  <div id="apDiv8">
    <p class="font"> &nbsp;Gestionar Alumno</p>
    <p>
    <center>
      <input type="submit" name="nuevo_ingreso" id="nuevo_ingreso" value="Nuevo Ingreso" /></center>
    </p>
    <p><center>
      <input type="submit" name="actualizar" id="actualizar" value="Actualizar Datos" /></center>
    </p>
    <p>&nbsp;</p>
  </div>
</div>
<h1>&nbsp;</h1>
<div id="apDiv7"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
