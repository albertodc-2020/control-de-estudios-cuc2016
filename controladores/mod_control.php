<?php
session_start();
	$nombre							=$_post['usuario'];
	$clave							=$_post['clave'];
	$_session['usuario'] = $usuario;
	$_session['clave']   = $clave;
	$_session ['cedula'] = $cedula;
	
			if ($nombre = =  or $clave = =)
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
					$intanciar =new usuario();
					$columna =$intanciar->autenticar($cedula,$nombre,$clave,$nivel,$ruta,$pgconn);
					if($columna<>0)
					{
					$_session['cedula'] = $columna['cedula'];
					$_session['clave'] =$columna['af_contrasena'];
					$_session['af_ruta_nivel']=$columna['af_ruta_nivel'];
					$_session['nombre']=$columna['af_nombre'];
?>
		<script type="text/javascript">
						parent.location = "./index.php"
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