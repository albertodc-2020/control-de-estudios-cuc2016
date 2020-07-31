<?php
 session_start();
 
$codigoalumno     =	$_POST['cod'];
$cedulaescolar    = $_POST['ceduesc'];
$nombre           = $_POST['name'];
$apellido         = $_POST['ape'];
$fechanaci        = $_POST['fecnac'];
$edadalumno       =	$_POST['edad'];
$lugarnaci        =	$_POST['lugarnac'];
$nacionalidad     =	$_POST['nacion'];
$sexoalumno       =	$_POST['sexo'];
$fechainscripcion =	$_POST['fecins'];
$turnoclases	  =	$_POST['turno'];
$curso            =	$_POST['grado'];
$seccionclases    =	$_POST['seccion'];


	include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();
	
	include('../modelo/mod_registraralumno.php');
		$ins_modificar = new alumno();
		$modi = $ins_modificar->modificar($nombre,$edadalumno,$apellido,$sexoalumno,$fechanaci,$fechainscripcion,$turnoclases,$curso,$cedulaescolar,$nacionalidad,$lugarnaci,$seccionclases,$codigoalumno,$pgconn);

	
?>
					

						
						
			

					

?>