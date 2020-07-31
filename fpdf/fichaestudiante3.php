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
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consulta3.php'>Consultar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consultarpersonal3.php'>Consultar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte3.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='..\controladores\cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'> </a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../fpdf/fichaestudiante3.php'><h2>Generar Ficha de Estudiante</h2><div class='form-group'><label for='cod'> Codigo de Estudiante:</label><input class='cod' type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12' required></div><button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Estudiante Codigo N°: </div><div class='panel-body'> El Codigo del Estudiante N° $id No existe en la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
		}
		else
		{

			

class PDF extends FPDF
{
// Cabecera de página

function Header()

{

	// Logo
	$this->Image('../imagenes/cintillo-1.jpg',10,8,190);
	// Arial bold 15
	$this->SetFont('Arial','B',10);
	// Movernos a la derecha
	$this->Cell(80);
	// Salto de línea
	$this->Ln(17);
	// Título
	
	

}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	$this->Cell(0,10,utf8_decode('Dirección: Av. Ppal. de  Prado de Maria entre Calles Louis Braille y Lourdes, Casa N° 35 El Cementerio-Caracas. Telf. (0212) 632-81-96/632-37-99'),0,0,'C');
	$this->Ln(5);
	// Número de página
	$this->Cell(0,10,'Pag. '.$this->PageNo().'/{nb}',0,0,'C');
}
}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(80,10,utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'),0,0,'L');
	// Salto de línea
	$pdf->Ln(5);
	$pdf->Cell(80,10,utf8_decode('MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN'),0,0,'L');
	$pdf->Ln(5);
	$pdf->Cell(80,10,utf8_decode('E.B.N. "TOMÁS AGUERREVERE PACANINS"'),0,0,'L');
	$pdf->Ln(5);
	$pdf->Cell(80,10,utf8_decode('PRADO DE MARÍA-CARACAS'),0,0,'L');
	$pdf->Ln(5);
	$pdf->Cell(80,10,utf8_decode('CÓDIGO DEA: OD03290101'),0,0,'L');
	$pdf->Ln(8);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(190,10,utf8_decode('FICHA ACUMULATIVA:'),0,0,'C');
	$pdf->Ln(50);
	$pdf->Image('../imagenes/fotosficha.jpg',10,65,190);
	
// Creación del objeto de la clase heredada

	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Datos del Estudiante: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('Cedula Escolar: '.$cedescolar),0);
	$pdf->Cell (90,10,utf8_decode('Cedula de Identidad: '.$cedescolar),0,1);
	$pdf->Cell (90,10,utf8_decode('Apellidos: '.$apeestu),0);
	$pdf->Cell (90,10,utf8_decode('Nombres: '.$Nomestu),0,1);
	$pdf->Cell (90,10,utf8_decode('Lugar de Nacimiento: '.$Lugarnacest),0);
	$pdf->Cell (90,10,utf8_decode('Nacionalidad: '.$nacionestu),0,1);
	$pdf->Cell (90,10,utf8_decode('Fecha de Nacimiento: '.$fnacestu),0);
	$pdf->Cell (90,10,utf8_decode('Sexo: '.$sexestu),0,1);
	$pdf->Cell (90,10,utf8_decode('Edad: '.$edadestu),0);
	$pdf->Cell (90,10,utf8_decode('Fecha de Ingreso: '.$ingresoestu),0,1);
	$pdf->Cell (90,10,utf8_decode('Turno: '.$turnoestu),0);
	$pdf->Cell (90,10,utf8_decode('Grado Actual: '.$grado),0,1);
	$pdf->Cell (90,10,utf8_decode('Sección: '.$seccionestu),0);
	$pdf->Cell (90,10,utf8_decode('Codigo Estudianil: '.$codigo),0,1);
	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Datos de la Madre: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('¿Vive con el Niño(a)?: '.$vivemadre),0);
	$pdf->Cell (90,10,utf8_decode('Cedula de Identidad: '.$cedumad),0,1);
	$pdf->Cell (90,10,utf8_decode('Apellidos: '.$apema),0);
	$pdf->Cell (90,10,utf8_decode('Nombres: '.$nombrema),0,1);
	$pdf->Cell (90,10,utf8_decode('Nacionalidad: '.$nacionmadre),0);
	$pdf->Cell (90,10,utf8_decode('Fecha de Nacimiento: '.$fecnacma),0,1);
	$pdf->Cell (90,10,utf8_decode('Edad: '.$edadmadre),0);
	$pdf->Cell (90,10,utf8_decode('Estado Civil: '.$edocivilma),0,1);
	$pdf->Cell (90,10,utf8_decode('Ocupación: '.$ocupaciona),0);
	$pdf->Cell (90,10,utf8_decode('Telefono: '.$telmadre),0,1);
	$pdf->Cell (180,10,utf8_decode('Direccion de Habitación: '),0,1);
	$pdf->Cell (180,10,utf8_decode($direcma),0,1);
	$pdf->Ln(20);
	$pdf->Cell (180,10,utf8_decode('Direccion de Trabajo: '),0,1);
	$pdf->Cell (180,10,utf8_decode($direcma),0,1);
	$pdf->Cell (90,10,utf8_decode('Telefono del Trabajo: '.$teltrma),0,1);
	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Datos del Padre: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('¿Vive con el Niño(a)?: '.$vivepadre),0);
	$pdf->Cell (90,10,utf8_decode('Cedula de Identidad: '.$cedupad),0,1);
	$pdf->Cell (90,10,utf8_decode('Apellidos: '.$apepa),0);
	$pdf->Cell (90,10,utf8_decode('Nombres: '.$nombrepa),0,1);
	$pdf->Cell (90,10,utf8_decode('Nacionalidad: '.$nacionpadre),0);
	$pdf->Cell (90,10,utf8_decode('Fecha de Nacimiento: '.$fecnacpa),0,1);
	$pdf->Cell (90,10,utf8_decode('Edad: '.$edadpadre),0);
	$pdf->Cell (90,10,utf8_decode('Estado Civil: '.$edocivilpa),0,1);
	$pdf->Cell (90,10,utf8_decode('Ocupación: '.$ocupaciopa),0);
	$pdf->Cell (90,10,utf8_decode('Telefono: '.$telpadre),0,1);
	$pdf->Cell (180,10,utf8_decode('Direccion de Habitación: '),0,1);
	$pdf->Cell (180,10,utf8_decode($direcpa),0,1);
	$pdf->Cell (180,10,utf8_decode('Direccion de Trabajo: '),0,1);
	$pdf->Cell (180,10,utf8_decode($directrpa),0,1);
	$pdf->Cell (90,10,utf8_decode('Telefono del Trabajo: '.$teltrpa),0,1);
	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Representante ante la Institución: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('Cedula de Identidad: '.$cedularepre),0,1);
	$pdf->Cell (90,10,utf8_decode('Apellidos: '.$aperepre),0);
	$pdf->Cell (90,10,utf8_decode('Nombres: '.$nombrerepre),0,1);
	$pdf->Cell (90,10,utf8_decode('Edad: '.$edadrepre),0);
	$pdf->Cell (90,10,utf8_decode('Sexo: '.$sexorepre),0,1);
	$pdf->Cell (90,10,utf8_decode('Parentesco con el Niño(a): '.$parentesco),0);
	$pdf->Cell (90,10,utf8_decode('Lugar de Nacimiento: '.$lugarnacre),0,1);
	$pdf->Cell (90,10,utf8_decode('Nacionalidad: '.$nacionrepre),0);
	$pdf->Cell (90,10,utf8_decode('Ocupación: '.$ocupacionrepre),0,1);
	$pdf->Cell (180,10,utf8_decode('Direccion de Habitación: '),0,1);
	$pdf->Cell (180,10,utf8_decode($direcrepre),0,1);
	$pdf->Cell (90,10,utf8_decode('Telefono de Habitación: '.$telhabre),0);
	$pdf->Cell (90,10,utf8_decode('Telefono Celular: '.$celrepre),0,1);
	$pdf->Cell (90,10,utf8_decode('Correo Electronico: '.$emailrepre),0,1);
	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Datos Adicionales: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('¿El Niño(a) sufre alguna alergia?: '.$alegia),0);
	$pdf->Cell (90,10,utf8_decode('Explique el tipo de Alérgia: '.$Explique),0,1);
	$pdf->Cell (90,10,utf8_decode('Si el niño(a) padece de alguna enfermedad indique: '.$enfermedad),0,1);
	$pdf->SetFont('Times','B',15);
	
	$pdf->Cell (40,10,utf8_decode('Literales del Estudiante: '),0,1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('Literal Final Primer 1° Grado: '.$literal1),0);
	$pdf->Cell (90,10,utf8_decode('Periodo Escolar: '.$periodo1),0,1);
	$pdf->Cell (90,10,utf8_decode('Literal Final Segundo 2° Grado: '.$literal2),0);
	$pdf->Cell (90,10,utf8_decode('Periodo Escolar: '.$periodo2),0,1);
	$pdf->Cell (90,10,utf8_decode('Literal Final Tercer 3° Grado: '.$literal3),0);
	$pdf->Cell (90,10,utf8_decode('Periodo Escolar: '.$periodo3),0,1);
	$pdf->Cell (90,10,utf8_decode('Literal Final Cuarto 4° Grado: '.$literal4),0);
	$pdf->Cell (90,10,utf8_decode('Periodo Escolar: '.$periodo4),0,1);
	$pdf->Cell (90,10,utf8_decode('Literal Final Quinto 5° Grado: '.$literal5),0);
	$pdf->Cell (90,10,utf8_decode('Periodo Escolar: '.$periodo5),0,1);
	$pdf->Cell (90,10,utf8_decode('Literal Final Sexto 6° Grado: '.$literal6),0);
	$pdf->Cell (90,10,utf8_decode('Periodo Escolar: '.$periodo6),0,1);
	$pdf->Cell (90,10,utf8_decode('Fecha de Egreso de Estudiante: '.$fechaegre),0);


	$pdf->Output('fichaestudiante.pdf','D');

		}
	
	
	
?>

