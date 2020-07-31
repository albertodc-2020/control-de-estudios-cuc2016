<?php
$codigoalumno =		$_POST['cod'];
$cedulaescolar = 	$_POST['ceduesc'];
$nombre = 			$_POST['name'];
$apellido = 		$_POST['ape'];
$fechanaci = 		$_POST['fecnac'];
$edadalumno =		$_POST['edad'];
$lugarnaci =		$_POST['lugarnac'];
$nacionalidad	=	$_POST['nacion'];
$sexoalumno =		$_POST['sexo'];
$fechainscripcion =	$_POST['fecins'];
$turnoclases	=	$_POST['turno'];
$curso =			$_POST['grado'];
$seccionclases =	$_POST['seccion'];


				
				
						
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();

	



	
		$query="INSERT INTO alumno (af_nom_alum,nu_edad_alum,af_ape_alum,ch_sexo_alum,dt_fecnac_alum,dt_fecing_alum,af_turno,af_grado,af_cedula_esc,ch_nacion_alum,ch_lugar_nac_alum, af_seccion_alum,af_cod_alumn)VALUES('$nombre',$edadalumno,'$apellido','$sexoalumno','$fechanaci','$fechainscripcion','$turnoclases','$curso','$cedulaescolar','$nacionalidad','$lugarnaci','$seccionclases','$codigoalumno')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($consulta=true)
		 {
 				 echo "<script>alert('El estudiante $nombre $apellido se ha registrado con el codigo  $codigoalumno por favor llene los datos del Representante y coloque el mismo codigo de alumno')</script>";

  				echo "<script>window.location='../vista/v_registrarrepresentante.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>