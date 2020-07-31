<?php
	require('conexion.php');
	require('fpdf/fpdf.php');
	
	class PDF extends FPDF 
	{
		function AcceptPageBreak()
		{
			$this->Addpage();
			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->SetX(10);
			$this->Cell(70,6,'ESTADO',1,0,'C',1);
			$this->SetX(80);
			$this->Cell(20,6,'ID',1,0,'C',1);
			$this->SetX(100);
			$this->Cell(70,6,'MUNICIPIO',1,0,'C',1);
			$this->Ln();
		}
		
		function Header()
		{
			$this->Image('images/logo_pb.png',10,8,20);
			$this->SetFont('Arial','B',15);
			$this->Cell(80);
			$this->Cell(30,10,'Marko',1,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	
	$query="SELECT e.estado, m.idestado, m.idmunicipios, m.municipio FROM municipios AS m INNER JOIN estados AS e ON m.idestado=e.idestados";
	$resultado=$mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->Addpage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetX(10);
	$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
	$pdf->SetX(80);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->SetX(100);
	$pdf->Cell(70,6,'MUNICIPIO',1,0,'C',1);
	$pdf->Ln();
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->SetFont('Arial','',12);
		$pdf->SetX(10);
		$pdf->Cell(70,6, utf8_decode($row['estado']),1,0,'C');
		$pdf->SetX(80);
		$pdf->Cell(20,6, $row['idmunicipios'],1,0,'C');
		$pdf->SetX(100);
		$pdf->Cell(70,6, utf8_decode($row['municipio']),1,1,'C');
		
	}
	$pdf->Output();
?>