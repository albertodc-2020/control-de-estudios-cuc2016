<?php


$id = $_POST['cod'];
$aescolar = $_POST['periodo'];
include("../fpdf/fpdf.php");
include("../modelo/mod_conexion.php");
$conexion= new connex();
$pgconn=$conexion->conectar();
$fecha_actual   = date("d/m/Y");
$dia=date(d);
$mes=date(n);
$year=date(Y);
$diahoy=date("n", strtotime($fecha_actual)); 
$meshoy=date("j", strtotime($fecha_actual)); 
$anohoy=date("Y", strtotime($fecha_actual));

	

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

			

		
		if ($id!=$codigo)	{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div> <div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno2.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar2.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal2.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper2.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte2.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'> </a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../fpdf/constanciadeestudio2.php'> <h2>Generar Constancia de Estudio</h2> <div class='form-group'> <label for='cod'> Codigo de Estudiante:</label> <input class='cod' type='text' name='cod' id='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12' required> </div> <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo' id='periodo' required> <option value='></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <button type='submit' class='btn btn-default' >Generar</button> </form><div class='panel panel-info'><div class='panel-heading'>Estudiante Codigo N°: </div><div class='panel-body'> El Codigo del Estudiante N° $id No existe en la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
		}
		else
		{


    switch ($meshoy)
	{
        case 1:
        $mes = 'enero';
        break;
 
        case 2:
        $mes = 'febrero';
        break;
		
		case 3:
        $mes = 'marzo';
        break;
 
        case 4:
        $mes = 'abil';
        break;
		case 5:
        $mes = 'mayo';
        break;
 
        case 6:
        $mes = 'junio';
        break;
		case 7:
        $mes = 'julio';
        break;
 
        case 8:
        $mes = 'agosto';
        break;
		case 9:
        $mes = 'septiembre';
        break;
 
        case 10:
        $mes = 'octubre';
        break;
		case 11:
        $mes = 'noviembre';
        break;
 
        case 12:
        $mes = 'diciembre';
        break;
    }
		

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
	$pdf->Ln(25);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(190,10,utf8_decode('CONSTANCIA DE ESTUDIO'),0,0,'C');
	$pdf->Ln(20);
		
// Creación del objeto de la clase heredada

	$pdf->SetFont('Arial','',14);
	$pdf->Cell (35,10,utf8_decode('Quien suscribe, '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (83,10,utf8_decode('Lic. José Rafael Del Corral Tamoy, '),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (42,10,utf8_decode('titular de la cédula de Identidad'),0,1);
	$pdf->Cell (8,10,utf8_decode('N° '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (31,10,utf8_decode('V-3.753.978,'),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (35,10,utf8_decode('Director  de  la'),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (40,10,utf8_decode('E.B.N. "TOMAS   AGUERREVERE   PACANINS",'),0,1);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (40,10,utf8_decode('certifico      por      medio      de      la      presente      que      el      /      la      estudiante:'),0,1);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (90,10,utf8_decode($Nomestu." ".$apeestu),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (80,10,utf8_decode('         portador de la cédula escolar  /  C.I.  N°' ),0,1);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (35,10,utf8_decode($cedescolar),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (25,10,utf8_decode('  cursa  el'),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (30,10,utf8_decode($grado),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (37,10,utf8_decode('Grado, Sección: '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (7,10,utf8_decode($seccionestu),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (35,10,utf8_decode('de   Educación   Primaria '),0,1);
	$pdf->Cell (53,10,utf8_decode('durante el año escolar '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (25,10,utf8_decode($aescolar),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (45,10,utf8_decode(' en  el  turno  de  la '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (7,10,utf8_decode($turnoestu."."),0,0);
	$pdf->Ln(20);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (45,10,utf8_decode('Constancia  que  se  expide  a  petición  de  la  parte  interesada  en  Caracas  a  los '),0,1);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (8,10,utf8_decode($diahoy." "),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (38,10,utf8_decode('días del mes de '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (26,10,utf8_decode($mes),0,0);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (10,10,utf8_decode('del '),0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (45,10,utf8_decode($year."."),0,1);
	$pdf->Ln(40);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell (55,10,utf8_decode(''),0,0);
	$pdf->Cell (45,10,utf8_decode('______________________________'),0,1);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (57,10,utf8_decode(''),0,0);
	$pdf->Cell (55,10,utf8_decode('Lic. José Rafael del Corral Tamoy'),0,1);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell (85,10,utf8_decode(''),0,0);
	$pdf->Cell (55,10,utf8_decode('Director (e)'),0,0);





	$pdf->Output($cedescolar.' Constancia de estudio.pdf','D');

		}
	
	
	
?>

