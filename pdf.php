<?php
require_once("config2.php");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
// code for print Heading of tables
$pdf->SetFont('Arial','B',12);
$ret ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='produit' AND `TABLE_NAME`='produit'";
$query1 = $dbh-> prepare($ret);
$query1->execute();
$header=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query1->rowCount() > 0)
{
foreach($header as $heading) {
foreach($heading as $column_heading)
$pdf->Cell(30,7,$column_heading,1);
}}
//code for print data
$sql = "SELECT * from  produit ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',12);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(30,7,$column,1);
} }
$pdf->Output();
?>