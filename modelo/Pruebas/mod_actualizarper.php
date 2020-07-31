<?php
include('../modelo/mod_conexion.php');
$conexion= new connex();
$pgconn=$conexion->conectar();

if(isset($_POST['buscar'])){
$cedula=$_POST['cod1'];
$query="SELECT * FROM personal INNER JOIN cargo ON af_ced_per=af_cedulap WHERE personal.af_ced_per='$cedula' ";
$result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());



$row=pg_fetch_array($result);

$codigotrb		=	$row['af_id_codigo_tra'];
$cedulaper	 	= 	$row['af_ced_per'];
$nombreper 		= 	$row['af_nom_pers'];
$apellido 	 	= 	$row['af_ape_per'];
$fechanac 	 	= 	$row['dt_fecnac_per'];
$edad 	 		=	$row['nu_edad_per'];
$lugarnac 	 	=	$row['af_lugarnacp'];
$nacion 		=	$row['af_nacper'];
$sexo 	 		=	$row['ch_sexo_per'];
$edocivil 	 	=	$row['af_edocivilp'];
$codigocargo	=	$row['af_id_codigo_cargo'];
$fecing		 	=	$row['af_fechaingr'];
$feceg		 	=	$row['af_fechaegre'];
$turnot			=	$row['af_turno'];
$nombrecargo 	=	$row['af_nombrecar'];
$direccion 		=	$row['af_direcper'];
$telef			=	$row['af_telhabp'];
$celular 		=	$row['af_celper'];
$email 			=	$row['af_correop'];



