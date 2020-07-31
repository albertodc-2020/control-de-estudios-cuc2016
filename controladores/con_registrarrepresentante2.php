<?php
 session_start();
 

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
	
			include('../modelo/mod_registrarrepresentante2.php');
			
				$ins_consulta_cod= new representante();
				$columna = $ins_consulta_cod->consultarcodigo ($codigoalumrep,$pgconn);
			if ($columna)
		{
?>
			<script type="text/javascript">
					alert("Error Codigo de Alumno ya Existe en la Base de Datos");
					parent.location="../vista/v_registrarrepresentante2.php";
			</script>		
<?php			
		}
		else 
		{
			$ins_registar= new representante();
			$consulta = $ins_registar->registro ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn);
		}

		if ($consulta)
		{
?>
			<script type="text/javascript">
					alert("Se han registrado los datos del Representante Correctamente");
					parent.location="../vista/v_datoscomp2.php";
			</script>		
<?php			
		}
?>
					

						
						
			

					

?>
