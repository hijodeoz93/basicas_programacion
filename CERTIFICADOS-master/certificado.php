<?php 

define('FPDF_FONTPATH', 'font/');
require ('fpdf.php');
require ('config.php');
$con=Connect::conectar();
$cedula= $_POST['cedula'];
$strConsulta = "SELECT Nombre_A, Carrera,Apellido from alumno where Id_usuario=$cedula";
$cedula = $con->query($strConsulta);
$row =mysqli_fetch_array($cedula);

//Propiedades
//$cedula = $_POST['cedula'];
$dia = '28';
$mes = 'Noviembre';
//$ano = '2013';

//$pdf = new FPDF('L','cm',array(29.700,21));
$pdf=new FPDF('L','mm','letter');
$pdf->SetTextColor(0,0,0);

$pdf->AddPage();
$pdf->Image('img/Constancia-1.png',-20,17,325,-210,'PNG');

// Nombre y Apellido
$pdf->SetFont('helvetica','B',30);
$pdf->Text(100,99,$row['Nombre_A'] . " " . $row['Apellido']);
// Carrera
$pdf->SetFont('helvetica','B',15);
$pdf->Text(150,108,$row['Carrera']);
// Cedula
//$pdf->SetFont('helvetica','',8);
//$pdf->Text(1.7,6.1,$cedula);

// Dia
$pdf->SetFont('helvetica','B',15);
$pdf->Text(125,158,$dia);

// Mes

$pdf->SetFont('helvetica','B',15);
$pdf->Text(155,158,$mes);


$pdf->Output('certificado','I');
?>