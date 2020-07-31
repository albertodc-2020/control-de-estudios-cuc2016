<?php
 session_start();
 
$cedula = 			$_POST['cedu'];
$nombre = 			$_POST['name'];
$apellido = 		$_POST['ape'];
$correo = 			$_POST['email'];
$usuario =			$_POST['user'];
$contrasena	=		$_POST['contra2'];
$nivelusuario =		$_POST['nivel'];
$statususer =		$_POST['status'];

	include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();
	
	include('../modelo/mod_registrar1.php');
		$ins_buscar_cod = new registrar();
		$modi = $ins_buscar_cod->buscarmodificar($cedula,$pgconn);
		
?>
					

						
						
			

					

