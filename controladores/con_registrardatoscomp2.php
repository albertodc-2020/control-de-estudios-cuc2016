<?php
 session_start();
 
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
	
			include('../modelo/mod_registrardatoscomp2.php');
				$ins_consulta_cod= new datoscomp();
				$columna = $ins_consulta_cod->consultarcodigo ($codigoalum,$pgconn);
			if ($columna)
		{
?>
			<script type="text/javascript">
					alert("Error Codigo de Alumno ya Existe en la Base de Datos");
					parent.location="../vista/v_datoscomp2.php";
			</script>		
<?php			
		}
		else 
		{
			$ins_registar= new datoscomp();
			$consulta = $ins_registar->registro ($codigoalum,$viveconm,$nombremadre,$apellidomadre,$cedulamadre,$fechanacm,$edocivilm,$edadma,$nacionma,$ocupacionm,$direccionm,$telefonom,$direcciontm,$telefonotm,$viveconp,$nombrepadre,$apellidopadre,$cedulapadre,$fechanacp,$edocivilp,$edadpa,$nacionpa,$ocupacionpa,$direccionp,$telefonop,$direcciontp,$telefonotp,$alergia,$enfermedad,$explique,$pgconn);
		}
		if ($consulta)
		{
?>
			<script type="text/javascript">
					alert("Se han registrado los Datos Complementarios Satisfactoriamente");
					parent.location="../vista/v_datosperiodoesc2.php";
			</script>		
<?php			
		}
?>
					

						
						
			

					

?>