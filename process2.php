<?php
require("Conexion.php");
$con=Connect::conectar();
$data2=$_POST['item'];
$field=$_POST["field"];
if($field=="Nombre_A"|| $field=="Carrera"||$field=="Sexo_A"||$field=="Correo_A"){
    //echo "UPDATE alumno SET $field='$data' WHERE idAlumno=$data2";
    $act=$con->query("DELETE FROM alumno WHERE idAlumno=$data2") or die ($con->error);
    header("Refresh:0; url=Administrar.php");
}elseif($field=="Nombre_D"|| $field=="Cargo"||$field=="Dependencia"||$field=="Correo_D" ||$field=="Telefono_D"||$field=="Sexo_D"){
    $act=$con->query("DELETE FROM docente WHERE ID_docente=$data2") or die ($con->error);
    echo $data;
}elseif($field=="Nombre"){//falta ver la manera de eliminar el equipo por que tiene dependencia con la tabla alumnos
    $act=$con->query("DELETE FROM equipo WHERE id_Equipo=$data2") or die ($con->error);

}
?>