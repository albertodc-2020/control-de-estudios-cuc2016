<?php
 session_start();
 
$codigoalumrep 	=$_POST['cod'];
$cedularepre 	=$_POST['cedulai'];
$nombrerep 		=$_POST['name'];
$apellidorep 	=$_POST['ape'];
$fechanacrep 	=$_POST['fec_nac'];
$edadrep 		=$_POST['edad'];
$lugarnacrep 	=$_POST['lugar_nac'];
$nacionrep		=$_POST['nacion'];
$sexorep 		=$_POST['sexo'];
$edocivilrep 	=$_POST['edocivil'];
$parentesco		=$_POST['parent'];
$ocupacionrep 	=$_POST['ocupacion'];
$direccion 		=$_POST['direc'];
$telefonolocal	=$_POST['tel_hab'];
$celular 		=$_POST['cel'];
$email 			=$_POST['correo'];



	include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();
	
	include('../modelo/mod_registrarrepresentante2.php');
		$ins_modificar = new representante();
		$modi = $ins_modificar->modificar ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn);

	
?>
					

						
						
			

					

?>