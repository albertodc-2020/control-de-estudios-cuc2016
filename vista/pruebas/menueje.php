<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Sistema CDP</title>
<style type="text/css">


.font{
font-size: 200%;
	font-family: "Comic Sans MS", bold;
	text-align: center;
}
.font4{
	font-size: 80%;
	font-family: "Comic Sans MS", cursive;
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
	text-align: center;
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
	background-image: url(../imagenes/250px-Tomas_Aguerrevere_Pacanins.jpg);
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
    <li><a href="#" class="MenuBarItemSubmenu">Gestionar Alumno</a>
       <ul>
         <li><a href="../vista/v_registro_alumno.php">Nuevo Registro</a></li>
         <li><a href="../vista/v_actualizar_alumno.php">Actualizar Datos</a></li>
       </ul>
    </li>
    <li><a href="" class="MenuBarItemSubmenu">Gestionar Personal</a>
      <ul class="MenuBarVertical">
        <li><a href="../v_registro_personal.php">Nuevo Ingreso</a></li>
        <li><a href="../v_actualizar_personal.php">Actualizar Datos</a></li>
      </ul>
    </li>
<li><a href="genr_rep">Generar Reporte</a></li>
    <li><a href="../V_login.php">Cerrar Sesi&oacute;n</a></li>
  </ul>
</div>
<div id="apDiv2">
  <p>&nbsp;</p>
<p class="font">E.B.N Tomas Aguerrevere Pacanins </p>
</div>
<div id="apDiv3">
  <center>
    <form id="form1" name="form1" method="post" action="">
    <table width="638" border-top-right-radius: "30px">
      <tr>
        <th width="166" bgcolor="#999999" scope="col"><p class="font4"><label>Cédula</label></th>
        <th width="144" bgcolor="#999999" scope="col"><input name="cedula" type="text" id="cedula" value="Representante" /></th>
        <th width="164" bgcolor="#999999" scope="col"><p class="font4"><label>Código</label></th>
        <th width="146" bgcolor="#999999" scope="col"><p class="font4"><input name="codigo" type="text" id="codigo" value="Cod. de alumno" /></th>
      </tr>
      <tr>
        <td bgcolor="#999999"><p class="font4"><label>Nombres
          
        </label></td>
        <td bgcolor="#999999"><input name="nombre" type="text" id="nombre" value="nombres del aumno" /></td>
        <td bgcolor="#999999"><p class="font4"><label>Apellidos</label></td>
        <td bgcolor="#999999"><input name="apellido" type="text" id="apellido" value="Apellidos del alumno" /></td>
      </tr>
      <tr>
        <td bgcolor="#999999"><p class="font4"><label>Edad</label></td>
        <td bgcolor="#999999"><input name="edad" type="text" id="edad" value="10" /></td>
        <td bgcolor="#999999"><p class="font4"><label>Fecha de Nacimiento
          
        </label></td>
        <td bgcolor="#999999"><input name="fec_nac" type="text" id="fec_nac" value="dd/mm/aaaa" /></td>
      </tr>
      <tr>
        <td bgcolor="#999999"><p class="font4"><label>Nacionalidad
          
        </label></td>
        <td bgcolor="#999999"><label for="nacionalidadlista"></label>
          <select name="nacionalidadlista" id="nacionalidadlista">
            <option>V</option>
            <option>E</option>
        </select></td>
        <td bgcolor="#999999"><p class="font4">Sexo </td>
        <td bgcolor="#999999"><p class="font4"><label for="sexolista"></label>
          <select name="sexolista" id="sexolista">
            <option>M</option>
            <option>F</option>
          </select>
        <label>          </label></td>
      </tr>
      <tr>
        <td bgcolor="#999999"><p class="font4"><label>Fecha de Ingreso
          
        </label></td>
        <td bgcolor="#999999"><input name="fec_ingreso" type="text" id="fec_ingreso" value="dd/mm/aaaa" /></td>
        <td bgcolor="#999999"><p class="font4">Turno de Clases </td>
        <td bgcolor="#999999"><p class="font4"><label for="turnolista"></label>
          <select name="turnolista" id="turnolista">
            <option>Mañana</option>
            <option>Tarde</option>
        </select></td>
      </tr>
      <tr>
        <td bgcolor="#999999"><p class="font4"><label>Grado</label></td>
        <td bgcolor="#999999"><label for="grado"></label>
          <select name="grado" id="grado">
            <option>Primero</option>
            <option>Segundo</option>
            <option>Tercero</option>
            <option>Cuarto</option>
            <option>Quinto</option>
            <option>Sexto</option>
        </select></td>
        <td bgcolor="#999999"><p class="font4"><label>Sección</label></td>
        <td bgcolor="#999999"><label for="seccionlista"></label>
          <select name="seccionlista" id="seccionlista">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>
            <option>G</option>
        </select></td>
      </tr>
    </table>
</form></center>
</div>
<div id="apDiv4"><span class="font"><img src="../imagenes/logo.jpg.jpg" width="213" height="167" /></span></div>

<div id="apDiv7"></div>
<div id="apDiv8"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
