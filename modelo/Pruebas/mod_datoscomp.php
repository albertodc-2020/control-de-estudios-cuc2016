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

	



	
		$query="INSERT INTO datoscomp (af_codalum_dc,af_vmad,af_nombremadre,af_apellidomadre,af_cedumadre,af_nacmad,af_edocivilmadre,nu_edadmadre,ch_nacionm,af_ocumadre,af_direccmadre,af_telmadre,af_directrabmadre,af_teltrabmadre,af_vpadre,af_nombrepadre,af_apellidopadre,af_cedupadre,af_nacpad,af_edocivilpadre,nu_edadpadre,ch_nacionp,af_ocupadre,af_direcpadre,af_telpadre,af_directrabpadre,af_teltrabpadre,af_alergia,af_enfermedad,af_explique)VALUES('$codigoalum','$viveconm','$nombremadre','$apellidomadre','$cedulamadre','$fechanacm','$edocivilm',$edadma,'$nacionma','$ocupacionm','$direccionm','$telefonom','$direcciontm','$telefonotm','$viveconp','$nombrepadre','$apellidopadre','$cedulapadre','$fechanacp','$edocivilp','$edadpa','$nacionpa','$ocupacionpa','$direccionp','$telefonop','$direcciontp','$telefonotp','$alergia','$enfermedad','$explique')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($consulta=true)
		 {
 				 echo "<script>alert('Los datos complementarios han sido registrados Exitosamente, recuerde colocar el codigo de alumno $codigoalum en los datos del periodo escolar')</script>";

  				echo "<script>window.location='../vista/v_datosperiodoesc.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>