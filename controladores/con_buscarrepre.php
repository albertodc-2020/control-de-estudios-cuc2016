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
	
	include('../modelo/mod_registrarrepresentante.php');
		$ins_buscar_cod = new representante();
		$modi = $ins_buscar_cod->buscarcodigo($codigoe,$pgconn);

	
?>
					

						
						
			

					

?>