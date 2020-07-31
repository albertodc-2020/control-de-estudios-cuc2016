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
		 	<div class="link"><i class="fa fa-users" ></i><a href="..\controladores\cont_cierre.php">&nbsp;Cerrar Sesión&nbsp;</div><a href="javascript:void(0)">
		 	
	</a>
		 	
	</div><a class="java" href="javascript:void(0)">

	<div id="contenedor">

		<form role="form" method="post" action="../fpdf/fichaestudiante3.php">
			<h2>Generar Ficha de Estudiante</h2>
    		<div class="form-group">
      			<label for="cod"> Codigo de Estudiante:</label>
				<input class="cod" type="text" name="cod" id="cod" pattern="^([A-Z]{1})([0-9]{3,12})$" placeholder="Escriba Codigo" maxlength="12" required>
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
