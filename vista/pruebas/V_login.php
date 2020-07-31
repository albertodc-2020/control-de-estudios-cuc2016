<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login SCD E.B.N. Tomas Aguerrevere Pacanins</title>
<style type="text/css">


.font{
	font-size: 200%;
	font-family: "Comic Sans MS", bold;
	text-align: center;
	color: #FFF;
}

.font2{
	font-size: 150%;
	font-family: "Comic Sans MS", cursive;
	text-align: center;
	color: #FFF;
	}
#apDiv1 {
	position:absolute;
	left:2px;
	top:218px;
	width:212px;
	height:493px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:205px;
	top:3px;
	width:901px;
	height:124px;
	z-index:2;
	text-align: center;
}
#apDiv3 {
	position:absolute;
	left:217px;
	top:128px;
	width:887px;
	height:575px;
	z-index:3;
	font-size: x-large;
	text-align: center;
	background-image: url(../imagenes/background_login.jpg);
	
}

#apDiv4 {
	position:absolute;
	left:-5px;
	top:1px;
	width:210px;
	height:693px;
	z-index:4;
}
body,td,th {
	color: #000;
}
body {
	background-color: #000;
	font-weight: bold;
	background-image: url();
	background-repeat: no-repeat;
}
#apDiv5 {
	position:absolute;
	border-top-right-radius: 30px;
	border-bottom-left-radius: 30px;
	width:551px;
	height:214px;
	z-index:0;
	left: 189px;
	top: 146px;
	background-color: #999999;
	font-family: "Comic Sans MS", cursive;
	font-weight: normal;
}
</style>
</head>

<body>
<div id="apDiv2">
  <p class="font">E.B.N Tomas Aguerrevere Pacanins </p>
</div>
<div id="apDiv3">
  <form id="form1" name="form1" method="post" action="../controladores/cont_logine.php">
    <p class="font2">
      <label for="usuario"></label>
   </p>
   <div id="apDiv5">
     <p>
       <label for="usuario2">Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       
       <input type="text" size="25" name="user" id="user" />
     </p>
     <p>
       <label for="contrasena">Contraseña:</label>
       <input type="password" size="25" name="pass" id="pass" />
</p>
     
  <input type="submit" name="entrar" id="entrar" value="Entrar" />
     </p>
   </div>
   <p class="font2">Sistema de Control de Datos Personales</p>
<p>&nbsp;</p>
    <p class="font2">&nbsp;</p>
<p>&nbsp;</p>
  </form>
</div>
<div id="apDiv4"><img src="../imagenes/logo.jpg.jpg" width="210" height="248" /></div>
<h1>&nbsp;</h1>
</body>
</html>
