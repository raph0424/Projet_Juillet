<?php
require('../lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Nom de l\'etudiant : '.$_GET['id']."\r".'Duree total du retard : '.$_GET['tot']);
$pdf->Output();
?>