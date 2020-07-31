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
		$ins_consulta_cedula= new registrar();
		$ins_consulta_correo= new registrar();
		$ins_consulta_usuario= new registrar();
		$columnaced = $ins_consulta_cedula->consultarced($cedula,$pgconn);
		$columnacor = $ins_consulta_correo->consultarcorreo($correo,$pgconn);
		$columnausu = $ins_consulta_usuario->consultarusuario($usuario,$pgconn);
		if ($columnaced or $columnacor or $columnausu)
		{
?>
			<script type="text/javascript">
					alert("Error Datos ya Existen en la Base de Datos");
					parent.location="../vista/v_registrarusuario.html";
			</script>		
<?php			
		}
		else 
		{
			$ins_registar= new registrar();
			$consultaced = $ins_registar->registro ($cedula,$nombre,$apellido,$correo,$usuario,$contrasena,$nivelusuario,$statususer,$pgconn);
		}
		if ($consultaced or $consultacor or $consultausu)
		{
?>
			<script type="text/javascript">
					alert("Registro Guardado Satisfactoriamente");
					parent.location="../vista/v_registrarusuario.html";
			</script>		
<?php			
		}
?>
					

						
						
			

					

?>