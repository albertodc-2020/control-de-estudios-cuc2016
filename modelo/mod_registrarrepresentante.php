<?php

Class representante
{
	
Private $codigoalumrep;
Private $cedularepre;
Private $nombrerep;
Private $apellidorep;
Private $fechanacrep;
Private $edadrep;
Private $lugarnacrep ;
Private $nacionrep;
Private $sexorep;
Private $edocivilrep;
Private $parentesco;
Private $ocupacionrep;
Private $direccion;
Private $telefonolocal;
Private $celular;
Private $email;






public function inicializar ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn) 
{
$this-> af_codigo_alumn_repre = $codigoalumrep;
$this-> af_cedurepre = $cedularepre;
$this-> af_nom_rep = $nombrerep;
$this-> af_ape_rep = $apellidorep;
$this-> dt_fecnac_rep = $fechanacrep;
$this-> nu_edad_rep = $edadrep;
$this-> af_lugarnac = $lugarnacrep;
$this-> ch_nac_rep =  $nacionrep;
$this-> ch_sexo_rep = $sexorep;
$this-> ch_edocivil = $edocivilrep;
$this-> af_parentesco = $parentesco; 
$this-> af_ocupacion = $ocupacionrep;
$this-> af_direccion = $direccion;
$this-> af_telehab =  $telefonolocal;
$this-> af_telcel = $celular;
$this-> af_correo = $email;
}

	Public function registro ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn) 
	{
    	
		$query="INSERT INTO representante (af_codigo_alumn_repre,af_cedurepre,af_nom_rep,af_ape_rep,dt_fecnac_rep,nu_edad_rep,af_lugarnac,ch_nac_rep,ch_sexo_rep,ch_edocivil,af_parentesco, af_ocupacion,af_direccion,af_telehab,af_telcel,af_correo)VALUES('$codigoalumrep','$cedularepre','$nombrerep','$apellidorep','$fechanacrep','$edadrep','$lugarnacrep','$nacionrep','$sexorep','$edocivilrep','$parentesco','$ocupacionrep','$direccion','$telefonolocal','$celular','$email')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        if ($consulta)
		{
			return ($consulta);
			
		}
    		
	}
	Public function consultarcodigo ($codigoalumrep,$pgconn)
	{
		$query="SELECT * from representante where  af_codigo_alumn_repre ='$codigoalumrep' ;";
		$consultacod= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		if($consultacod)
		{
 				$nreg= pg_fetch_array($consultacod);
 				return  $nreg;
		}	
		
	}
	Public function buscarcodigo ($codigoe,$pgconn)
	{

	if(isset($_POST['buscar'])){
       $codigoe=$_POST['cod1'];
       $query="SELECT * FROM representante WHERE af_codigo_alumn_repre='$codigoe'";
       $result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
       
       $row=pg_fetch_array($result);
       
       $codigoalumrep 		=		$row['af_codigo_alumn_repre'];       
       $cedularepre 		= 		$row['af_cedurepre'];
       $nombrerep 			= 		$row['af_nom_rep'];
       $apellidorep 		= 		$row['af_ape_rep'];
       $fechanacrep 		= 		$row['dt_fecnac_rep'];
       $edadrep 			=		$row['nu_edad_rep'];
       $lugarnacrep 		=		$row['af_lugarnac'];
       $nacionrep			=		$row['ch_nac_rep'];
       $sexorep 			=		$row['ch_sexo_rep'];
       $edocivilrep 		=		$row['ch_edocivil'];
       $parentesco			=		$row['af_parentesco'];
       $ocupacionrep 		=		$row['af_ocupacion'];
       $direccion 			=		$row['af_direccion'];
       $telefonolocal		=		$row['af_telehab'];
       $celular 			=		$row['af_telcel'];
       $email 				=		$row['af_correo'];
       
       
       if($codigoe!=$codigoalumrep){
	 			echo "<script>alert('El Codigo de estudiante N° $codigoe no esta registrado en la base de datos')</script>";

  				echo "<script>window.location='../vista/v_actualizarrepresentante.html'</script>";

}
else{
	
		echo "<!DOCTYPE html> <html lang='es'> <head> <meta charset='UTF-8'> <title>Administrar Usuario</title> <link rel='stylesheet' type='text/css' href='../css/estiloact.css'/> <link rel='stylesheet' href='../css/font-awesome.min.css'> </head> <body> <script src='..\js\validarcontra.js'></script> <script src='..\js\jquery-3.1.0.min.js'></script> <script src='..\js\java.js'></script> <div id='general'> <div id='tope'> </div> <div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li> <li><a href='../vista/v_actualizarusuario.html'>Actualizar Datos de Usuario</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'></a></div><a href='javascript:void(0)'><div id='contenedor'><form id ='form1' name='form1' method='post' action='..\controladores\con_buscarrepre.php'><h2>Actualizar Datos del Representante</h2><label class='ncod1' for='cod1'> Ingrese Codigo de Estudiante:</label><input type='text' name='cod1' id='cod1' pattern='^([A-Z]{1})([0-9]{3,12})$'' placeholder='Escriba Codigo' maxlength='12' > <input type='submit' name='buscar' value='Buscar' id='boton'></form><form id='form1' name='form1' method='post' action='..\controladores\con_modirepre.php' ><h2>Datos del Representante del Estudiante</h2><label for='cod'> Codigo de alumno:</label><input type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba codigo' maxlength='12' value='$codigoalumrep' readonly><label for='cedulai'> Cedula de Identidad:</label><input type='text' name='cedulai' id='cedulai' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 o E1234567' maxlength='15' value='$cedularepre'><label for='name'> Nombres:</label><input type='text' name='name' id='name' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Nombres' maxlength='30' value='$nombrerep'><label for='ape'> Apellidos:</label><input type='text' name='ape' id='ape' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Apellidos' maxlength='30' value='$apellidorep'><label for='fec_nac'> Fecha de Nacimiento:</label><input type='date' name='fec_nac' id='fec_nac' placeholder='Fecha de Nacimiento' value='$fechanacrep'><label for='edad'> Edad:</label><input type='number' name='edad'  min='18' max='100' id='edad'  value='$edadrep'><label for='lugar_nac'> Lugar de Nacimiento:</label><select name='lugar_nac' id='lugar_nac' ><option value='$lugarnacrep' selected>$lugarnacrep</option><option value='Amazonas'>Amazonas</option><option value='Anzoategui'>Anzoategui</option><option value='Apure'>Apure</option><option value='Aragua'>Aragua</option><option value='Barinas'>Barinas</option><option value='Bolivar'>Bolivar</option><option value='Carabobo'>Carabobo</option><option value='Cojedes'>Cojedes</option><option value='Delta Amacuro'>Delta Amacuro</option><option value='Distrito Capital'>Distrito Capital</option>	<option value='Falcon'>Falcon</option><option value='Guarico'>Guarico</option><option value='Lara'>Lara</option><option value='Merida'>Merida</option><option value='Miranda'>Miranda</option><option value='Monagas'>Monagas</option><option value='Nueva Esparta'>Nueva Esparta</option><option value='Portuguesa'>Portuguesa</option><option value='Sucre'>Sucre</option><option value='Tachira'>Tachira</option><option value='Trujillo'>Trujillo</option><option value='Vargas'>Vargas</option><option value='Yaracuy'>Yaracuy</option><option value='Zulia'>Zulia</option><option value='Otro'>Otro</option></select><label for='nacion'> Nacionalidad:</label><select name='nacion' id='nacion' ><option value='$nacionrep' selected>$nacionrep</option><option value='Venezolano'>Venezolano</option><option value='Extranjero'>Extranjero</option></select><label for='sexo'> Sexo:</label><select name='sexo' id='sexo' ><option value='$sexorep' selected>$sexorep</option><option value='Masculino'>Masculino</option><option value='Femenino'>Femenino</option></select><label class='sel'for='edocivil'> Estado Civil:</label><select name='edocivil' id='edocivil' ><option value='$edocivilrep' selected>$edocivilrep</option><option value='Soltero'>Soltero</option><option value='Divorciado'>Divorciado</option><option value='Casado'>Casado</option><option value='Viudo'>Viudo</option></select> <label for='parent'> Parentesco con alumno:</label><select name='parent' id='parent' ><option value='Padre'>Padre</option><option value='$parentesco' selected>$parentesco</option><option value='Madre'>Madre</option><option value='Abuelo/a'>Abuelo/a</option><option value='Tio/a'>Tio/a</option></select><label for='ocupacion'> Ocupación:</label><input type='text' name='ocupacion' id='ocupacion' pattern='[A-Za-z ]{2,30}' placeholder='escriba a que se dedica' maxlength='30' value='$ocupacionrep'><h2>Datos de Contacto</h2><label for='direc'> Dirección de Habitación:</label><input type='text' name='direc' id='direc' placeholder='Escriba dirección completa' maxlength='150' value='$direccion'><label for='tel_hab'> Telefono Local:</label><input type='text' name='tel_hab' id='tel_hab' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono' value='$telefonolocal'><label for='cel'> Telefono Celular:</label><input type='text' name='cel' id='cel' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono celular' value='$celular'><label for='correo'> Correo Electronico:</label><input type='text' name='correo' id='correo' pattern='[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+' maxlength='30' placeholder='Escriba dirección de correo electronico' value='$email'><input type='submit' name='guardar' value='Actualizar Datos' id='boton' value='$'></form></div><br></div><a href='javascript:void(0)'></a></body></html>";
		
		}
	}	
}
	Public function modificar ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn)
	{

		$query="UPDATE representante SET af_codigo_alumn_repre='$codigoalumrep',af_cedurepre='$cedularepre', af_nom_rep='$nombrerep',af_ape_rep='$apellidorep',dt_fecnac_rep='$fechanacrep',nu_edad_rep='$edadrep',af_lugarnac='$lugarnacrep',ch_nac_rep='$nacionrep',ch_sexo_rep='$sexorep',ch_edocivil='$edocivilrep',af_parentesco='$parentesco', af_ocupacion='$ocupacionrep',af_direccion='$direccion',af_telehab='$telefonolocal',af_telcel='$celular',af_correo='$email' WHERE af_codigo_alumn_repre='$codigoalumrep'";
		$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($modi=true)
		 {
 				 echo "<script>alert('Los Datos Han Sido Actualizados')</script>";

  				echo "<script>window.location='../vista/v_actualizarrepresentante.html'</script>";
 	}		
 	else
 	{

  		

  				echo "<script>alert('Datos no pudieron ser registrados')</script>";
 	}
}
}
?>