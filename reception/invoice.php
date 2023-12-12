

<?php
//ini_set("session.auto_start", 0);
 ob_start();
require('fpdf17/fpdf.php');
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//db connection
include('C:\xampp\htdocs\phpproject\test\reception\config.php'); 
$name = $_POST['name'];
 $patientid = $_POST['pid'];
 $doctor_id = $_POST['did'];
 $now = $_POST['date'];
echo $patientid.$doctor_id.$now;

$sql=mysqli_query($conn,"SELECT * from staff where Staff_Id='$doctor_id'");
 
$row1 = mysqli_fetch_assoc($sql);
$TotalAmount=$row1['Salary'];
$purchase=$_POST['purchase'];
$getexchange=$purchase;
//get invoices data

 $resulta =mysqli_query($conn, "INSERT INTO `rinvoice`( `p_id`, `doctor_id`, `date`, `amount`, `purchase`) VALUES ('$patientid','$doctor_id','$date','$TotalAmount','$purchase')");
 $row2= mysqli_fetch_assoc($resulta);


 

 //  $invoice =mysqli_query ($conn, "SELECT * from rinvoice where Staff_Id='$doctor_id'");
 
 // $r=mysqli_fetch_assoc($invoice);
 // $invoice_id=$r['invoice_id'];
 // $getexchange=$r['purchase'];

 // while ($r=mysqli_fetch_assoc($invoice)) {
 // 	# code...
 // 	$invoice_id=$r['invoice_id'];
 // }
 






$pat=mysqli_query($conn,"SELECT * from appointment where p_id='$patientid'"); 
$row4=mysqli_fetch_assoc($pat);
$patientname=$row4['app_name'];

// $purchase=$_POST['purchase'];
//  $sql = "INSERT INTO `rinvoice`( `p_id`, `doctor_id`, `date`, `amount`, `purchase`) VALUES ('$patientid','$doctor_id','$date','$amt','$purchase')";
//  mysqli_query($conn, $sql);
  


// $result1=mysqli_query($conn,"SELECT * from Staff where Staff_Id='$doctor_id'");
//  $row1 = mysqli_fetch_assoc($result1);
// $amt=$row1['Salary'];
// $purchase=$_POST['purchase'];
//  $sql = "INSERT INTO `rinvoice`( `p_id`, `doctor_id`, `date`, `amount`, `purchase`) VALUES ('$patientid','$doctor_id','$date','$amt','$purchase')";
//  mysqli_query($conn, $sql);

//  $sql1=mysqli_query($conn,"SELECT * from rinvoice where p_id='$patientid'");
//   mysqli_query($conn, $sql1);
//  $row2 = mysqli_fetch_assoc($sql1);
// $invoice_id=$row2['invoice_id'];
// $TotalAmount=$row2['amount'];



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
$pdf->Cell(34	,5,$now,0,1);//end of line

$pdf->Cell(130	,5,'Phone [+09112200000]',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,$invoice_id,0,1);//end of line


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
$result1=mysqli_query($conn,"SELECT * from Staff where Staff_Id='$doctor_id'");
  $row1 = mysqli_fetch_assoc($result1);
 $TotalAmount=$row1['Salary'];



	$pdf->Cell(105	,5,$patientname,1,0);
	//add thousand separator using number_format function
	$pdf->Cell(25	,5,$TotalAmount,1,0);
	$pdf->Cell(25	,5,'1',1,0);
	$pdf->Cell(34	,5,$TotalAmount,1,1,'R');//end of line
	//accumulate tax and amount
	


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
