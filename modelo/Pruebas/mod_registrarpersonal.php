<?php
$codigotrb		=	$_POST['codt'];
$cedulaper	 	= 	$_POST['cedulai'];
$nombreper 		= 	$_POST['name'];
$apellido 	 	= 	$_POST['ape'];
$fechanac 	 	= 	$_POST['fec_nac'];
$edad 	 		=	$_POST['edad'];
$lugarnac 	 	=	$_POST['lugar_nac'];
$nacion 		=	$_POST['nacion'];
$sexo 	 		=	$_POST['sexo'];
$edocivil 	 	=	$_POST['edocivil'];
$codigocargo	=	$_POST['codc'];
$fecing		 	=	$_POST['fecin'];
$feceg		 	=	$_POST['fecegre'];
$turnot			=	$_POST['turno'];
$nombrecargo 	=	$_POST['nomcar'];
$direccion 		=	$_POST['direc'];
$telefonolocal	=	$_POST['tel_hab'];
$celular 		=	$_POST['cel'];
$email 			=	$_POST['correo'];

				
				
						
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();

	



	
		$query="INSERT INTO personal (af_id_codigo_tra,af_ced_per,af_nom_pers,af_ape_per,dt_fecnac_per,nu_edad_per,af_lugarnacp,af_nacper,ch_sexo_per,af_edocivilp,af_direcper,af_telhabp,af_celper,af_correop)VALUES('$codigotrb','$cedulaper','$nombreper','$apellido','$fechanac','$edad','$lugarnac','$nacion','$sexo','$edocivil','$direccion','$telefonolocal','$celular','$email')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());

		$query2="INSERT INTO cargo (af_id_codigo_cargo,af_fechaingr,af_fechaegre,af_nombrecar,af_turno,af_cedulap)VALUES('$codigocargo','$fecing','$feceg','$nombrecargo','$turnot','$cedulaper')";
		$consulta= pg_query($pgconn,$query2) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($consulta=true)
		 {
 				 echo "<script>alert('Los Datos de $nombreper $apellido han sido registrado exitosamente.')</script>";

  				echo "<script>window.location='../vista/v_registrarpersonal.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>