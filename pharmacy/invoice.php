<?php
//ini_set("session.auto_start", 0);
 ob_start();
require('fpdf17/fpdf.php');
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//db connection
include('..\Patient\connect.php'); 
// $name = $_POST['name'];

$id=$_GET['q'];



//get invoices data

$res1="SELECT * FROM invoice_item where invoice_id='$id' ";
$result1=mysqli_query($conn,$res1);
$result4 = mysqli_query($conn, "SELECT * FROM invoice where  invoice_id='$id'");
$row11 = mysqli_fetch_assoc($result4);
$getexchange=$row11['purchase'];


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm



//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'ARRAWJAN Clinic',0,0);
$pdf->Cell(59	,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[No.112,Taw Win Road,Dagon]',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,$row11['date'],0,1);//end of line

$pdf->Cell(130	,5,'Phone [+09112200000]',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,$id,0,1);//end of line


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line



//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(105	,5,'Description',1,0);
$pdf->Cell(25	,5,'Price',1,0);
$pdf->Cell(25	,5,'Qty',1,0);
$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items

$tax = 0; //total tax
$amount = 0; //total amount

//display the items
$TotalAmount=0;
while ($row=mysqli_fetch_assoc($result1)) {
$mid=$row['medicine_id'];
    	 $resa="SELECT * FROM medicine WHERE id='$mid' ";
$resulta=mysqli_query($conn,$resa);
$rowa=mysqli_fetch_assoc($resulta);
 $resb="SELECT * FROM stock WHERE id='$mid'";
$resultb=mysqli_query($conn,$resb);
$sellingprice='';
while ($rowb=mysqli_fetch_assoc($resultb)) {
	$sellingprice=$rowb['selling_price'];
	}
	$eqty= $row['quantity'];
	$Amount=$eqty*$sellingprice;
	$TotalAmount+=$Amount;

	$pdf->Cell(105	,5,$rowa['name'],1,0);
	//add thousand separator using number_format function
	$pdf->Cell(25	,5,$sellingprice,1,0);
	$pdf->Cell(25	,5,$eqty,1,0);
	$pdf->Cell(34	,5,$Amount,1,1,'R');//end of line
	//accumulate tax and amount
	
}
$taxamt=$TotalAmount*0.025;
$FinalAmt=$TotalAmount+$taxamt;
$change=$getexchange-$FinalAmt;
//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Subtotal',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,$TotalAmount,1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Taxable',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,$taxamt,1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,$FinalAmt,1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Change',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,$change,1,1,'R');//end of line



















ob_end_clean();

$pdf->Output();
ob_end_flush(); 
?>
