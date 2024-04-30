<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PDF</title>


</head>
<body>


	<?php
	$con=new mysqli("localhost","root","","interns");
	ob_start();
	require("fpdf/fpdf.php");

	//orientation of page//
	$pdf = new FPDF('p','mm','A4');
	$pdf->AddPage();

	//add space on top//
	$pdf->Ln(40);

	//centre logo//
	$pdf->Image('images/logok.jpg',95,15,-1900,'C');
	$pdf->SetFont('Arial','B',11);

	//CENTRE TEXT//
	$pdf->cell(200,10,'EAST AFRICAN UNIVERSITY RWANDA',0,0,'C');
	//new line//
	$pdf->Ln(5);
	$pdf->cell(200,10,'INTERNS REGISTRATION',0,0,'C');
	$pdf->Ln(10);
	$pdf->cell(10,10,'id',1,0,'C');
	$pdf->cell(30,10,'Name',1,0,'C');
	$pdf->cell(30,10,'LastName',1,0,'C');
	$pdf->cell(20,10,'Gender',1,0,'C');
	$pdf->cell(20,10,'Mobile',1,0,'C');
	$pdf->cell(20,10,'School',1,0,'C');
	$pdf->cell(15,10,'Level',1,0,'C');
	$pdf->cell(20,10,'Program',1,0,'C');
	$pdf->cell(20,10,'COUNTRY',1,0,'C');
	$pdf->cell(30,10,'Entry_Date',1,1,'C');
	$sql="SELECT Name,LastName,Gender,Mobile,School,Level,Program,COUNTRY,Entry_Date from students";
	$res=$con->query($sql);
	if($res->num_rows)

	{
		$i=0;
        while($row=$res->fetch_assoc())
        {
        $i++;
        
        $pdf->cell(10,6,$i,1,0,'C');
		$pdf->cell(30,6,$row['Name'],1,0,'C');
		$pdf->cell(30,6,$row['LastName'],1,0,'C');
		$pdf->cell(20,6,$row['Gender'],1,0,'C');
		$pdf->cell(20,6,$row['Mobile'],1,0,'C');
		$pdf->cell(20,6,$row['School'],1,0,'C');
		$pdf->cell(15,6,$row['Level'],1,0,'C');
		$pdf->cell(20,6,$row['Program'],1,0,'C');
		$pdf->cell(20,6,$row['COUNTRY'],1,0,'C');
		$pdf->cell(30,6,$row['Entry_Date'],1,1,'C');
        }
	}
	else
	{
		$pdf->cell(10,6,"No Record Found",1,0,'C');
	}
	
	$pdf->Output();
	ob_end_flush();
    ?>

</body>
</html>