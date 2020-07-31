<?php


$ci = $_POST['cod'];

		include("../modelo/mod_conexion.php");
		$conexion= new connex();
		$pgconn=$conexion->conectar();

	

$query=  "SELECT * FROM personal INNER JOIN cargo  ON af_ced_per=af_cedulap  WHERE personal.af_ced_per ='$ci' ";
$resultado =pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		
			$filas = pg_fetch_array($resultado);
//Tabla Personal
$codigotrb		=	$filas['af_id_codigo_tra'];
$cedulaper	 	= 	$filas['af_ced_per'];
$nombreper 		= 	$filas['af_nom_pers'];
$apellido 	 	= 	$filas['af_ape_per'];
$fechanac 	 	= 	$filas['dt_fecnac_per'];
$edad 	 		=	$filas['nu_edad_per'];
$lugarnac 	 	=	$filas['af_lugarnacp'];
$nacion 		=	$filas['af_nacper'];
$sexo 	 		=	$filas['ch_sexo_per'];
$edocivil 	 	=	$filas['af_edocivilp'];
$direccion 		=	$filas['af_direcper'];
$telefonolocal	=	$filas['af_telhabp'];
$celular 		=	$filas['af_celper'];
$email 			=	$filas['af_correop'];
//Tabla Cargo
$codigocargo	=	$filas['af_id_codigo_cargo'];
$fecing		 	=	$filas['af_fechaingr'];
$feceg		 	=	$filas['af_fechaegre'];
$turnot			=	$filas['af_turno'];
$nombrecargo 	=	$filas['af_nombrecar'];
			
		
		if ($ci!=$cedulaper)	{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consulta3.php'>Consultar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consultarpersonal3.php'>Consultar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte3.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)''></a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='POST' action='../modelo/mod_consupersonal.php'> <h2>Consultar Datos del Personal</h2> <div class='form-group'> <label for='cod'> Ingrese Cedula de Identidad:</label> <input class='cod' type='text' name='cod' id='cod' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234556 E1234567' maxlength='12' > </div> <button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Datos del Trabajador C.I. N°: </div><div class='panel-body'> La Cedula de Identidad N° $ci No existe en la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
		}
		else
		{

			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consulta3.php'>Consultar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consultarpersonal3.php'>Consultar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte3.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)''></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='POST' action='../modelo/mod_consupersonal.php'> <h2>Consultar Datos del Personal</h2> <div class='form-group'> <label for='cod'> Ingrese Cedula de Identidad:</label> <input class='cod' type='text' name='cod' id='cod' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234556 E1234567' maxlength='12' > </div> <button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Datos del Trabajador C.I. N°:$cedulaper </div><div class='panel-body'><h4>Datos del Trabajador</h4><br> Nombres y Apellidos: $nombreper $apellido<br>Codigo del Trabajador: $codigotrb <br> Sexo: $sexo <br>Fecha de Nacimiento: $fechanac <br>Edad: $edad <br>Lugar de Nacimiento:$lugarnac <br>Nacionalidad: $nacion<br>Estado Civil: $edocivil<br> <h4> Datos del Cargo</h4><br>Codigo del Cargo:$codigocargo<br>Nombre del Cargo que Ocupa:  $nombrecargo<br>Turno de Trabajo: $turnot<br>Fecha de Ingreso: $fecing<br>Fecha de Egreso: $feceg<br><h4> Datos de Contacto</h4><br> Dirección de Habitación: $direccion<br> Telefono Local: $telefonolocal<br>Telefono Celular: $celular<br>Correo Electronico: $email</div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
		}
	
	
	
?>

