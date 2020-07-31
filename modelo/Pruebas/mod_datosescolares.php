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

	



	
		$query="INSERT INTO literal (af_literal_1er,af_literal_2do,af_literal_3er,af_literal_4to,af_literal_5to,af_literal_6to,af_periodoesco_1er,af_periodoesco_2do,af_periodoesco_3er,af_periodoesco_4to,af_periodoesco_5to,af_periodoesco_6to,af_cod_alumliteral,af_fec_egre)VALUES('$lite1','$lite2','$lite3','$lite4','$lite5','$lite6','$periodo1','$periodo2','$periodo3','$periodo4','$periodo5','$periodo6','$codigoalum','$fechaegre')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($consulta=true)
		 {
 				 echo "<script>alert('Literales Registrados Exitosamente, el estudiante a sido registrado con éxito')</script>";

  				echo "<script>window.location='../vista/v_registraralumno.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>