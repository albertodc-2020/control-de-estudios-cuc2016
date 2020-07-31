<?php
include('../modelo/mod_conexion.php');
$conexion= new connex();
$pgconn=$conexion->conectar();

if(isset($_POST['buscar'])){
$codigoe=$_POST['cod1'];
$query="SELECT * FROM alumno WHERE af_cod_alumn='$codigoe'";
$result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());

$row=pg_fetch_array($result);

$codalumn 		= 	$row['af_cod_alumn'];
$cedulaescolar 	= 	$row['af_cedula_esc'];
$nombre 		= 	$row['af_nom_alum'];
$apellido 		= 	$row['af_ape_alum'];
$fechanaci 		= 	$row['dt_fecnac_alum'];
$edad 			=	$row['nu_edad_alum'];
$lugar 			=	$row['ch_lugar_nac_alum'];
$nacionalidad	=	$row['ch_nacion_alum'];
$sexo 			=	$row['ch_sexo_alum'];
$fechains	 	=	$row['dt_fecing_alum'];
$turno			=	$row['af_turno'];
$grado 			=	$row['af_grado'];
$seccion 		=	$row['af_seccion_alum'];


if($codigoe!=$codalumn){
	 			echo "<script>alert('El Codigo de estudiante N° $codigoe no esta registrado en la base de datos')</script>";

  				echo "<script>window.location='../vista/v_actualizaralumno.html'</script>";

}
else{
	
		echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Registrar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estiloact.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'></head><body><script src='..\js\jquery-3.1.0.min.js'></script> <script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li><li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li></ul><li><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li><li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li></ul><li><div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li></ul><li><div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li></ul><li><div class='link'><i class='fa fa-users'></i><a href='..\controladores\cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'></a></div><a href='javascript:void(0)'><div id='contenedor'><form id ='form1' name='form1' method='post' action='..\modelo\mod_actualizaralum.php'><h2>Actualizar Datos de Estudiante</h2><label class='ncod1' for='cod1'> Ingrese Codigo de Estudiante:</label><input type='text' name='cod1' id='cod1' pattern='^([A-Z]{1})([0-9]{3,12})$'' placeholder='Escriba Codigo' maxlength='12' > <input type='submit' name='buscar' value='Buscar' id='boton'></form><form id='form1' name='form1' method='post' action='..\modelo\mod_modificaralum.php'><h2>Datos de Estudiante</h2><label for='ceduesc'> Cedula escolar:</label><input type='text' name='ceduesc' id='ceduesc' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 o E1234567' maxlength='12' value='$cedulaescolar'><label for='cod'> Codigo de alumno:</label><input type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' readonly maxlength='12' value='$codalumn'><label for='name'> Nombres:</label><input type='text' name='name' id='name' pattern='[A-Za-z ]{2,30}'' placeholder='Escriba Nombres' maxlength='30' value='$nombre'><label for='ape'> Apellidos:</label><input type='text' name='ape' id='ape' pattern='[A-Za-z ]{2,30}'' placeholder='Escriba Apellidos' maxlength='30' value='$apellido'><label for='fecnac'> Fecha de Nacimiento:</label><input type='date' name='fecnac' id='fecnac' placeholder='Fecha de Nacimiento' value='$fechanaci'><label for='edad'> Edad:</label><input type='number' name='edad' value='$edad' min='5' max='15' id='edad' placeholder='Escriba Edad' ><label for='lugar'> Lugar de Nacimiento:</label><select name='lugarnac' id='lugarnac' ><option value='$lugar' selected>$lugar</option><option value='Amazonas'>Amazonas</option><option value='Anzoategui'>Anzoategui</option><option value='Apure'>Apure</option><option value='Aragua'>Aragua</option><option value='Barinas'>Barinas</option><option value='Bolivar'>Bolivar</option><option value='Carabobo'>Carabobo</option><option value='Cojedes'>Cojedes</option><option value='Delta Amacuro'>Delta Amacuro</option><option value='Distrito Capital'>Distrito Capital</option><option value='Falcon'>Falcon</option><option value='Guarico'>Guarico</option><option value='Lara'>Lara</option><option value='Merida'>Merida</option><option value='Miranda'>Miranda</option><option value='Monagas'>Monagas</option><option value='Nueva Esparta'>Nueva Esparta</option><option value='Portuguesa'>Portuguesa</option><option value='Sucre'>Sucre</option><option value='Tachira'>Tachira</option><option value='Trujillo'>Trujillo</option><option value='Vargas'>Vargas</option><option value='Yaracuy'>Yaracuy</option><option value='Zulia'>Zulia</option><option value='Otro'>Otro</option></select><label for='nacion'> Nacionalidad:</label><select name='nacion' id='nacion' ><option value='$nacionalidad' selected>$nacionalidad</option><option value='Venezolano'>Venezolano</option>	<option value='Extranjero'>Extranjero</option></select><label for='sexo'> Sexo:</label></option><select name='sexo' id='sexo' ><option value='$sexo'selected>$sexo</option><option value='Masculino'>Masculino</option><option value='Femenino'>Femenino</option></select><h2>Datos Escolares</h2><label for='Fecins'> Fecha de Inscripción:</label><input type='date' name='fecins' id='fecins' placeholder='Fecha de Inscripción' value='$fechains'><label for='turno'> Turno de Clases:</label><select name='turno' id='turno' ><option value='$turno'Selected>$turno</option><option value='Mañana'>Mañana</option><option value='Tarde'>Tarde</option></select><label for='grado'> Grado que Cursa:</label><select name='grado' id='grado' ><option value='$grado'Selected>$grado</option><option value='Primero 1er'>Primero 1er</option><option value='Segundo 2do'>Segundo 2do</option><option value='Tercero 3er'>Tercer 3er</option><option value='Cuarto 4to'>Cuarto 4to</option><option value='Quinto 5to'>Quinto 5to</option><option value='Sexto 6to'>Sexto 6to</option></select><label for='seccion'> Sección de Curso:</label><select name='seccion' id='seccion' ><option value='$seccion'Selected>$seccion</option><option value='A'>A</option><option value='B'>B</option><option value='C'>C</option><option value='A1'>A1</option><option value='B1'>B1</option><option value='C1'>C1</option><option value='A2'>A2</option><option value='B2'>B2</option><option value='C2'>C2</option><option value='A3'>A3</option><option value='B3'>B3</option><option value='C3'>C3</option></select><input type='submit' name='guardar' value='Actualizar Datos' id='boton' ></form></div><br></div><a href='javascript:void(0)'></a></body></html>";
		
	}
}
	

?>
