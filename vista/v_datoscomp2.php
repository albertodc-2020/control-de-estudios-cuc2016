<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar Datos Complementarios</title>
	<link rel="stylesheet" type="text/css" href="../css/datoscomp.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
<script src="..\js\jquery-3.1.0.min.js"></script>
	 <script src="..\js\java.js"></script>
<div id="general">
    <div id="tope">
    	
    </div>

	<div id="menu">
		<ul id="menuacordeon" class="menuacordeon">
		 <li class="abierto">
		 	<div class="link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Gestionar Estudiante&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_registraralumno2.html">Registrar Estudiante</a></li>
		 	<li><a href="v_menuactualizar2.html">Actualizar Datos de Estudiante</a></li>
		 </ul>

		 <li>
		 	<div class="link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Gestionar Personal&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_registrarpersonal2.html">Registrar Personal</a></li>
		 	<li><a href="v_menuactualizarper2.html">Actualizar Datos de Personal</a></li>
		 </ul>

		 
		 
		 <li>
		 	<div class="link"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Reportes&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
		 	<ul class="submenu">
		 	<li><a href="v_generarreporte2.html">Generar Reportes</a></li>

		 </ul>
		 <li>
		 	<div class="link"><i class="fa fa-users" ></i><a href="../controladores/cont_cierre.php">&nbsp;Cerrar Sesión&nbsp;</div><a href="javascript:void(0)">
		 	
		 	
	</a>
		 	
	</div><a href="javascript:void(0)">
	<?php 
		include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();

		$query= "SELECT * FROM alumno WHERE id_alumno = (SELECT MAX(id_alumno) FROM alumno);";
		 $result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        
        $row=pg_fetch_array($result);
        $codigoalumno 		= 	$row['af_cod_alumn'];
	?>

	<div id="contenedor">
	
		<form id="form1" name="form1" method="post" action="..\controladores\con_registrardatoscomp2.php">
			<h2>Datos Complementarios</h2><br>
			<label for="cod"> Codigo de alumno:</label>
			<input class="cod" type="text" name="cod" id="cod" pattern="^([A-Z]{1})([0-9]{3,12})$" placeholder="Escriba codigo" maxlength="12" required readonly value="<?php echo $codigoalumno;?>">
			<h3>Datos de la Madre</h3>
					<label for="vmadre"> Vive con el niño:</label>
					<select name="vmadre" id="vmadre">
							<option value="N/A">No Aplica</option>
							<option value="Si">Si</option>
							<option value="No">No</option>
					</select>		
			<label for="name"> Nombres:</label>
			<input type="text" name="name" id="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{2,30}" placeholder="Escriba Nombres" maxlength="30" >
			<label for="ape"> Apellidos:</label>
			<input type="text" name="ape" id="ape" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{2,30}" placeholder="Escriba Apellidos" maxlength="30" >
			<label for="cedulai"> Cedula de Identidad:</label>
			<input type="text" name="cedulai" id="cedulai" pattern="^([VE]{1})([0-9]{7,12})$" placeholder="V1234567 o E1234567" maxlength="15" >
			<label for="fec_nac"> Fecha de Nacimiento:</label>
			<input type="date" name="fec_nac"  id="fec_nac" placeholder="Fecha de Nacimiento" >
			<label for="edocivil"> Estado Civil:</label>
					<select name="edocivil" id="edocivil" >
							<option value="N/A">No Aplica</option>
							<option value="Soltero">Soltero</option>
							<option value="Casado">Casado</option>
							<option value="Divorciado">Divorciado</option>
							<option value="Viudo">Viudo</option>
					</select>		
			<label for="edad"> Edad:</label>
			<input type="number" name="edad"  max="100" id="edad" placeholder="Escriba Edad">
			
			<label for="nacion"> Nacionalidad:</label>
					<select name="nacion" id="nacion">
							<option value="N/A">No Aplica</option>
							<option value="Venezolano">Venezolano</option>
							<option value="Extranjero">Extranjero</option>
					</select> 
			
			<label for="ocupacion"> Ocupación:</label>
			<input type="text" name="ocupacion" id="ocupacion" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{2,30}" placeholder="escriba a que se dedica" maxlength="30" >
		
			<label for="direc"> Dirección de Habitación:</label>
			<input type="text" name="direc" id="direc" placeholder="Escriba dirección completa" maxlength="150" >
			
			<label for="tel_hab"> Telefono:</label>
			<input type="text" name="tel_hab" id="tel_hab" pattern="^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$" maxlength="12" placeholder="Escriba telefono" >
			
			<label for="directm"> Dirección de Trabajo:</label>
			<input type="text" name="directm" id="directm" placeholder="Escriba dirección completa" maxlength="150" ><br>
			
			<label for="margen" for="tel_tm"> Telefono trabajo:</label>
			<input class="margen" type="text" name="tel_tm" id="tel_tm" pattern="^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$" maxlength="12" placeholder="Escriba telefono" ><br>
			<h3>Datos del Padre</h3>
					<label for="vpadre"> Vive con el niño:</label>
					<select name="vpadre" id="vpadre">
							<option value="N/A">No Aplica</option>
							<option value="Si">Si</option>
							<option value="No">No</option>
					</select>		
			<label for="namep"> Nombres:</label>
			<input type="text" name="namep" id="namep" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{2,30}" placeholder="Escriba Nombres" maxlength="30" >
			<label for="apep"> Apellidos:</label>
			<input type="text" name="apep" id="apep" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{2,30}" placeholder="Escriba Apellidos" maxlength="30" >
			<label for="cedulaip"> Cedula de Identidad:</label>
			<input type="text" name="cedulaip" id="cedulaip" pattern="^([VE]{1})([0-9]{7,12})$" placeholder="V1234567 o E1234567" maxlength="15" >
			<label for="fec_nacp"> Fecha de Nacimiento:</label>
			<input type="date" name="fec_nacp"  id="fec_nacp" placeholder="Fecha de Nacimiento" >
			<label for="edocivilp"> Estado Civil:</label>
					<select name="edocivilp" id="edocivilp" >
							<option value="N/A">No Aplica</option>
							<option value="Soltero">Soltero</option>
							<option value="Casado">Casado</option>
							<option value="Divorciado">Divorciado</option>
							<option value="Viudo">Viudo</option>
					</select>		
			<label for="edadp"> Edad:</label>
			<input type="number" name="edadp"   max="100" id="edadp" placeholder="Escriba Edad">
			
			<label for="nacionp"> Nacionalidad:</label>
					<select name="nacionp" id="nacionp">
							<option value="N/A">No Aplica</option>
							<option value="Venezolano">Venezolano</option>
							<option value="Extranjero">Extranjero</option>
					</select> 
			
			<label for="ocupacionp"> Ocupación:</label>
			<input type="text" name="ocupacionp" id="ocupacionp" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{2,30}" placeholder="escriba a que se dedica" maxlength="30" >
		
			<label for="direcp"> Dirección de Habitación:</label>
			<input type="text" name="direcp" id="direcp" placeholder="Escriba dirección completa" maxlength="150" >
			
			<label for="tel_habp"> Telefono:</label>
			<input type="text" name="tel_habp" id="tel_habp" pattern="^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$" maxlength="12" placeholder="Escriba telefono" >
			
			<label for="directp"> Dirección de Trabajo:</label>
			<input type="text" name="directp" id="directp" placeholder="Escriba dirección completa" maxlength="150" ><br>
			
			<label for="margen" for="tel_tp"> Telefono trabajo:</label>
			<input class="margen" type="text" name="tel_tp" id="tel_tp" pattern="^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$" maxlength="12" placeholder="Escriba telefono" ><br>

			<h3>Datos adicionales estudiante</h3>
			<label for="enfer"> De padecer una enfermedad indique cual:</label>
			<input type="text" name="enfer" id="enfer" placeholder="Escriba enfermedad" maxlength="40" ><br>
					<label for="aler"> Padece alguna alergia:</label>
					<select name="aler" id="aler">
							<option value="Si">Si</option>
							<option value="No">No</option>
					</select>		
					<label for="exp"> Explique:</label>
			<input type="text" name="exp" id="exp" placeholder="Describa alergia de ser necesario" maxlength="40" ><br>
														
			<input type="submit" name="guardar" value="Guardar Datos" id="boton">	
		</form>
</div><br>
</div><a href="javascript:void(0)">


</a></body>
</html>
