<?php
session_start();
	$usuario					=$_POST['user'];
	$clave						=$_POST['pass'];
	$_SESSION['user']=$usuario ;
	$_SESSION['pass']=$clave ;
	
	
			if ($usuario =="" or $clave =="")
			{
?>
					<script type="text/javascript">
					alert("Debe Ingresar el Usuario y Contraseña");
					parent.location = "../vista/v_login.php"
					</script>
<?php					
			}	
			
			include('../modelo/mod_conexion.php');
					$conexion= new connex();
					$pgconn=$conexion->conectar();
					
			include('../modelo/mod_usuario2.php');
					$instanciar =new usuario();
					$columna =$instanciar->autenticar($usuario,$clave,$pgconn);
			if		($columna<>0)
					{
					
					$_SESSION['clave'] =$columna['af_contrasena'];
					
					$_SESSION['usuario']=$columna['af_usuario'];
?>
		<script type="text/javascript">
						parent.location = "../vista/menu.php"
		</script>
<?php		
					
					}
					else
					{
?>
		<script type="text/javascript">
						alert("Usuario no existe");
						parent.location="../vista/v_login.php"
		</script>
<?php
					}
?>					