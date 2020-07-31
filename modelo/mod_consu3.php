<?php


$id = $_POST['cod'];

		include("../modelo/mod_conexion.php");
		$conexion= new connex();
		$pgconn=$conexion->conectar();

	

$query=  "SELECT * FROM alumno INNER JOIN representante  ON af_cod_alumn=af_codigo_alumn_repre INNER JOIN datoscomp  ON af_codigo_alumn_repre=af_codalum_dc INNER JOIN literal  ON af_codalum_dc=af_cod_alumliteral WHERE alumno.af_cod_alumn ='$id' ";
$resultado =pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		
			$filas = pg_fetch_array($resultado);
			//*Tabla Alumno*//
			$codigo 	 = 		$filas['af_cod_alumn'];
			$Nomestu 	 = 		$filas['af_nom_alum'];
			$apeestu 	 = 		$filas['af_ape_alum'];
			$edadestu 	 = 		$filas['nu_edad_alum'];
			$sexestu 	 = 		$filas['ch_sexo_alum'];
			$fnacestu 	 = 		$filas['dt_fecnac_alum'];
			$ingresoestu = 		$filas['dt_fecing_alum'];
			$turnoestu	 =		$filas['af_turno'];
			$grado 		 =		$filas['af_grado'];
			$cedescolar  = 		$filas['af_cedula_esc'];
			$nacionestu	 = 		$filas['ch_nacion_alum'];
			$Lugarnacest =		$filas['ch_lugar_nac_alum'];
			$seccionestu  = 	$filas['af_seccion_alum'];

			//*Tabla Representante*//
			$nombrerepre	=	$filas['af_nom_rep'];
			$aperepre		=	$filas['af_ape_rep'];
			$edadrepre		=	$filas['nu_edad_rep'];
			$sexorepre		=	$filas['ch_sexo_rep'];
			$fnacrepre		=	$filas['dt_fecnac_rep'];
			$parentesco		=	$filas['af_parentesco'];
			$ocupacionrepre	=	$filas['af_ocupacion'];
			$direcrepre		=	$filas['af_direccion'];
			$telhabre		=	$filas['af_telehab'];
			$celrepre		=	$filas['af_telcel'];
			$emailrepre		=	$filas['af_correo'];
			$edocivilre		=	$filas['ch_edocivil'];
			$cedularepre	=	$filas['af_cedurepre'];
			$lugarnacre		=	$filas['af_lugarnac'];
			$nacionrepre	=	$filas['ch_nac_rep'];
			
			//*Tabla datoscomp*//
			/*datos de la madre*/
			$nombrema		=	$filas['af_nombremadre'];
			$apema 			=	$filas['af_apellidomadre'];
			$edocivilma		=	$filas['af_edocivilmadre'];
			$cedumad		=	$filas['af_cedumadre'];
			$direcma		=	$filas['af_direccmadre'];
			$ocupaciona		=	$filas['af_ocumadre'];
			$telmadre		=	$filas['af_telmadre'];
			$directrma		=	$filas['af_directrabmadre'];
			$teltrma		=	$filas['af_teltrabmadre'];
			$vivemadre		=	$filas['af_vmad'];
			$edadmadre		=	$filas['nu_edadmadre'];
			$nacionmadre	=	$filas['ch_nacionm'];
			$fecnacma		=	$filas['af_nacmad'];
			
			/*datos de la padre*/
			$nombrepa		=	$filas['af_nombrepadre'];
			$apepa 			=	$filas['af_apellidopadre'];
			$edocivilpa		=	$filas['af_edocivilpadre'];
			$cedupad		=	$filas['af_cedupadre'];
			$direcpa		=	$filas['af_direcpadre'];
			$ocupaciopa		=	$filas['af_ocupadre'];
			$telpadre		=	$filas['af_telpadre'];
			$directrpa		=	$filas['af_directrabpadre'];
			$teltrpa		=	$filas['af_teltrabpadre'];
			$vivepadre		=	$filas['af_vpadre'];
			$edadpadre		=	$filas['nu_edadpadre'];
			$nacionpadre	=	$filas['ch_nacionp'];
			$fecnacpa		=	$filas['af_nacpad'];
			/*datos enfermedad*/
			$alegia			=	$filas['af_alergia'];
			$enfermedad		=	$filas['af_enfermedad'];
			$Explique		=	$filas ['af_explique'];
			
			/*Tabla literal*/
			$literal1		=	$filas['af_literal_1er'];
			$literal2 		=	$filas['af_literal_2do'];
			$literal3		=	$filas['af_literal_3er'];
			$literal4		=	$filas['af_literal_4to'];
			$literal5		=	$filas['af_literal_5to'];
			$literal6		=	$filas['af_literal_6to'];
			$periodo1		=	$filas['af_periodoesco_1er'];
			$periodo2		=	$filas['af_periodoesco_2do'];
			$periodo3		=	$filas['af_periodoesco_3er'];
			$periodo4		=	$filas['af_periodoesco_4to'];
			$periodo5		=	$filas['af_periodoesco_5to'];
			$periodo6		=	$filas['af_periodoesco_6to'];
			$fechaegre		=	$filas['af_fec_egre'];

		
		if ($id!=$codigo)	{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consulta3.php'>Consultar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consultarpersonal3.php'>Consultar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte3.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)''></a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../modelo/mod_consu.php'><h2>Consultar Estudiante</h2><div class='form-group'><label for='cod'> Codigo de Estudiante:</label><input class='cod' type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12' required></div><button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Estudiante Codigo N°: </div><div class='panel-body'> El Codigo del Estudiante N° $id No existe en la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
		}
		else
		{

			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consulta3.php'>Consultar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consultarpersonal3.php'>Consultar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte3.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)''></a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../modelo/mod_consu.php'><h2>Consultar Estudiante</h2><div class='form-group'><label for='cod'> Codigo de Estudiante:</label><input class='cod' type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12' required></div><button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Estudiante Codigo N°: $codigo </div><div class='panel-body'><h4>Datos de Estudiante</h4><br> Nombres y Apellidos: $Nomestu $apeestu<br>Cedula Escolar: $cedescolar<br>Sexo: $sexestu<br> Fecha de Nacimiento: $fnacestu <br>Edad: $edadestu <br>Lugar de Nacimiento: $Lugarnacest <br>Nacionalidad: $nacionestu<br> Fecha de Ingreso: $ingresoestu<br> Turno de Clases: $turnoestu<br> Grado que estudia: $grado<br>Sección de Clases: $seccionestu<br><h4>Datos del Representante</h4><br> Nombres y Apellidos: $nombrerepre $aperepre<br>Cedula de Identidad: $cedularepre<br>Sexo: $sexorepre<br>Fecha de Nacimiento: $fnacrepre<br> Edad: $edadrepre <br>Lugar de Nacimiento: $lugarnacre<br> Nacionalidad: $nacionrepre<br>Estado Civil: $edocivilre<br>   Parentesco: $parentesco<br> Ocupación: $ocupacionrepre<br> Dirección de Habitación: $direcrepre<br> Telefono de Habitación: $telhabre<br> Celular: $celrepre<br> Correo Electronico: $emailrepre<br>   <h4>Datos Complementarios</h4><br><h4> Datos de la Madre</h4><br> Nombres y Apellidos: $nombrema $apema<br>Cedula de Identidad: $cedumad<br>Fecha de Nacimiento: $fecnacma<br>Edad: $edadmadre<br>Nacionalidad: $nacionmadre<br> Estado Civil: $edocivilma<br>Ocupación: $ocupaciona<br> Dirección de Habitación: $direcma <br>  Telefono: $telmadre<br>Dirección de Trabajo: $directrma<br> Telefono Trabajo: $teltrma<br> Vive con el Niño: $vivemadre<br>  <h4> Datos de Padre</h4><br>Nombre y Apellidos: $nombrepa $apepa<br> Cedula de Identidad: $cedupad<br>Fecha de Nacimiento: $fecnacpa<br>Edad: $edadpadre<br>Nacionalidad: $nacionpadre <br>Estado Civil: $edocivilpa<br>Ocupación: $ocupaciopa<br>  Dirección de Habitación: $direcpa<br>  Telefono: $telpadre<br> Dirección de Trabajo: $directrpa<br> Telefono de Trabajo: $teltrpa<br>Vive con el Niño: $vivepadre<br>   <h4> Datos Adicionales del Niño</h4><br>De Padecer Alguna Enfermedad Indique Cual:&nbsp;&nbsp;&nbsp;$enfermedad<br>Padece Alguna Alergia:&nbsp;&nbsp;$alegia&nbsp;&nbsp;&nbsp;Explique:&nbsp;$Explique<br><h4>Datos Escolares</h4><br> Literal 1er Grado:   $literal1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodo Escolar: $periodo1<br> Literal 2do Grado: $literal2  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Periodo Escolar: $periodo2<br> Literal 3er Grado: $literal3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Periodo Escolar: $periodo3<br> Literal 4to Grado: $literal4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Periodo Escolar: $periodo4<br> Literal 5to Grado: $literal5 &nbsp; &nbsp; &nbsp; Periodo Escolar: $periodo5<br> Literal 6to Grado: $literal6  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Periodo Escolar: $periodo6<br> Fecha de Egreso del Estudiante:$fechaegre</div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>"; } ?>