if($cedula!=$cedulaper)
{
	 			echo "<script> alert('La Cedula de Identidad N° $cedula no esta registrada en la base de datos')</script>";
  				echo "<script> window.location='../vista/v_actualizarpersonal.html'</script>";

}
else{

		echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Registrar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estiloactper.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'></head><body><script src='..\js\jquery-3.1.0.min.js'></script> <script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li><li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li></ul><li><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li><li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li></ul><li><div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li></ul><li><div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div><ul class='submenu'><li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li></ul><li><div class='link'><i class='fa fa-users'></i><a href='..\controladores\cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'></a></div><a href='javascript:void(0)'><div id='contenedor'> <form id ='form1' name='form1' method='post' action='..\modelo\mod_actualizarper.php'> <h2>Actualizar Datos del Personal</h2> <label for='cod1'> Ingrese La Cedula de Identidad:</label> <input type='text' name='cod1' id='cod1' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 E1234567' maxlength='12'><br> <input type='submit' name='buscar' value='Buscar' id='boton'> </form> <form id='form1' name='form1' method='post' action='../modelo/mod_modificarper.php'> <h2>Registrar Personal</h2> <label for='codigo'> Codigo del Trabajador:</label> <input type='text' id='codigo' name='codt' pattern='^([A-Z 0-9]{3,12})$' placeholder='Escriba codigo' maxlength='12' required value='$codigotrb'> <label for='cedulai'> Cedula de Identidad:</label> <input type='text' id='cedulai' name='cedulai' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 o E1234567' maxlength='15' readonly value='$cedulaper' > <label for='nombre'> Nombres:</label> <input type='text' id='nombre' name='name' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Nombres' maxlength='30' value='$nombreper' > <label for='cedula'> Apellidos:</label> <input type='text' id='apellido' name='ape' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Apellidos' maxlength='30' value='$apellido' > <label for='fec_nac'> Fecha de Nacimiento:</label> <input type='date' id='fec_nac' name='fec_nac' placeholder='Fecha de Nacimiento' value='$fechanac'> <label for='edad'> Edad:</label> <input type='number' name='edad' value='$edad' min='18' max='100' id='edad' placeholder='Escriba Edad' > <label for='lugar'> Lugar de Nacimiento:</label> <select name='lugar_nac' id='lugar_nac' > <option value='$lugarnac' selected>$lugarnac</option> <option value='Amazonas'>Amazonas</option> <option value='Anzoategui'>Anzoategui</option> <option value='Apure'>Apure</option> <option value='Aragua'>Aragua</option> <option value='Barinas'>Barinas</option> <option value='Bolivar'>Bolivar</option> <option value='Carabobo'>Carabobo</option> <option value='Cojedes'>Cojedes</option> <option value='Delta Amacuro'>Delta Amacuro</option> <option value='Distrito Capital'>Distrito Capital</option> <option value='Falcon'>Falcon</option> <option value='Guarico'>Guarico</option> <option value='Lara'>Lara</option> <option value='Merida'>Merida</option> <option value='Miranda'>Miranda</option> <option value='Monagas'>Monagas</option> <option value='Nueva Esparta'>Nueva Esparta</option> <option value='Portuguesa'>Portuguesa</option> <option value='Sucre'>Sucre</option> <option value='Tachira'>Tachira</option> <option value='Trujillo'>Trujillo</option> <option value='Vargas'>Vargas</option> <option value='Yaracuy'>Yaracuy</option> <option value='Zulia'>Zulia</option> <option value='Otro'>Otro</option> </select> <label for='nacionalidad'> Nacionalidad:</label> <select name='nacion' id='nacionalidad' > <option value='$nacion'>Venezolano</option> <option value='Venezolano'>Venezolano</option> <option value='Extranjero'>Extranjero</option> </select> <label for='sexo'> Sexo:</label> <select name='sexo' id='sexo' > <option value='$sexo'>$sexo</option> <option value='Masculino'>Masculino</option> <option value='Femenino'>Femenino</option> </select> <label for='estado'> Estado Civil:</label> <select name='edocivil' id='estado' > <option value='$edocivil'>$edocivil</option> <option value='Soltero'>Soltero</option> <option value='Casado'>Casado</option> <option value='Divorciado'>Divorciado</option> <option value='Viudo'>Viudo</option> </select> <h2>Datos del Cargo</h2> <label for='codigo'> Codigo de cargo:</label> <input type='text' name ='codc' id='codigo' pattern='^([A-Z 0-9]{3,12})$' placeholder='Escriba codigo' maxlength='12' value='$codigocargo'> <label for='fec_nac'> Fecha de Ingreso:</label> <input type='date' id='fec_ing' name='fecin' value='$fecing' > <label for='fec_nac'> Fecha de Egreso:</label> <input type='date' id='fec_egreso' name='fecegre' value='$feceg' > <label for='turno'> Turno de Trabajo:</label> <select name='turno' id='turno' > <option value='$turnot'>$turnot</option> <option value='No Aplica'>No Aplica</option> <option value='Mañana'>Mañana</option> <option value='Tarde'>Tarde</option> <option value='Mixto'>Mixto</option> </select> <label for='ocupacion'> Nombre del Cargo:</label> <input type='text' id='ocupacion' name='nomcar' pattern='[A-Za-z ]{2,30}' placeholder='escriba a que se dedica' maxlength='30' value='$nombrecargo'> <h2>Datos de Contacto</h2> <label for='direccion'> Dirección de Habitación:</label> <input type='text' id='direccion' name='direc' placeholder='Escriba dirección completa' maxlength='150' value='$direccion' > <label for='telefono'> Telefono Local:</label> <input type='text' id='telefono' name='tel_hab' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono' value='$telef' > <label for='celular'> Telefono Celular:</label> <input type='text' id='celular' name='cel' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono celular' value='$celular' > <label for='correo'> Correo Electronico:</label> <input type='text' id='correo' name='correo' pattern='[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+' maxlength='30' placeholder='Escriba dirección de correo electronico' value='$email' > <input type='submit' name='guardar' value='Actualizar Datos' id='boton' > </form></div><br></div><a href='javascript:void(0)'></a></body></html>"; 
	}
}
	
?>
