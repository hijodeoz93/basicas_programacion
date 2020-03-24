<?php
require("Conexion.php");
$con=Connect::conectar();
$data=$_POST["value"];
$data2=$_POST['indice'];
$field=$_POST["field"];
if($field=="Nombre_A"|| $field=="Carrera"||$field=="Sexo_A"||$field=="Correo_A" ||$field=="Telefono_A"){
    //echo "UPDATE alumno SET $field='$data' WHERE idAlumno=$data2";
    $act=$con->query("UPDATE alumno SET $field='$data' WHERE idAlumno=$data2") or die ($con->error);
    echo $data;
}elseif($field=="Nombre_D"|| $field=="Cargo"||$field=="Dependencia"||$field=="Correo_D" ||$field=="Telefono_D"||$field=="Sexo_D"){
    $act=$con->query("UPDATE docente SET $field='$data' WHERE ID_docente=$data2") or die ($con->error);
    echo $data;
}elseif($field=="Nombre"){
    $act=$con->query("UPDATE equipo SET $field='$data' WHERE id_Equipo=$data2") or die ($con->error);

}

?>