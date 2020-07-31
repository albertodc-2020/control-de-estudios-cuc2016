<?php
 session_start();
 
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
	
	include('../modelo/mod_registrardatosesc2.php');
		$ins_modificar = new periodoesc();
		$modi = $ins_modificar->modificar($lite1,$lite2,$lite3,$lite4,$lite5,$lite6,$periodo1,$periodo2,$periodo3,$periodo4,$periodo5,$periodo6,$codigoalum,$fechaegre,$pgconn);

	
?>
					

						
						
			

					

?>