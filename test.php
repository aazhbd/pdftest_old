<?php
require('fpdf/fpdf.php');

class PDF extends FPDF{
	function Header(){
		$g[]="A+";
		$g[]="A";
		$g[]="A-";
		$g[]="B";
		$g[]="C";
		$g[]="D";
		$g[]="F";

		$in[]="80-100";
		$in[]="79-70";
		$in[]="60-69";
		$in[]="50-59";
		$in[]="40-49";
		$in[]="33-39";
		$in[]="0-32";

		$p[]="5";
		$p[]="4";
		$p[]="3.5";
		$p[]="3";
		$p[]="2";
		$p[]="1";
		$p[]="0";

    	$this->Ln(5);
	    $this->SetFont('Arial','',8);
	    $this->Cell(150);
	    $this->Cell(15,4,'Grade', 1);
	    $this->Cell(15,4,'Interval', 1);
	    $this->Cell(15,4,'Point', 1);
		$this->Ln();
		for($i=0; $i<count($g); $i++){
		    $this->Cell(150);
			$this->Cell(15,4, ''.$g[$i], 1);
			$this->Cell(15,4, ''.$in[$i], 1);
			$this->Cell(15,4, ''.$p[$i], 1);
			$this->Ln();
		}
	    $this->Ln();
	}
	
	function Footer(){
    	$this->SetY(-15);
	    $this->SetFont('Arial','I',8);
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

//Instanciation of inherited class
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

</body>
</html>
