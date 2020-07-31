<?php

Class datoscomp
{
	
private $codigoalum;
/*datos de la madre*/
private $viveconm;
private $nombremadre;
private $apellidomadre;
private $cedulamadre;
private $fechanacm;
private $edocivilml;
private $edadma;
private $nacionma;
private $ocupacionm;
private $direccionm;
private $telefonom;
private $direcciontm;
private $telefonotm;
/* datos del padre*/
private $viveconp;
private $nombrepadre;
private $apellidopadre; 
private $cedulapadre;
private $fechanacp;
private $edocivilp;
private $edadpa;
private $nacionpa;
private $ocupacionpa;
private $direccionp;
private $telefonop;
private $direcciontp;
private $telefonotp;
/*datos adicionales del niño*/
private $enfermedad;
private $alergia;
private $explique;






public function inicializar ($codigoalum,$viveconm,$nombremadre,$apellidomadre,$cedulamadre,$fechanacm,$edocivilm,$edadma,$nacionma,$ocupacionm,$direccionm,$telefonom,$direcciontm,$telefonotm,$viveconp,$nombrepadre,$apellidopadre,$cedulapadre,$fechanacp,$edocivilp,$edadpa,$nacionpa,$ocupacionpa,$direccionp,$telefonop,$direcciontp,$telefonotp,$alergia,$enfermedad,$explique,$pgconn) 
{
$this-> af_codalum_dc		= $codigoalum;
/*datos de la madre*/
$this-> af_vmad 			= $viveconm;
$this-> af_nombremadre 		= $nombremadre;
$this-> af_apellidomadre 	= $apellidomadre;
$this-> af_cedumadre	    = $cedulamadre;
$this-> af_nacmad 			= $fechanacm;
$this-> af_edocivilmadre 	= $edocivilml;
$this-> nu_edadmadre 		= $edadma;
$this-> ch_nacionm 			= $nacionma;
$this-> af_ocumadre 		= $ocupacionm;
$this-> af_direccmadre 		= $direccionm;
$this-> af_telmadre 		= $telefonom;
$this-> af_directrabmadre 	= $direcciontm;
$this-> af_teltrabmadre 	= $telefonotm;
/* datos del padre*/
$this-> af_vpadre 			= $viveconp;
$this-> af_nombrepadre 		= $nombrepadre;
$this-> af_apellidopadre 	= $apellidopadre; 
$this-> af_cedupadre 		= $cedulapadre;
$this-> af_nacpad 			= $fechanacp;
$this-> af_edocivilpadre 	= $edocivilp;
$this-> nu_edadpadre 		= $edadpa;
$this-> ch_nacionp 			= $nacionpa;
$this-> af_ocupadre 		= $ocupacionpa;
$this-> af_direcpadre 		= $direccionp;
$this-> af_telpadre 		= $telefonop;
$this-> af_directrabpadre 	= $direcciontp;
$this-> af_teltrabpadre 	= $telefonotp;
/*datos adicionales del niño*/
$this-> af_enfermedad 		=$enfermedad;
$this-> af_explique 		=$explique;
$this-> af_alergia 			= $alergia;

}

	Public function registro ($codigoalum,$viveconm,$nombremadre,$apellidomadre,$cedulamadre,$fechanacm,$edocivilm,$edadma,$nacionma,$ocupacionm,$direccionm,$telefonom,$direcciontm,$telefonotm,$viveconp,$nombrepadre,$apellidopadre,$cedulapadre,$fechanacp,$edocivilp,$edadpa,$nacionpa,$ocupacionpa,$direccionp,$telefonop,$direcciontp,$telefonotp,$alergia,$enfermedad,$explique,$pgconn) 
	{
    	
		$query="INSERT INTO datoscomp (af_codalum_dc,af_vmad,af_nombremadre,af_apellidomadre,af_cedumadre,af_nacmad,af_edocivilmadre,nu_edadmadre,ch_nacionm,af_ocumadre,af_direccmadre,af_telmadre,af_directrabmadre,af_teltrabmadre,af_vpadre,af_nombrepadre,af_apellidopadre,af_cedupadre,af_nacpad,af_edocivilpadre,nu_edadpadre,ch_nacionp,af_ocupadre,af_direcpadre,af_telpadre,af_directrabpadre,af_teltrabpadre,af_alergia,af_enfermedad,af_explique)VALUES('$codigoalum','$viveconm','$nombremadre','$apellidomadre','$cedulamadre','$fechanacm','$edocivilm','$edadma','$nacionma','$ocupacionm','$direccionm','$telefonom','$direcciontm','$telefonotm','$viveconp','$nombrepadre','$apellidopadre','$cedulapadre','$fechanacp','$edocivilp','$edadpa','$nacionpa','$ocupacionpa','$direccionp','$telefonop','$direcciontp','$telefonotp','$alergia','$enfermedad','$explique')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        if ($consulta)
		{
			return ($consulta);
			
		}
    		
	}
	Public function consultarcodigo ($codigoalum,$pgconn)
	{
		$query="SELECT * from datoscomp where  af_codalum_dc ='$codigoalum' ;";
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
        $query="SELECT * FROM datoscomp WHERE af_codalum_dc='$codigoe'";
        $result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        
        $row=pg_fetch_array($result);
        
        $codigoalum 	=		$row['af_codalum_dc'];
        /*datos de la madre*/
        $viveconm 		= 		$row['af_vmad'];
        $nombremadre 	= 		$row['af_nombremadre'];
        $apellidomadre 	= 		$row['af_apellidomadre'];
        $cedulamadre 	=		$row['af_cedumadre'];
        $fechanacm 		= 		$row['af_nacmad'];
        $edocivilm 		=		$row['af_edocivilmadre'];
        $edadma 		=		$row['nu_edadmadre'];
        $nacionma		=		$row['ch_nacionm'];
        $ocupacionm 	=		$row['af_ocumadre'];
        $direccionm 	=		$row['af_direccmadre'];
        $telefonom		=		$row['af_telmadre'];
        $direcciontm 	=		$row['af_directrabmadre'];
        $telefonotm		=		$row['af_teltrabmadre'];
        /* datos del padre*/
        $viveconp 		= 		$row['af_vpadre'];
        $nombrepadre 	= 		$row['af_nombrepadre'];
        $apellidopadre 	= 		$row['af_apellidopadre'];
        $cedulapadre 	=		$row['af_cedupadre'];
        $fechanacp 		= 		$row['af_nacpad'];
        $edocivilp 		=		$row['af_edocivilpadre'];
        $edadpa 		=		$row['nu_edadpadre'];
        $nacionpa		=		$row['ch_nacionp'];
        $ocupacionp		=		$row['af_ocupadre'];
        $direccionp 	=		$row['af_direcpadre'];
        $telefonop		=		$row['af_telpadre'];
        $direcciontp 	=		$row['af_directrabpadre'];
        $telefonotp		=		$row['af_teltrabpadre'];
        /*datos adicionales del niño*/
        $enfermedad 	=		$row['af_enfermedad'];
        $alergia 		=		$row['af_alergia'];
        $explique 		=		$row['af_explique'];
        
        if($codigoe!=$codigoalum){
	 			echo "<script>alert('El Codigo de estudiante N° $codigoe no esta registrado en la base de datos')</script>";

  				echo "<script>window.location='../vista/v_actdatoscomp.html'</script>";

	}
	else
	{
	
		echo "<!DOCTYPE html> <html lang='es'> <head> <meta charset='UTF-8'> <title>Administrar Usuario</title> <link rel='stylesheet' type='text/css' href='../css/acdatoscomp.css'/> <link rel='stylesheet' href='../css/font-awesome.min.css'> </head> <body> <script src='..\js\validarcontra.js'></script> <script src='..\js\jquery-3.1.0.min.js'></script> <script src='..\js\java.js'></script> <div id='general'> <div id='tope'> </div> <div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li> <li><a href='../vista/v_actualizarusuario.html'>Actualizar Datos de Usuario</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'></a></div><a href='javascript:void(0)'><div id='contenedor'><form id ='form1' name='form1' method='post' action='..\controladores\con_buscardatosc.php'><h2>Actualizar Datos Complementarios</h2><label for='cod1'> Ingrese Codigo de Estudiante:</label><input type='text' name='cod1' id='cod1' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12'><br><input type='submit' name='buscar' value='Buscar' id='boton'></form><form id='form1' name='form1' method='post' action='..\controladores\con_modidatosc.php'><h2>Datos Complementarios</h2><br><label for='cod'>Codigo del Estudiante:</label><input class='cod' type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba codigo' maxlength='12' value='$codigoalum' readonly><h3>Datos de la Madre</h3><label for='vmadre'> Vive con el niño:</label><select name='vmadre' id='vmadre' ><option value='$viveconm' selected>$viveconm</option><option value='N/A'>No Aplica</option><option value='Si'>Si</option><option value='No'>No</option></select><label for='name'> Nombres:</label><input type='text' name='name' id='name' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Nombres' maxlength='30' value='$nombremadre'><label for='ape'> Apellidos:</label>	<input type='text' name='ape' id='ape' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Apellidos' maxlength='30' value='$apellidomadre'><label for='cedulai'> Cedula de Identidad:</label><input type='text' name='cedulai' id='cedulai' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 o E1234567' maxlength='15' value='$cedulamadre'><label for='fec_nac'> Fecha de Nacimiento:</label><input type='date' name='fec_nac'  id='fec_nac' placeholder='Fecha de Nacimiento' value='$fechanacm'><label for='edocivil'> Estado Civil:</label><select name='edocivil' id='edocivil'><option value='$edocivilm' selected>$edocivilm</option><option value='N/A'>No Aplica</option><option value='Soltero'>Soltero</option><option value='Casado'>Casado</option><option value='Divorciado'>Divorciado</option><option value='Viudo'>Viudo</option></select><label for='edad'> Edad:</label><input type='number' name='edad'  max='100' id='edad' placeholder='Escriba Edad' value='$edadma'><label for='nacion'> Nacionalidad:</label><select name='nacion' id='nacion' ><option value='$nacionma' selected>$nacionma</option><option value='N/A'>No Aplica</option><option value='Venezolano'>Venezolano</option><option value='Extranjero'>Extranjero</option></select><label for='ocupacion'> Ocupación:</label><input type='text' name='ocupacion' id='ocupacion' pattern='[A-Za-z ]{2,30}' placeholder='escriba a que se dedica' maxlength='30' value='$ocupacionm'><label for='direc'> Dirección de Habitación:</label><input type='text' name='direc' id='direc' placeholder='Escriba dirección completa' maxlength='150' value='$direccionm'><label for='tel_hab'> Telefono:</label><input type='text' name='tel_hab' id='tel_hab' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono' value='$telefonom'><label for='directm'> Dirección de Trabajo:</label><input type='text' name='directm' id='directm' placeholder='Escriba dirección completa' maxlength='150' value='$direcciontm'><br><label for='margen' for='tel_tm'> Telefono trabajo:</label><input class='margen' type='text' name='tel_tm' id='tel_tm' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono' value='$telefonotm'><br><h3>Datos del Padre</h3><label for='vpadre'> Vive con el niño:</label><select name='vpadre' id='vpadre' ><option value='$viveconp' selected>$viveconp</option><option value='N/A'>No Aplica</option><option value='Si'>Si</option><option value='No'>No</option></select><label for='namep'> Nombres:</label><input type='text' name='namep' id='namep' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Nombres' maxlength='30' value='$nombrepadre'><label for='apep'> Apellidos:</label><input type='text' name='apep' id='apep' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Apellidos' maxlength='30' value='$apellidopadre'><label for='cedulaip'> Cedula de Identidad:</label><input type='text' name='cedulaip' id='cedulaip' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 o E1234567' maxlength='15' value='$cedulapadre'><label for='fec_nacp'> Fecha de Nacimiento:</label><input type='date' name='fec_nacp'  id='fec_nacp' placeholder='Fecha de Nacimiento' value='$fechanacp'><label for='edocivilp'> Estado Civil:</label><select name='edocivilp' id='edocivilp' ><option value='$edocivilp' selected>$edocivilp</option><option value='N/A'>No Aplica</option><option value='Soltero'>Soltero</option><option value='Casado'>Casado</option><option value='Divorciado'>Divorciado</option><option value='Viudo'>Viudo</option></select><label for='edadp'> Edad:</label><input type='number' name='edadp'   max='100' id='edadp' placeholder='Escriba Edad' value='$edadpa'><label for='nacionp'> Nacionalidad:</label><select name='nacionp' id='nacionp' ><option value='$nacionpa' selected>$nacionpa</option><option value='N/A'>No Aplica</option><option value='Venezolano'>Venezolano</option><option value='Extranjero'>Extranjero</option></select><label for='ocupacionp'> Ocupación:</label><input type='text' name='ocupacionp' id='ocupacionp' pattern='[A-Za-z ]{2,30}' placeholder='escriba a que se dedica' maxlength='30' value='$ocupacionp'><label for='direcp'> Dirección de Habitación:</label><input type='text' name='direcp' id='direcp' placeholder='Escriba dirección completa' maxlength='150' value='$direccionp'><label for='tel_habp'> Telefono:</label><input type='text' name='tel_habp' id='tel_habp' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono' value='$telefonop'><label for='directp'> Dirección de Trabajo:</label><input type='text' name='directp' id='directp' placeholder='Escriba dirección completa' maxlength='150' value='$direcciontp'><br><label for='margen' for='tel_tp'> Telefono trabajo:</label><input class='margen' type='text' name='tel_tp' id='tel_tp' pattern='^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$' maxlength='12' placeholder='Escriba telefono' value='$telefonotp'><br><h3>Datos adicionales estudiante</h3><label for='enfer'> De padecer una enfermedad indique cual:</label><input type='text' name='enfer' id='enfer' placeholder='Escriba enfermedad' maxlength='40' value='$enfermedad'><br><label for='aler'> Padece alguna alergia:</label><select name='aler' id='aler' ><option value='$alergia' selected>$alergia</option><option value='Si'>Si</option><option value='No'>No</option></select><label for='exp'> Explique:</label><input type='text' name='exp' id='exp' placeholder='Describa alergia de ser necesario' maxlength='40' value='$explique'><br><input type='submit' name='guardar' value='Actualizar Datos' id='boton' >	</form></div><br></div><a href='javascript:void(0)'></a></body></html>";
		 }

	 } 
}
	Public function modificar ($codigoalum,$viveconm,$nombremadre,$apellidomadre,$cedulamadre,$fechanacm,$edocivilm,$edadma,$nacionma,$ocupacionm,$direccionm,$telefonom,$direcciontm,$telefonotm,$viveconp,$nombrepadre,$apellidopadre,$cedulapadre,$fechanacp,$edocivilp,$edadpa,$nacionpa,$ocupacionpa,$direccionp,$telefonop,$direcciontp,$telefonotp,$alergia,$enfermedad,$explique,$pgconn)
	{
		$query="UPDATE datoscomp SET af_codalum_dc='$codigoalum',af_vmad='$viveconm',af_nombremadre='$nombremadre',af_apellidomadre='$apellidomadre',af_cedumadre='$cedulamadre',af_nacmad='$fechanacm',af_edocivilmadre='$edocivilm',nu_edadmadre='$edadma',ch_nacionm='$nacionma',af_ocumadre='$ocupacionm',af_direccmadre='$direccionm',af_telmadre='$telefonom',af_directrabmadre='$direcciontm',af_teltrabmadre='$telefonotm',af_vpadre='$viveconp',af_nombrepadre='$nombrepadre',af_apellidopadre='$apellidopadre',af_cedupadre='$cedulapadre',af_nacpad='$fechanacp',af_edocivilpadre='$edocivilp',nu_edadpadre='$edadpa',ch_nacionp='$nacionpa',af_ocupadre='$ocupacionpa',af_direcpadre='$direccionp',af_telpadre='$telefonop',af_directrabpadre='$direcciontp',af_teltrabpadre='$telefonotp',af_alergia='$alergia',af_enfermedad='$enfermedad',af_explique='$explique' WHERE af_codalum_dc='$codigoalum' ";
		$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($modi=true)
		 {
 				 	echo "<script>alert('Los Datos Han Sido Actualizados')</script>";

  					echo "<script>window.location='../vista/v_actdatoscomp.html'</script>";
 		}		
 		else
 		{

  					echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
}
}
?>