<?php
//include('security.php');
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
ob_start();
require_once 'Gafete.html';
$html=ob_get_clean();
$pdf= new Html2Pdf('P','A4','es','true','UTF-8');
$pdf->writeHTML($html);
$pdf->output("nombre_de_pdf_aqui.pdf");

?>