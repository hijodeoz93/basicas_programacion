<?php
require("Conexion.php");
$con=Connect::conectar();
$data=$_POST["value"];
$data2=$_POST['indice'];
$field=$_POST["field"];
if($field=="Nombre_A"|| $field=="Carrera"||$field=="Sexo_A"||$field=="Correo_A"){
    //echo "UPDATE alumno SET $field='$data' WHERE idAlumno=$data2";
    $act=$con->query("UPDATE alumno SET $field='$data' WHERE idAlumno=$data2") or die ($con->error);
    echo $data;
}else{
    //echo "no entre :c";
}

?>