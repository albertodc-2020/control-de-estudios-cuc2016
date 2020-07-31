<?php


$turn  = $_POST['turno'];
$curso = $_POST['grado'];
$fec1  = $_POST['desde'];
$fec2  = $_POST['hasta'];
		include("../fpdf/fpdf.php");
		include("../modelo/mod_conexion.php");
		$conexion= new connex();
		$pgconn=$conexion->conectar();

	

$query=  "SELECT * FROM alumno INNER JOIN representante  ON af_cod_alumn=af_codigo_alumn_repre INNER JOIN datoscomp  ON af_codigo_alumn_repre=af_codalum_dc INNER JOIN literal  ON af_codalum_dc=af_cod_alumliteral WHERE dt_fecing_alum BETWEEN '$fec1' AND '$fec2' AND af_turno = '$turn' AND af_grado ='$curso' ";
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
			
			
		
		if ($turn!=$turnoestu & $curso!= $grado & $fec1!=$ingresoestu & $fec2!=$ingresoestu)	{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consulta3.php'>Consultar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_consultarpersonal3.php'>Consultar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte3.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='..\controladores\cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'> </a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../fpdf/reporteestudiantes3.php'><h2>Generar Reporte de Estudiante</h2> <div class='form-group'> <label for='turno'> Turno de Clases:</label> <select name='turno' id='turno' required> <option value='Mañana'>Mañana</option> <option value='Tarde'>Tarde</option> </select> <label for='grado'> Grado que Cursa:</label> <select name='grado' id='grado' required> <option value='Primero 1er'>Primero 1er</option> <option value='Segundo 2do'>Segundo 2do</option> <option value='Tercero 3er'>Tercer 3er</option> <option value='Cuarto 4to'>Cuarto 4to</option> <option value='Quinto 5to'>Quinto 5to</option> <option value='Sexto 6to'>Sexto 6to</option> </select> <label for='Fecins'> Desde:</label> <input type='date' name='desde' id='desde' placeholder='Fecha de Inscripción' required> <label for='Fecins'> Hasta:</label> <input type='date' name='hasta' id='hasta' placeholder='Fecha de Inscripción' required> </div> <button type='submit' class='btn btn-default' >Generar</button></form><div class='panel panel-info'><div class='panel-heading'>Estudiante Codigo N°: </div><div class='panel-body'> Los datos no coinciden con la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
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
	$pdf = new PDF('L','mm','legal');
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
	$pdf->Cell(320,10,utf8_decode('REPORTE DE ESTUDIANTES:'),0,0,'C');
	$pdf->Ln(10);
	
	
// Creación del objeto de la clase heredada
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Times','B',15);
	$pdf->SetX (10);
	$pdf->Cell(50,8,'NOMBRES',1,0,'C',1);
	$pdf->SetX (60);
	$pdf->Cell(50,8,'APELLIDOS',1,0,'C',1);
	$pdf->SetX (110);
	$pdf->Cell(25,8,'EDAD',1,0,'C',1);
	$pdf->SetX (135);
	$pdf->Cell(30,8,utf8_decode('GRADO'),1,0,'C',1);
	$pdf->SetX (165);
	$pdf->Cell(30,8,utf8_decode('SECCIÓN'),1,0,'C',1);
	$pdf->SetX (195);
	$pdf->Cell(40,8,utf8_decode('C.E.'),1,0,'C',1);
	$pdf->SetX (235);
	$pdf->Cell(40,8,utf8_decode('CODIGO'),1,0,'C',1);
	$pdf->SetX (275);
	$pdf->Cell(70,8,utf8_decode('REPRESENTANTE'),1,0,'C',1);
	$pdf->Ln();


while ($row = pg_fetch_assoc($resultado))
{
	$spc=' ';
	$pdf->SetFont('Times','',11);
	$pdf->SetX (10);
	$pdf->Cell(50,8,utf8_decode($row['af_nom_alum']),1,0,'C');
	$pdf->SetX (60);
	$pdf->Cell(50,8,utf8_decode($row['af_ape_alum']),1,0,'C');
	$pdf->SetX (110);
	$pdf->Cell(25,8,utf8_decode($row['nu_edad_alum']),1,0,'C');
	$pdf->SetX (135);
	$pdf->Cell(30,8,utf8_decode($row['af_grado']),1,0,'C');
	$pdf->SetX (165);
	$pdf->Cell(30,8,utf8_decode($row['af_seccion_alum']),1,0,'C');
	$pdf->SetX (195);
	$pdf->Cell(40,8,utf8_decode($row['af_cedula_esc']),1,0,'C');
	$pdf->SetX (235);
	$pdf->Cell(40,8,utf8_decode($row['af_cod_alumn']),1,0,'C');
	$pdf->SetX (275);
	$pdf->Cell(70,8,utf8_decode($row['af_nom_rep'].$spc.$row['af_ape_rep']),1,1,'C',0,1);
	

	
	
}


	$pdf->Output('reporte_estudiante.pdf','D');

}
	
	
	
?>

