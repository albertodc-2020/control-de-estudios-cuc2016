<?php 
		include('../modelo/mod_conexion.php');
		$conexion= new connex();
		$pgconn=$conexion->conectar();

		$query= "SELECT * FROM alumno WHERE id_alumno = (SELECT MAX(id_alumno) FROM alumno);";
		 $result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        
        $row=pg_fetch_array($result);
        $codigoalumno 		= 	$row['af_cod_alumn'];
	?>