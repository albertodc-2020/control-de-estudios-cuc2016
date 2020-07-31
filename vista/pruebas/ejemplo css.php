<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login E.B.N. Tomas Aguerrevere Pacanins</title>
<style type="text/css">


<link rel="stylesheet" type="text/css" href="estilo.css">
</style>
<script src="../../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1">
<ul id="MenuBar1" class="MenuBarVertical">
    <li><a href="#" class="MenuBarItemSubmenu">Gestionar Alumno</a>
       <ul>
         <li><a href="./v_registro_alumno.php">Nuevo Registro</a></li>
         <li><a href="./v_actualizar_alumno.php">Actualizar Datos</a></li>
       </ul>
    </li>
    <li><a href="" class="MenuBarItemSubmenu">Gestionar Personal</a>
      <ul class="MenuBarVertical">
        <li><a href="./v_registro_personal.php">Nuevo Ingreso</a></li>
        <li><a href="./v_actualizar_personal.php">Actualizar Datos</a></li>
      </ul>
    </li>
<li><a href="genr_rep">Generar Reporte</a></li>
    <li><a href="./V_login.php">Cerrar Sesi&oacute;n</a></li>
  </ul>
</div>
<div id="apDiv2">
  <p>&nbsp;</p>
<p class="font">E.B.N Tomas Aguerrevere Pacanins </p>
</div>
<div id="apDiv3">

 <p class="font2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingresar datos de Nuevo Alumno</p>
  <p class="font2"> <label for="cedula">&nbsp;Cédula:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="cedula" size="20" id="cedula" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="ced_esc">Cedula Escolar:</label> <input type="text" name="ced_esc" id="ced_esc" /></p>
     <p class="font2"> <label for="nombre">&nbsp;Nombres:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="nombre" size="60" id="nombre" /></p>
    <p class="font2">
      <label for="apellidos">&nbsp;Apellidos:&nbsp;&nbsp;&nbsp; </label><input type="text" name="apellidos" size ="60"id="apellidos" /></p>
    
    <p class="font2">
    <label for="fec_nac">&nbsp;Fecha de Nacimiento:&nbsp;&nbsp;</label><input type="text" name="fec_nac" size="10" id="fec_nac" />&nbsp;&nbsp;
    <label for="edad" class="font2"><span class="font2">Edad:&nbsp;&nbsp;</span></label>
      <input type="text" name="edad" size="6:"id="edad" />&nbsp;&nbsp;
<label for="nacionalidad" class="font2"><span class="font2">Nacionalidad:&nbsp;</span></label>
      <input type="text" name="nacionalidad" size="5"id="nacionalidad" />
    </p>
    <p class="font2"><label for="fechaingreso">&nbsp;Fecha de Ingreso:</label>  <input name="fechaingreso" id="fechaingreso" size="10"/><label for="turno">&nbsp;Turno:</label>  <input name="turno" id="turno" size="10"/> <label for="grado">&nbsp;Grado:</label>  <input name="grado" id="grado" size="20"/>
  </p>
    <p class="font2">
      <label for="sexo">&nbsp;Sexo</label> &nbsp;&nbsp;&nbsp;<label>Masculino:</label>&nbsp;&nbsp;<input type="radio" name="radio" id="Masculino" value="Masculino" />&nbsp;&nbsp;&nbsp;
      <label>Femenino:</label>&nbsp;&nbsp;<input type="radio" name="radio" id="Femenino" value="Femenino" />
    </p>
    <p class="font2">
      <center><input type="submit" name="borrar" id="borrar" value="Borrar" />
      <input type="submit" name="sig_repr" id="sig_repr" value="Siguiente" /></center>
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
