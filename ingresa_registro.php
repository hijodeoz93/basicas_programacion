<?php
include('security.php');
//poner mensaje de que el registro fue exitoso y redirecciona de nuevo
require("Conexion.php");
$val=[$_POST["nom"],$_POST["ape"],$_POST["cargo"],$_POST["correo"],$_POST["sexo"],$_POST["dep"]];
$val2=[$_POST["nomint1"],$_POST["edadint1"],$_POST["carrint1"],$_POST["sexoint1"],$_POST["telint1"],$_POST["correoint1"],$_POST["nom"]];
$contr1=false;
$contr2=false;
$contr3=false;

$con=Connect::conectar();
$datos=$con->query("insert into docente (Cargo, Nombre_D, Sexo_D, Dependencia) values('$val[2]','$val[0]','$val[4]','$val[5]')");
if($datos){
    $datos2=$con->query("SELECT ID_Docente from docente where Nombre_D='$val[0]'");
    $val3=mysqli_fetch_assoc($datos2);
    $contr1=true;
}else{
    echo "Ha ocurrido un error de comunicaciones por favor intenta mas tarde, si el error persiste contacta al administrador";
}
if($datos2){
    $datos3=$con->query("insert into alumno(Carrera, Edad, Nombre_A, Sexo_A, Telefono_A, Correo_A, Id_Docente)values('$val2[2]',$val2[1], '$val2[0]','$val2[3]','$val2[4]','$val2[5]',$val3[ID_Docente])");
    $contr2=true;
}else{
    echo "Ha ocurrido un error de comunicaciones por favor intenta mas tarde, si el error persiste contacta al administrador";
}
if($contr1||$contr2){
    echo "datos ingresados correctamente";

}else{
    echo "aguanta que algo salio mal";
}

 
//select delegaciones.Nombre, escuelas.nombre from delegaciones INNER JOIN escuelas ON delegaciones.IdDelegacion=escuelas.IdDelegaciones


?>