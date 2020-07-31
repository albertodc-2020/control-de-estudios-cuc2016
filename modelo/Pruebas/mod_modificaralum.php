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

	



	
		$query="UPDATE alumno SET af_nom_alum='$nombre',nu_edad_alum='$edadalumno',af_ape_alum='$apellido',ch_sexo_alum='$sexoalumno',dt_fecnac_alum='$fechanaci',dt_fecing_alum='$fechainscripcion',af_turno='$turnoclases',af_grado='$curso',af_cedula_esc='$cedulaescolar',ch_nacion_alum='$nacionalidad',ch_lugar_nac_alum='$lugarnaci', af_seccion_alum='$seccionclases',af_cod_alumn='$codigoalumno' WHERE af_cod_alumn ='$codigoalumno'";
		$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($modi=true)
		 {
 				 echo "<script>alert('Los datos del estudiante $nombre $apellido  codigo de estudiante N° $codigoalumno han sido actualizados')</script>";

  				echo "<script>window.location='../vista/v_actualizaralumno.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Los datos no se pudieron modificar')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>