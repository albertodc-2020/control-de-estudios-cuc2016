<?php


$id = $_POST['cod'];
		include("../fpdf/fpdf.php");
		include("../modelo/mod_conexion.php");
		$conexion= new connex();
		$pgconn=$conexion->conectar();

	

$query=  "SELECT * FROM alumno INNER JOIN representante  ON af_cod_alumn=af_codigo_alumn_repre INNER JOIN datoscomp  ON af_codigo_alumn_repre=af_codalum_dc INNER JOIN literal  ON af_codalum_dc=af_cod_alumliteral WHERE alumno.af_cod_alumn ='$id' ";
$resultado =pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		
			$filas = pg_fetch_array($resultado);
			//*Tabla Alumno*//
			$codigo 	 = 		$filas['af_cod_alumn'];
			$Nomestu 	 = 		$filas['af_nom_alum'];
			$apeestu 	 = 		$filas['af_ape_alum'];
			$edadestu 	 = 		$filas['nu_edad_alum'];
			$sexestu 	 = 		$filas['ch_sexo_alum'];
			$fnacestu 	 = 		$filas['dt_fecnac_alum'];
			$ingresoestu = 		$filas['dt_fecing_alum'];
			$turnoestu	 =		$filas['af_turno'];
			$grado 		 =		$filas['af_grado'];
			$cedescolar  = 		$filas['af_cedula_esc'];
			$nacionestu	 = 		$filas['ch_nacion_alum'];
			$Lugarnacest =		$filas['ch_lugar_nac_alum'];
			$seccionestu  = 	$filas['af_seccion_alum'];

			//*Tabla Representante*//
			$nombrerepre	=	$filas['af_nom_rep'];
			$aperepre		=	$filas['af_ape_rep'];
			$edadrepre		=	$filas['nu_edad_rep'];
			$sexorepre		=	$filas['ch_sexo_rep'];
			$fnacrepre		=	$filas['dt_fecnac_rep'];
			$parentesco		=	$filas['af_parentesco'];
			$ocupacionrepre	=	$filas['af_ocupacion'];
			$direcrepre		=	$filas['af_direccion'];
			$telhabre		=	$filas['af_telehab'];
			$celrepre		=	$filas['af_telcel'];
			$emailrepre		=	$filas['af_correo'];
			$edocivilre		=	$filas['ch_edocivil'];
			$cedularepre	=	$filas['af_cedurepre'];
			$lugarnacre		=	$filas['af_lugarnac'];
			$nacionrepre	=	$filas['ch_nac_rep'];
			
			//*Tabla datoscomp*//
			/*datos de la madre*/
			$nombrema		=	$filas['af_nombremadre'];
			$apema 			=	$filas['af_apellidomadre'];
			$edocivilma		=	$filas['af_edocivilmadre'];
			$cedumad		=	$filas['af_cedumadre'];
			$direcma		=	$filas['af_direccmadre'];
			$ocupaciona		=	$filas['af_ocumadre'];
			$telmadre		=	$filas['af_telmadre'];
			$directrma		=	$filas['af_directrabmadre'];
			$teltrma		=	$filas['af_teltrabmadre'];
			$vivemadre		=	$filas['af_vmad'];
			$edadmadre		=	$filas['nu_edadmadre'];
			$nacionmadre	=	$filas['ch_nacionm'];
			$fecnacma		=	$filas['af_nacmad'];
			
			/*datos de la padre*/
			$nombrepa		=	$filas['af_nombrepadre'];
			$apepa 			=	$filas['af_apellidopadre'];
			$edocivilpa		=	$filas['af_edocivilpadre'];
			$cedupad		=	$filas['af_cedupadre'];
			$direcpa		=	$filas['af_direcpadre'];
			$ocupaciopa		=	$filas['af_ocupadre'];
			$telpadre		=	$filas['af_telpadre'];
			$directrpa		=	$filas['af_directrabpadre'];
			$teltrpa		=	$filas['af_teltrabpadre'];
			$vivepadre		=	$filas['af_vpadre'];
			$edadpadre		=	$filas['nu_edadpadre'];
			$nacionpadre	=	$filas['ch_nacionp'];
			$fecnacpa		=	$filas['af_nacpad'];
			/*datos enfermedad*/
			$alegia			=	$filas['af_alergia'];
			$enfermedad		=	$filas['af_enfermedad'];
			$Explique		=	$filas ['af_explique'];
			
			/*Tabla literal*/
			$literal1		=	$filas['af_literal_1er'];
			$literal2 		=	$filas['af_literal_2do'];
			$literal3		=	$filas['af_literal_3er'];
			$literal4		=	$filas['af_literal_4to'];
			$literal5		=	$filas['af_literal_5to'];
			$literal6		=	$filas['af_literal_6to'];
			$periodo1		=	$filas['af_periodoesco_1er'];
			$periodo2		=	$filas['af_periodoesco_2do'];
			$periodo3		=	$filas['af_periodoesco_3er'];
			$periodo4		=	$filas['af_periodoesco_4to'];
			$periodo5		=	$filas['af_periodoesco_5to'];
			$periodo6		=	$filas['af_periodoesco_6to'];
			$fechaegre		=	$filas['af_fec_egre'];

		
		if ($id!=$codigo)	{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li> <li><a href='../vista/v_actualizarusuario.html'>Actualizar Datos de Usuario</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='..\controladores\cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)''></a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../modelo/mod_consu.php'><h2>Consultar Estudiante</h2><div class='form-group'><label for='cod'> Codigo de Estudiante:</label><input class='cod' type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12' required></div><button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Estudiante Codigo N°: </div><div class='panel-body'> El Codigo del Estudiante N° $id No existe en la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
		}
		else
		{

			

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	// Logo
	$this->Image('logo_pb.png',10,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// Título
	$this->Cell(30,10,'Title',1,0,'C');
	// Salto de línea
	$this->Ln(20);
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
	$pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();

		}
	
	
	
?>

