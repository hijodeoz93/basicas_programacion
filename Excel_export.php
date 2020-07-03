<?php
require("Conexion.php");
require 'vendor/autoload.php';
$con=Connect::conectar();
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$ruta='archivos/';
$datos=$con->query("SELECT idAlumno,Nombre_A,Telefono_A,Correo_A,Carrera,Nombre_D,escuelas.Nombre as insti,delegaciones.Nombre as alcaldia FROM alumno 
INNER JOIN docente on alumno.Id_Docente=docente.ID_Docente INNER JOIN escuelas on alumno.IdEscuela=escuelas.IdEscuela 
INNER JOIN delegaciones on escuelas.IdDelegaciones=delegaciones.IdDelegacion") or die ($con->error);
$documento=new Spreadsheet();
$fila=2;

$reader=\PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');

$hoja=$documento->getActiveSheet();
$hoja->setTitle('Prueba de hoja');
$encbezados=["Id Alumno","Nombre","Telefono", "Correo","Carrera","Nombre del docente", "Institucion", "Alcaldia"];
$hoja->fromArray($encbezados,null,'A1');
while ($row=$datos->fetch_assoc()){
    $documento->getActiveSheet()->SetCellValue('A'.$fila, $row['idAlumno']);
    $documento->getActiveSheet()->SetCellValue('B'.$fila, $row['Nombre_A']);
    $documento->getActiveSheet()->SetCellValue('C'.$fila, $row['Telefono_A']);
    $documento->getActiveSheet()->SetCellValue('D'.$fila, $row['Correo_A']);
    $documento->getActiveSheet()->SetCellValue('E'.$fila, $row['Carrera']);
    $documento->getActiveSheet()->SetCellValue('F'.$fila, $row['Nombre_D']);
    $documento->getActiveSheet()->SetCellValue('G'.$fila, $row['insti']);
    $documento->getActiveSheet()->SetCellValue('H'.$fila, $row['alcaldia']);
    $fila++;
}
$writter=new Xlsx($documento);
try {
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Export.xlsx"');
    $writter->save("php://output");
}catch(Exception $ex){
echo $ex->getMessage();
}


?>