<?php


$ci = $_POST['cod'];
		include("../fpdf/fpdf.php");
		include("../modelo/mod_conexion.php");
		$conexion= new connex();
		$pgconn=$conexion->conectar();

	

$query=  "SELECT * FROM personal INNER JOIN cargo  ON af_ced_per=af_cedulap  WHERE personal.af_ced_per ='$ci' ";
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
			
		
		if ($ci!=$cedulaper)	{
			echo "<!DOCTYPE html><html lang='es'><head>	<meta charset='UTF-8'><title>Consultar Estudiante</title><link rel='stylesheet' type='text/css' href='../css/estilocon.css'/><link rel='stylesheet' href='../css/font-awesome.min.css'><script src='../js/jquery-3.1.0.min.js'></script> <script src='../js/bootstrap.min.js'></script></head><body><script src='..\js\jquery-3.1.0.min.js'></script><script src='..\js\java.js'></script><div id='general'><div id='tope'></div> <div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno2.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar2.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal2.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper2.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte2.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'> </a></div><a class='java' href='javascript:void(0)''><div id='contenedor'><form role='form' method='POST' action='../fpdf/fichapersonal2.php'> <h2>Consultar Datos del Personal</h2> <div class='form-group'> <label for='cod'> Ingrese Cedula de Identidad:</label> <input class='cod' type='text' name='cod' id='cod' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234556 E1234567' maxlength='12' required > </div> <button type='submit' class='btn btn-default'>Consultar</button></form><div class='panel panel-info'><div class='panel-heading'>Datos del Trabajador C.I. N°: </div><div class='panel-body'> La Cedula de Identidad N° $ci No existe en la base de datos </div></div></div></div><a class='java' href='javascript:void(0)''></a></body></html>";
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
	$pdf->Cell(190,10,utf8_decode('FICHA DE PERSONAL:'),0,0,'C');
	$pdf->Ln(50);
	$pdf->Image('../imagenes/fotocarnet.jpg',160,65,35);
	
// Creación del objeto de la clase heredada

	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Datos del Trabajador: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('Codigo de Trabajo: '.$codigotrb),0);
	$pdf->Cell (90,10,utf8_decode('Cedula de Identidad: '.$cedulaper),0,1);
	$pdf->Cell (90,10,utf8_decode('Apellidos: '.$apellido),0);
	$pdf->Cell (90,10,utf8_decode('Nombres: '.$nombreper),0,1);
	$pdf->Cell (90,10,utf8_decode('Lugar de Nacimiento: '.$lugarnac),0);
	$pdf->Cell (90,10,utf8_decode('Nacionalidad: '.$nacion),0,1);
	$pdf->Cell (90,10,utf8_decode('Fecha de Nacimiento: '.$fechanac),0);
	$pdf->Cell (90,10,utf8_decode('Edad: '.$edad),0,1);
	$pdf->Cell (90,10,utf8_decode('Sexo: '.$sexo),0);
	$pdf->Cell (90,10,utf8_decode('Estado Civil: '.$edocivil),0,1);
	$pdf->Cell (150,10,utf8_decode('Direccion de Habitación: '),0,1);
	$pdf->Cell (150,10,utf8_decode($direccion),0,1);
	$pdf->Ln(4);
	$pdf->Cell (90,10,utf8_decode('Telefono Local: '.$telefonolocal),0);
	$pdf->Cell (90,10,utf8_decode('Telefono Celular: '.$celular),0,1);
	$pdf->Cell (90,10,utf8_decode('Correo Electronico: '.$email),0,1);
	$pdf->SetFont('Times','B',15);
	$pdf->Cell (40,10,utf8_decode('Datos del Cargo: '),0,1);
	$pdf->SetFont('Times','',12);
	$pdf->Cell (90,10,utf8_decode('Nombre del Cargo: '.$nombrecargo),0);
	$pdf->Cell (90,10,utf8_decode('Codigo del Cargo: '.$codigocargo),0,1);
	$pdf->Cell (90,10,utf8_decode('Turno de Trabajo: '.$turnot),0);
	$pdf->Cell (90,10,utf8_decode('Fecha de Ingreso: '.$fecing),0,1);
	$pdf->Cell (90,10,utf8_decode('Fecha de Egreso: '.$feceg),0);

	$pdf->Output('Fichapersonal.pdf','D');

		}
	
	
	
?>
