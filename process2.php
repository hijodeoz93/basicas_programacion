<?php
require("Conexion.php");
$con=Connect::conectar();
$data2=$_POST['item'];
$field=$_POST["field"];
if($field=="Nombre_A"|| $field=="Carrera"||$field=="Sexo_A"||$field=="Correo_A"){
    //echo "UPDATE alumno SET $field='$data' WHERE idAlumno=$data2";
    $act=$con->query("DELETE FROM alumno WHERE idAlumno=$data2") or die ($con->error);
    header("Refresh:0; url=Administrar.php");
}else{
    echo "no entre :c";
}
?>