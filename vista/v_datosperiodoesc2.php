<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Datos Periodo Escolar</title>
	<link rel="stylesheet" type="text/css" href="../css/estilolietral.css"/>
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
		<form id="form1" name="form1" method="post" action="../controladores/con_registrarperiodoesc2.php">

			<h2>Datos del periodo Escolar</h2>
			<label class="fontegreso" for="fec_egreso"> Codigo de alumno:</label>
			<input class="egreso" type="text" name="cod" pattern="^([A-Z]{1})([0-9]{3,12})$" id="cod" required readonly value="<?php echo $codigoalumno;?>"><br>
			<h2>Literales</h2>
			<label for="literal"> Literal 1er Grado:</label>
						<select name="lite_1er" id="lite_1er">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
							
					</select>
			<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo_1er" id="periodo_1er">
							<option value=""></option>
							<option value="2002-2003">2002-2003</option>
							<option value="2003-2004">2003-2004</option>
							<option value="2004-2005">2004-2005</option>
							<option value="2005-2006">2005-2006</option>
							<option value="2006-2007">2006-2007</option>
							<option value="2007-2008">2007-2008</option>
							<option value="2008-2009">2008-2009</option>
							<option value="2009-2010">2009-2010</option>
							<option value="2010-2011">2010-2011</option>
							<option value="2011-2012">2011-2012</option>
							<option value="2012-2013">2012-2013</option>
							<option value="2013-2014">2013-2014</option>
							<option value="2014-2015">2014-2015</option>
							<option value="2015-2016">2015-2016</option>
							<option value="2016-2017">2016-2017</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
							<option value="2025-2026">2025-2026</option>
							
					</select>
			<label for="literal"> Literal 2do Grado:</label>
						<select name="lite_2do" id="lite_2do">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
					</select> 
					<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo_2do" id="periodo_2do">
							<option value=""></option>
							<option value="2002-2003">2002-2003</option>
							<option value="2003-2004">2003-2004</option>
							<option value="2004-2005">2004-2005</option>
							<option value="2005-2006">2005-2006</option>
							<option value="2006-2007">2006-2007</option>
							<option value="2007-2008">2007-2008</option>
							<option value="2008-2009">2008-2009</option>
							<option value="2009-2010">2009-2010</option>
							<option value="2010-2011">2010-2011</option>
							<option value="2011-2012">2011-2012</option>
							<option value="2012-2013">2012-2013</option>
							<option value="2013-2014">2013-2014</option>
							<option value="2014-2015">2014-2015</option>
							<option value="2015-2016">2015-2016</option>
							<option value="2016-2017">2016-2017</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
							<option value="2025-2026">2025-2026</option>
							</select>

			<label for="literal"> Literal 3er Grado:</label>
						<select name="lite_3er" id="lite_3er">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
					</select> 
					<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo_3er" id="periodo_3er">
							<option value=""></option>
							<option value="2002-2003">2002-2003</option>
							<option value="2003-2004">2003-2004</option>
							<option value="2004-2005">2004-2005</option>
							<option value="2005-2006">2005-2006</option>
							<option value="2006-2007">2006-2007</option>
							<option value="2007-2008">2007-2008</option>
							<option value="2008-2009">2008-2009</option>
							<option value="2009-2010">2009-2010</option>
							<option value="2010-2011">2010-2011</option>
							<option value="2011-2012">2011-2012</option>
							<option value="2012-2013">2012-2013</option>
							<option value="2013-2014">2013-2014</option>
							<option value="2014-2015">2014-2015</option>
							<option value="2015-2016">2015-2016</option>
							<option value="2016-2017">2016-2017</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
							<option value="2025-2026">2025-2026</option>
							</select>
			<label for="literal"> Literal 4to Grado:</label>
						<select name="lite_4to" id="lite_4to">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
					</select> 
				<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo_4to" id="periodo_4to">
							<option value=""></option>
							<option value="2002-2003">2002-2003</option>
							<option value="2003-2004">2003-2004</option>
							<option value="2004-2005">2004-2005</option>
							<option value="2005-2006">2005-2006</option>
							<option value="2006-2007">2006-2007</option>
							<option value="2007-2008">2007-2008</option>
							<option value="2008-2009">2008-2009</option>
							<option value="2009-2010">2009-2010</option>
							<option value="2010-2011">2010-2011</option>
							<option value="2011-2012">2011-2012</option>
							<option value="2012-2013">2012-2013</option>
							<option value="2013-2014">2013-2014</option>
							<option value="2014-2015">2014-2015</option>
							<option value="2015-2016">2015-2016</option>
							<option value="2016-2017">2016-2017</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
							<option value="2025-2026">2025-2026</option>
							
							</select>
			<label for="literal"> Literal 5to Grado:</label>
						<select name="lite_5to" id="lite_5to">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
					</select> 
			<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo_5to" id="periodo_5to">
							<option value=""></option>
							<option value="2002-2003">2002-2003</option>
							<option value="2003-2004">2003-2004</option>
							<option value="2004-2005">2004-2005</option>
							<option value="2005-2006">2005-2006</option>
							<option value="2006-2007">2006-2007</option>
							<option value="2007-2008">2007-2008</option>
							<option value="2008-2009">2008-2009</option>
							<option value="2009-2010">2009-2010</option>
							<option value="2010-2011">2010-2011</option>
							<option value="2011-2012">2011-2012</option>
							<option value="2012-2013">2012-2013</option>
							<option value="2013-2014">2013-2014</option>
							<option value="2014-2015">2014-2015</option>
							<option value="2015-2016">2015-2016</option>
							<option value="2016-2017">2016-2017</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
							<option value="2025-2026">2025-2026</option>
							</select>		
			<label for="literal"> Literal 6to Grado:</label>
						<select name="lite_6to" id="lite_6to">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
					</select > 
						<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo_6to" id="periodo_6to">
							<option value=""></option>
							<option value="2002-2003">2002-2003</option>
							<option value="2003-2004">2003-2004</option>
							<option value="2004-2005">2004-2005</option>
							<option value="2005-2006">2005-2006</option>
							<option value="2006-2007">2006-2007</option>
							<option value="2007-2008">2007-2008</option>
							<option value="2008-2009">2008-2009</option>
							<option value="2009-2010">2009-2010</option>
							<option value="2010-2011">2010-2011</option>
							<option value="2011-2012">2011-2012</option>
							<option value="2012-2013">2012-2013</option>
							<option value="2013-2014">2013-2014</option>
							<option value="2014-2015">2014-2015</option>
							<option value="2015-2016">2015-2016</option>
							<option value="2016-2017">2016-2017</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
							<option value="2025-2026">2025-2026</option>
								
						</select>
			<label class="fontegreso" for="fec_egreso"> Fecha de egreso de estudiante:</label>
			<input class="egreso" name="fec_egreso" type="date" id="fec_egreso" ><br>
			<input type="submit" name="guardar" value="Guardar Datos" id="boton">	
		</form>
</div><br>
</div><a href="javascript:void(0)">


</a></body>
</html>
