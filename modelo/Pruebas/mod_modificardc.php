<?php
$codigoalum =		$_POST['cod'];
/*datos de la madre*/
$viveconm = 		$_POST['vmadre'];
$nombremadre = 		$_POST['name'];
$apellidomadre = 	$_POST['ape'];
$cedulamadre =		$_POST['cedulai'];
$fechanacm = 		$_POST['fec_nac'];
$edocivilm =		$_POST['edocivil'];
$edadma =			$_POST['edad'];
$nacionma	=		$_POST['nacion'];
$ocupacionm =		$_POST['ocupacion'];
$direccionm =		$_POST['direc'];
$telefonom	=		$_POST['tel_hab'];
$direcciontm =		$_POST['directm'];
$telefonotm	=		$_POST['tel_tm'];
/* datos del padre*/
$viveconp = 		$_POST['vpadre'];
$nombrepadre = 		$_POST['namep'];
$apellidopadre = 	$_POST['apep'];
$cedulapadre =		$_POST['cedulaip'];
$fechanacp = 		$_POST['fec_nacp'];
$edocivilp =		$_POST['edocivilp'];
$edadpa =			$_POST['edadp'];
$nacionpa	=		$_POST['nacionp'];
$ocupacionpa =		$_POST['ocupacionp'];
$direccionp =		$_POST['direcp'];
$telefonop	=		$_POST['tel_habp'];
$direcciontp =		$_POST['directp'];
$telefonotp	=		$_POST['tel_tp'];
/*datos adicionales del niño*/
$enfermedad =		$_POST['enfer'];
$alergia =			$_POST['aler'];
$explique =			$_POST['exp'];
				
				
						
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();

	



	
		$query="UPDATE datoscomp SET af_codalum_dc='$codigoalum',af_vmad='$viveconm',af_nombremadre='$nombremadre',af_apellidomadre='$apellidomadre',af_cedumadre='$cedulamadre',af_nacmad='$fechanacm',af_edocivilmadre='$edocivilm',nu_edadmadre='$edadma',ch_nacionm='$nacionma',af_ocumadre='$ocupacionm',af_direccmadre='$direccionm',af_telmadre='$telefonom',af_directrabmadre='$direcciontm',af_teltrabmadre='$telefonotm',af_vpadre='$viveconp',af_nombrepadre='$nombrepadre',af_apellidopadre='$apellidopadre',af_cedupadre='$cedulapadre',af_nacpad='$fechanacp',af_edocivilpadre='$edocivilp',nu_edadpadre='$edadpa',ch_nacionp='$nacionpa',af_ocupadre='$ocupacionpa',af_direcpadre='$direccionp',af_telpadre='$telefonop',af_directrabpadre='$direcciontp',af_teltrabpadre='$telefonotp',af_alergia='$alergia',af_enfermedad='$enfermedad',af_explique='$explique' WHERE af_codalum_dc='$codigoalum' ";
		$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($modi=true)
		 {
 				 echo "<script>alert('Los Datos Complementarios del Estudiante con el codigo N°$codigoalum han sido actualizados')</script>";

  				echo "<script>window.location='../vista/v_actdatoscomp.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>