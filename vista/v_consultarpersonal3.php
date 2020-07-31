<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultar Estudiante</title>
	<link rel="stylesheet" type="text/css" href="../css/estilocon.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css">

  <script src="../js/jquery-3.1.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<script src="..\js\jquery-3.1.0.min.js"></script>
	 <script src="..\js\java.js"></script>
<div id="general">
	
    <div id="tope"></div>

	<div id="menu">
		<ul id="menuacordeon" class="menuacordeon">
		 <li class="abierto">
		 	<div class="link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Gestionar Estudiante&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_consulta3.php">Consultar Datos de Estudiante</a></li>
		 </ul>

		 <li>
		 	<div class="link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Gestionar Personal&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_consultarpersonal3.php">Consultar Datos de Personal</a></li>
		 </ul>

		 		 
		 <li>
		 	<div class="link"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Reportes&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_generarreporte3.html">Generar Reportes</a></li>

		 </ul>
		 <li>
		 	<div class="link"><i class="fa fa-users" ></i><a href="../controladores/cont_cierre.php">&nbsp;Cerrar Sesión&nbsp;</div><a href="javascript:void(0)">
		 	
		 	
	</a>
		 	
	</div><a href="javascript:void(0)">

	<div id="contenedor">

		<form role="form" method="POST" action="../modelo/mod_consupersonal3.php">
			<h2>Consultar Datos del Personal</h2>
    		<div class="form-group">
      			<label for="cod"> Ingrese Cedula de Identidad:</label>
				<input class="cod" type="text" name="cod" id="cod" pattern="^([VE]{1})([0-9]{7,12})$" placeholder="V1234556 E1234567" maxlength="12" >
    		</div>
        
    		<button type="submit" class="btn btn-default">Consultar</button>
    		
  		</form>
  		
	</div>
	</div>
</div><a href="javascript:void(0)">


</a>
	
</body>
</html>
