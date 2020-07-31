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
$direccion 		=	$_POST['direc'];
$telef			=	$_POST['tel_hab'];
$celular 		=	$_POST['cel'];
$email 			=	$_POST['correo'];
$codigocargo	=	$_POST['codc'];
$fecing		 	=	$_POST['fecin'];
$feceg		 	=	$_POST['fecegre'];
$turnot			=	$_POST['turno'];
$nombrecargo 	=	$_POST['nomcar'];



				
				
						
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();

	



	
		$query="UPDATE  personal SET af_id_codigo_tra='$codigotrb',af_ced_per='$cedulaper',af_nom_pers='$nombreper',af_ape_per='$apellido',dt_fecnac_per='$fechanac',nu_edad_per='$edad', af_lugarnacp='$lugarnac', af_nacper='$nacion', ch_sexo_per='$sexo', af_edocivilp='$edocivil', af_direcper='$direccion', af_telhabp='$telef', af_celper='$celular', af_correop='$email' WHERE af_ced_per='$cedulaper'";
		$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());

		$query2="UPDATE  cargo SET af_id_codigo_cargo='$codigocargo',af_fechaingr='$fecing',af_fechaegre='$feceg',af_nombrecar='$nombrecargo',af_turno='$turnot',af_cedulap='$cedulaper' WHERE af_cedulap='$cedulaper' ";
		$modi= pg_query($pgconn,$query2) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($modi=true)
		 {
 				 echo "<script>alert('Los Datos de $nombreper $apellido  han sido actualizados')</script>";

  				echo "<script>window.location='../vista/v_actualizarpersonal.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Los datos no se pudieron modificar')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>