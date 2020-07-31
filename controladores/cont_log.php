<?php
session_start();
	$usuario					=$_POST['user'];
	$clave						=$_POST['pass'];
	$cedula						=$_POST['cedu'];
	$_SESSION['usuario']=$usuario ;
	$_SESSION['clave']=$clave ;
	$_SESSION['cedula']=$cedula;
	
	
	
			if ($usuario =="" or $clave =="")
			{
			session_start();
			$_SESSION['usuario'] =$_POST['user'];
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
					
			include('../modelo/mod_user.php');
					$instanciar =new usuario();
					$columna =$instanciar->autenticar($usuario,$clave,$cedula,$pgconn);
			if		($columna<>0)
			
					{
					session_start();
					$_SESSION['usuario'] =$_POST['user'];
					$_SESSION['clave'] 	 =$columna['af_contrasena'];
					$_SESSION['usuario'] =$columna['af_usuario'];
					$_SESSION['cedula']  =$columna['af_cedula'];
					
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