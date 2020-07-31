<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Reportes</title>
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
		 	<li><a href="v_registraralumno.html">Registrar Estudiante</a></li>
		 	<li><a href="v_menuactualizar.html">Actualizar Datos de Estudiante</a></li>
		 </ul>

		 <li>
		 	<div class="link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Gestionar Personal&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_registrarpersonal.html">Registrar Personal</a></li>
		 	<li><a href="v_menuactualizarper.html">Actualizar Datos de Personal</a></li>
		 </ul>

		 <li>
		 	<div class="link"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Administrar Usuario&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_registrarusuario.html">Registar Usuario</a></li>
			<li><a href="v_actualizarusuario.html">Actualizar Datos de Usuario</a></li>
		 	
		 </ul>
		 
		 <li>
		 	<div class="link"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Reportes&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_generarreporte.html">Generar Reportes</a></li>

		 </ul>
		 <li>
		 	<div class="link"><i class="fa fa-users" ></i><a href="../controladores/cont_cierre.php">&nbsp;Cerrar Sesión&nbsp;</div><a href="javascript:void(0)">
		 	
		 	
	</a>
		 	
	</div><a class="java" href="javascript:void(0)">

	<div id="contenedor">

		<form role="form" method="post" action="../fpdf/fichaestudiante.php">
			<h2>Generar Ficha de Estudiante</h2>
    		<div class="form-group">
      		<label for="turno"> Turno de Clases:</label>
					<select name="turno" id="turno" required>
							<option value="Mañana">Mañana</option>
							<option value="Tarde">Tarde</option>
					</select>
			
			<label for="grado"> Grado que Cursa:</label>
					<select name="grado" id="grado" required>
							<option value="Primero 1er">Primero 1er</option>
							<option value="Segundo 2do">Segundo 2do</option>
							<option value="Tercero 3er">Tercer 3er</option>
							<option value="Cuarto 4to">Cuarto 4to</option>
							<option value="Quinto 5to">Quinto 5to</option>
							<option value="Sexto 6to">Sexto 6to</option>
					</select>
    		</div>
        
    		<button type="submit" class="btn btn-default" >Generar</button>
    		
  		</form>
  		
      </div>
	</div>
	</div>
</div><a class="java" href="javascript:void(0)">


</a>
	
</body>
</html>
