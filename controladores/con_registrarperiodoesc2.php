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
				$ins_consulta_cod= new periodoesc();
				$columna = $ins_consulta_cod->consultarcodigo ($codigoalum,$pgconn);
			if ($columna)
		{
?>
			<script type="text/javascript">
					alert("Error Codigo de Alumno ya Existe en la Base de Datos");
					parent.location="../vista/v_datosperiodoesc2.html";
			</script>		
<?php			
		}
		else 
		{
			$ins_registar= new periodoesc();
			$consulta = $ins_registar->registro ($lite1,$lite2,$lite3,$lite4,$lite5,$lite6,$periodo1,$periodo2,$periodo3,$periodo4,$periodo5,$periodo6,$codigoalum,$fechaegre,$pgconn);
		}
		if ($consulta)
		{
?>
			<script type="text/javascript">
					alert("El Estudiante a sido registrado exitosamente");
					parent.location="../vista/v_registraralumno2.html";
			</script>		
<?php			
		}
?>
					

						
						
			

					

?>