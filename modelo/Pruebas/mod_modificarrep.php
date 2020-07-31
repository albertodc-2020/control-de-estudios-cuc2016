<?php
$codigoalumrep =	$_POST['cod'];
$cedularepre = 		$_POST['cedulai'];
$nombrerep = 		$_POST['name'];
$apellidorep = 		$_POST['ape'];
$fechanacrep = 		$_POST['fec_nac'];
$edadrep =			$_POST['edad'];
$lugarnacrep =		$_POST['lugar_nac'];
$nacionrep	=		$_POST['nacion'];
$sexorep =			$_POST['sexo'];
$edocivilrep =		$_POST['edocivil'];
$parentesco	=		$_POST['parent'];
$ocupacionrep =		$_POST['ocupacion'];
$direccion =		$_POST['direc'];
$telefonolocal	=	$_POST['tel_hab'];
$celular =			$_POST['cel'];
$email =			$_POST['correo'];

				
				
						
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();

	



	
		$query="UPDATE representante SET af_codigo_alumn_repre='$codigoalumrep',af_cedurepre='$cedularepre', af_nom_rep='$nombrerep',af_ape_rep='$apellidorep',dt_fecnac_rep='$fechanacrep',nu_edad_rep='$edadrep',af_lugarnac='$lugarnacrep',ch_nac_rep='$nacionrep',ch_sexo_rep='$sexorep',ch_edocivil='$edocivilrep',af_parentesco='$parentesco', af_ocupacion='$ocupacionrep',af_direccion='$direccion',af_telehab='$telefonolocal',af_telcel='$celular',af_correo='$email' WHERE af_codigo_alumn_repre='$codigoalumrep'";
		$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($modi=true)
		 {
 				 echo "<script>alert('Los datos del representante del estudiante codigo N°$codigoalumrep se han actualizado correctamente')</script>";

  				echo "<script>window.location='../vista/v_actualizarrepresentante.html'</script>";
 	}		
 	else
 	{

  		

  				echo "<script>alert('Datos no pudieron ser registrados')</script>";
 	}
		
 					
			

			pg_close($pgconn);


?>