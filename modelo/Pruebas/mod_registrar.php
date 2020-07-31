<?php

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

	



	
		$query="INSERT INTO login (af_cedula,af_nombreusuario,af_apellidousuario,af_correousuario,af_usuario,af_contrasena,nu_nivel,nu_status)VALUES('$cedula','$nombre','$apellido','$correo','$usuario','$contrasena',$nivelusuario,$statususer)";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($consulta=true)
		 {
 				 echo "<script>alert('$nombre $apellido a sido registrado exitosamente con el usuario $usuario')</script>";

  				echo "<script>window.location='../vista/v_registrarusuario.html'</script>";
 	}		
 	else
 	{

  echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
		
 					
			

			pg_close($pgconn);


?>