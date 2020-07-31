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

	



	
		$query="INSERT INTO representante (af_codigo_alumn_repre,af_cedurepre,af_nom_rep,af_ape_rep,dt_fecnac_rep,nu_edad_rep,af_lugarnac,ch_nac_rep,ch_sexo_rep,ch_edocivil,af_parentesco, af_ocupacion,af_direccion,af_telehab,af_telcel,af_correo)VALUES('$codigoalumrep','$cedularepre','$nombrerep','$apellidorep','$fechanacrep','$edadrep','$lugarnacrep','$nacionrep','$sexorep','$edocivilrep','$parentesco','$ocupacionrep','$direccion','$telefonolocal','$celular','$email')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($consulta=true)
		 {
 				 echo "<script>alert('Los datos de representante se han registrados Exitosamente, por favor ingrese es codigo de alumno $codigoalumrep en la pantalla de datos complementarios para continuar con el registro')</script>";

  				echo "<script>window.location='../vista/v_datoscomp.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>