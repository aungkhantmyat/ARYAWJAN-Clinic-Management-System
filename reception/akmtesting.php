<?php
ob_start();
require('fpdf17/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
include('C:\xampp\htdocs\Patient\connect.php'); 

$pdf->SetFont('Arial','B',16);
$tt='akmm';
$pdf->Cell(40,10,$tt);
ob_end_clean();
$pdf->Output();
ob_end_flush(); 
?>