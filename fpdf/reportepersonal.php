<?php
$fec1  = $_POST['desde'];
$fec2  = $_POST['hasta'];
		include("../fpdf/fpdf.php");
		include("../modelo/mod_conexion.php");
		$conexion= new connex();
		$pgconn=$conexion->conectar();

	

$query=  "SELECT * FROM personal  INNER JOIN cargo   ON af_ced_per= af_cedulap WHERE cargo.af_fechaingr BETWEEN '$fec1' AND '$fec2'";
$resultado =pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		
			$filas = pg_fetch_array($resultado);
//Tabla Personal
$codigotrb		=	$filas['af_id_codigo_tra'];
$cedulaper	 	= 	$filas['af_ced_per'];
$nombreper 		= 	$filas['af_nom_pers'];
$apellido 	 	= 	$filas['af_ape_per'];
$fechanac 	 	= 	$filas['dt_fecnac_per'];
$edad 	 		=	$filas['nu_edad_per'];
$lugarnac 	 	=	$filas['af_lugarnacp'];
$nacion 		=	$filas['af_nacper'];
$sexo 	 		=	$filas['ch_sexo_per'];
$edocivil 	 	=	$filas['af_edocivilp'];
$direccion 		=	$filas['af_direcper'];
$telefonolocal	=	$filas['af_telhabp'];
$celular 		=	$filas['af_celper'];
$email 			=	$filas['af_correop'];
//Tabla Cargo
$codigocargo	=	$filas['af_id_codigo_cargo'];
$fecing		 	=	$filas['af_fechaingr'];
$feceg		 	=	$filas['af_fechaegre'];
$turnot			=	$filas['af_turno'];
$nombrecargo 	=	$filas['af_nombrecar'];
			
		
		if ($fecing isset(BETWEEN)  $fec1 AND $fec2)	
		{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div><div id='menu'><ul id='menuacordeon' class='menuacordeon'><li class='abierto'><div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li> <li><a href='../vista/v_actualizarusuario.html'>Actualizar Datos de Usuario</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='..\controladores\cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)''></a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='post' action='../fpdf/reportepersonal.php'> <h2>Generar Reporte del Personal</h2> <div class='form-group'> <label for='Fecins'> Desde:</label> <input type='date' name='desde' id='desde' placeholder='Fecha de Inscripción' required> <label for='Fecins'> Hasta:</label> <input type='date' name='hasta' id='hasta' placeholder='Fecha de Inscripción' required> </div> <button type='submit' class='btn btn-default' >Generar</button> </form></form><div class='panel panel-info'><div class='panel-heading'>Personal Codigo N°: </div><div class='panel-body'> Los datos no coinciden con la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>"; 
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


	$pdf->Output('fichaestudiante.pdf','D');

}
	
	
	
?>

