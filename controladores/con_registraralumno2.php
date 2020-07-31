<?php
 session_start();
 
 
 
$codigoalumno  =  	$_POST['cod'];
$cedulaescolar = 	$_POST['ceduesc'];
$nombre = 			$_POST['name'];
$apellido = 		$_POST['ape'];
$fechanaci = 		$_POST['fecnac'];
$edadalumno =		$_POST['edad'];
$lugarnaci =		$_POST['lugarnac'];
$nacionalidad	=	$_POST['nacion'];
$sexoalumno =		$_POST['sexo'];
$fechainscripcion =	$_POST['fecins'];
$turnoclases	=	$_POST['turno'];
$curso =			$_POST['grado'];
$seccionclases =	$_POST['seccion'];



	include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();
	
	include('../modelo/mod_registraralumno2.php');
		$ins_consulta_cod= new alumno();
		$ins_consulta_ced = new alumno();
		$columnacod = $ins_consulta_cod->consultarcodigo($codigoalumno,$pgconn);
		$columnaced = $ins_consulta_ced->consultarcedula($cedulaescolar,$pgconn);
		if ($columnacod or $columnaced)
		{
?>
			<script type="text/javascript">
					alert("Error..... Codigo de Alumno ó Cedula Escolar ya Existen");
					parent.location="../vista/v_registraralumno2.html";
			</script>		
<?php			
		}
		else 
		{

			$ins_registar= new alumno();
			$consulta = $ins_registar->registro ($nombre,$edadalumno,$apellido,$sexoalumno,$fechanaci,$fechainscripcion,$turnoclases,$curso,$cedulaescolar,$nacionalidad,$lugarnaci,$seccionclases,$codigoalumno,$pgconn);
		}
		if ($consulta)
			
		{
?>

			<script type="text/javascript">
					alert("Se han Registrado los Datos del Estudiante Satisfactoriamente");
					parent.location="../vista/v_registrarrepresentante2.php";	
			</script>		

<?php		
		

		}
		
		
		
?>
					

						
						
			

					

?>