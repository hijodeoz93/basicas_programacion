<?php
require("Conexion.php");
$us=$_POST['us'];
$pass=$_POST['pass'];
$con=Connect::conectar();
$agrega_us=$con->query("insert into usuarios (Tipo, Usuario, Contrasena) values('Docente','$us','$pass')");
$Id_us=$con->query("SELECT idUsuarios from usuarios where Usuario='$us'");
$id=mysqli_fetch_array($Id_us) or die($con->error);
//print_r($_POST);
$val2=[$_POST["nomint"],$_POST["sexoint"],$_POST["telint"],$_POST["correoint"],$_POST["dependencia"],$_POST["carint"]];
// [us] => Docente [pass] => 12345678 [passc] => 12345678 [nomint] => lawea 
//[edadint] => 29 [sexoint] => F [telint] => 45645645 [correoint] => laweafome@gmail.com 
//[dependencia] => Instituto Tecnológico Iztapalapa

$insert =$con->query("INSERT INTO docente (Nombre_d, Sexo_D, Telefono_D, Correo_D, Dependencia,Cargo) values ('$val2[0]','$val2[1]',$val2[2],'$val2[3]','$val2[4]','$val2[5]')") or die ($con->error);
//$docente=mysqli_fetch_assoc($insert) or die ($con->error);
if(!$insert){
    echo "Ha ocurrido un error de comunicaciones por favor intenta mas tarde, si el error persiste contacta al administrador";

}else{
    echo "<script>alert('Datos ingresados correctamente');window.location.href='index.html';</script>";
}


?>