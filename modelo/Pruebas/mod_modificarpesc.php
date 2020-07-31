<?php
$codigoalum	=			$_POST['cod'];
$lite1 		= 			$_POST['lite_1er'];
$periodo1 	= 			$_POST['periodo_1er'];
$lite2	 	= 			$_POST['lite_2do'];
$periodo2 	= 			$_POST['periodo_2do'];
$lite3 		=			$_POST['lite_3er'];
$periodo3	=			$_POST['periodo_3er'];
$lite4 		=			$_POST['lite_4to'];
$periodo4 	=			$_POST['periodo_4to'];
$lite5		=			$_POST['lite_5to'];
$periodo5	=			$_POST['periodo_5to'];
$lite6		=			$_POST['lite_6to'];
$periodo6	=			$_POST['periodo_6to'];
$fechaegre	=			$_POST['fec_egreso'];


				
				
						
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();

	



	
		$query="UPDATE literal SET af_literal_1er='$lite1',af_literal_2do='$lite2',af_literal_3er='$lite3',af_literal_4to='$lite4',af_literal_5to='$lite5',af_literal_6to='$lite6',af_periodoesco_1er='$periodo1',af_periodoesco_2do='$periodo2',af_periodoesco_3er='$periodo3',af_periodoesco_4to='$periodo4',af_periodoesco_5to='$periodo5',af_periodoesco_6to='$periodo6',af_cod_alumliteral='$codigoalum',af_fec_egre='$fechaegre' WHERE af_cod_alumliteral='$codigoalum'";
		$MODI= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($MODI=true)
		 {
 				 echo "<script>alert('Los Datos Escolares del Estudiante con el codigo  N° $codigoalum han sido Actualizados con Exito')</script>";

  				echo "<script>window.location='../vista/v_actdatosperiodoesc.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>