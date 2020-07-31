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
<script type = "text/javascript">function abrirpdf(){
window.open("../fpdf/fichaestudiante.php" , "Ficha Acumulativa" , "width=620,height=400,fullscreen=yes,scrollbars=NO") 
parent.opener=top;
opener.close();"  
}

</script> 
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
		 	
	</div><a class="java" href="javascript:void(0)">

	<div id="contenedor">

		<form role="form" method="post" action="../fpdf/constanciadeestudio2.php">
			<h2>Generar Constancia de Estudio</h2>
    		<div class="form-group">
      			<label for="cod"> Codigo de Estudiante:</label>
				<input class="cod" type="text" name="cod" id="cod" pattern="^([A-Z]{1})([0-9]{3,12})$" placeholder="Escriba Codigo" maxlength="12" required>
    		</div>
    		<label for="periodo"> Periodo Escolar:</label>
						<select class="periodo" name="periodo" id="periodo" required>
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
        
    		<button type="submit" class="btn btn-default" >Generar</button>
    		
  		</form>
  		
      </div>
	</div>
	</div>
</div><a class="java" href="javascript:void(0)">


</a>
	
</body>
</html>
