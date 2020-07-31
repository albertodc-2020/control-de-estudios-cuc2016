<?php
 session_star();
 
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
					$consulta= new registrar();
					$columna = $consulta->Consultar ($cedula,$pgconn);
					
			if ($columna<>0)
			{
?>
					<script type="text/javascript">
							alert("Cedula Duplicada");
							parent.location="../vista/v_registrarusuario.html"
					</script>		
<?php			
			}
			else {
				
				
					$registar= new registrar();
					$respuesta = $agregaruser->Registrar ($cedula,$af_nombreusuario,$apellido,$correo,$usuario,$contrasena,$nivelusuario,$statususer,$pgconn));
					
			}
?>
					

						
						
			

					

?>