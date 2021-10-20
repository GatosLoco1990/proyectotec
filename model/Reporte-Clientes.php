<?php

include 'pdf.php';
include 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

//$idsucursal = $_GET['id'];

date_default_timezone_set('America/Bogota');
$fecha = date('d-m-Y');

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('portrait', 'LETTER');


$pdf->SetFillColor(232, 232, 232);
$pdf->SetY(15);
$pdf->SetX(10);

$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(40, 24, $pdf->Image('archivos/imagenes/pdf/logo_small_icon_only.png', 17, 15, 25), 1, 0, 'C');
$pdf->Cell(110, 24, utf8_decode('REPORTE DE CLIENTES -  SUCURSAL'), 1, 0, 'C');
$pdf->SetFont('Arial', 'B', 8);
$pdf->MultiCell(50, 6, utf8_decode('CÓDIGO: ss'), 1, 'L');
$pdf->SetX(160);
$pdf->MultiCell(50, 6, utf8_decode('VERSIÓN: 01'), 1, 'L');
$pdf->SetX(160);
$pdf->Cell(50, 6, utf8_decode('FECHA: '.$fecha), 1, 1, 'L', 0);

$pdf->SetX(160);
$pdf->MultiCell(50, 6, utf8_decode('PÁGINAS: 1 de 1'), 1, 'L');



$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(200, 8, utf8_decode('INFORMACIÓN'), 1, 1, 'C', 1);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 8, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
$pdf->Cell(30, 8, utf8_decode('APELLIDO'), 1, 0, 'C', 1);
$pdf->Cell(30, 8, utf8_decode('SEXO'), 1, 0, 'C', 1);
$pdf->Cell(40, 8, utf8_decode('CORREO'), 1, 0, 'C', 1);
$pdf->Cell(20, 8, utf8_decode('TELEFONO'), 1, 0, 'C', 1);
$pdf->Cell(50, 8, utf8_decode('DIRECCION'), 1, 1, 'C', 1);

$consulta = "SELECT cl.nom_cliente, cl.ape_cliente, s.descripcion, cl.correo_cliente, cl.tel_cliente, cl.dir_cliente from cliente cl INNER JOIN ciudad ci on cl.id_ciudad = ci.id_ciudad INNER JOIN sucursal su on su.id_ciudad = ci.id_ciudad INNER JOIN sexo s on cl.sexo_cliente = s.id WHERE su.id_sucursal = '2'";
$result = mysqli_query($conexion, $consulta);

while ($data = mysqli_fetch_array($result)) {


    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(30, 8, utf8_decode($data['nom_cliente']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($data['ape_cliente']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($data['descripcion']), 1, 0, 'C');
    $pdf->Cell(40, 8, utf8_decode($data['correo_cliente']), 1, 0, 'C');
    $pdf->Cell(20, 8, utf8_decode($data['tel_cliente']), 1, 0, 'C');
    $pdf->Cell(50, 8, utf8_decode($data['dir_cliente']), 1, 1, 'C');
}


$pdf->Output();
