<?php
//poner mensaje de que el registro fue exitoso y redirecciona de nuevo y agregar validacion por no de control en bd
require("Conexion.php");
$us=$_POST['us'];
$pass=$_POST['pass'];
$con=Connect::conectar();
$agrega_us=$con->query("insert into usuarios (Tipo, Usuario, Contrasena) values('dos','$us','$pass')");
$Id_us=$con->query("SELECT idUsuarios from usuarios where Usuario='$us'");
$id=mysqli_fetch_array($Id_us) or die($con->error);
$val2=[$_POST["nomint"],$_POST["carint"],$_POST["sexoint"],$_POST["telint"],$_POST["correoint"],$_POST["Docente"],$_POST["Escuela"]];
$contr1=false;
$contr2=false;
$contr3=false;
print_r($_POST);
//[us] => Hazael [pass] => [passc] => [nomint] => afasd [edadint] => 18 
//[carrint] => dsfsdf [sexoint] => M [telint] => sdfsdfsf [correoint1] => sdfsdfsdf@dgdf.com 
//[Docente] => Adrian [Dependencia] => Instituto Tecnológico Tláhuac II [enviar] => Enviar Registro 
 $datos2=$con->query("SELECT ID_Docente from docente where Nombre_D='$val2[5]'");
  $val3=mysqli_fetch_assoc($datos2);
    $rows=mysqli_num_rows($datos2);
    
    $IdEs=$con->query("SELECT IdEscuela from escuelas where Nombre='$val2[6]'");
    $val4=mysqli_fetch_assoc($IdEs);
      $row2=mysqli_num_rows($IdEs);

    $contr1=true;
if($rows>0 && $row2>0){
    $datos3=$con->query("insert into alumno(Nombre_A, Carrera, Sexo_A, Telefono_A, Correo_A, Id_Docente,Id_usuario, IdEscuela)values('$val2[0]', '$val2[1]','$val2[2]','$val2[3]','$val2[4]',$val3[ID_Docente],$id[0],$val4[IdEscuela])") or die ($con->error."-.-");
    $contr2=true;
    
}else{
       echo "Ha ocurrido un error de comunicaciones por favor intenta mas tarde, si el error persiste contacta al administrador";
       print_r($val4);
}
if($contr1&&$contr2){
    echo "<script>alert('Datos ingresados correctamente');window.location.href='index.html';</script>";

}else{
    echo "aguanta que algo salio mal";
    print_r($val4);
}
//select delegaciones.Nombre, escuelas.nombre from delegaciones INNER JOIN escuelas ON delegaciones.IdDelegacion=escuelas.IdDelegaciones
?>