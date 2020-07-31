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

	include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();
	
	include('../modelo/mod_registrarpersonal1.php');
		$ins_consulta_cod= new personal();
		$ins_consulta_ced = new personal();
		$ins_consulta_cod2 = new personal();
		$columnacod = $ins_consulta_cod->consultarcodigo($codigotrb,$pgconn);
		$columnaced = $ins_consulta_ced->consultarcedula($cedulaper,$pgconn);
		$columnacod2 = $ins_consulta_cod->consultarcodigo2($codigocargo,$pgconn);

		if ($columnacod or $columnaced or $columnacod2)
		{
?>
			<script type="text/javascript">
					alert("No se han registrado los datos, Codigo  ó Cedula de identidad ya Existen");
					parent.location="../vista/v_registrarpersonal.html";
			</script>		
<?php			
		}
		else 
		{

			$ins_registar= new personal();
			$consulta = $ins_registar->registro ($codigotrb,$cedulaper,$nombreper,$apellido,$fechanac,$edad,$lugarnac,$nacion,$sexo,$edocivil,$direccion,$telefonolocal,$celular,$email,$codigocargo,$fecing,$feceg,$nombrecargo,$turnot,$pgconn);
		}
		if ($consulta)
		{
?>
			<script type="text/javascript">
					alert("Registro Guardado Satisfactoriamente");
					parent.location="../vista/v_registrarpersonal.html";
			</script>		
<?php			
		}
?>
					

						
						
			

					

?>