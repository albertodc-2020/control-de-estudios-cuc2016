<?php
 session_start();
 
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
$cedula         =	$_POST['cod1'];

	include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();
	
	include('../modelo/mod_registrarpersonal1.php');
		$ins_buscar_ced = new personal();
		$result = $ins_buscar_ced->buscarmodificar($cedula,$pgconn);

	
?>
					

						
						
			

					

?>