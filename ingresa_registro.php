<?php
//poner mensaje de que el registro fue exitoso y redirecciona de nuevo
require("Conexion.php");
$us=$_POST['us'];
$pass=$_POST['pass'];
$con=Connect::conectar();
$agrega_us=$con->query("insert into usuarios (Tipo, Usuario, Contrasena) values('dos','$us','$pass')");
$Id_us=$con->query("SELECT idUsuarios from usuarios where Usuario='$us'");
$id=mysqli_fetch_array($Id_us) or die($con->error);
$val=[$_POST["nom"],$_POST["ape"],$_POST["cargo"],$_POST["correo"],$_POST["sexo"],$_POST["dep"]];
$val2=[$_POST["nomint1"],$_POST["edadint1"],$_POST["carrint1"],$_POST["sexoint1"],$_POST["telint1"],$_POST["correoint1"],$_POST["nom"]];
$contr1=false;
$contr2=false;
$contr3=false;
//modificar las inserciones ya que se agreara el campo de docentes como select.
$datos=$con->query("insert into docente (Cargo, Nombre_D, Sexo_D, Dependencia) values('$val[2]','$val[0]','$val[4]','$val[5]')");
if($datos){
    $datos2=$con->query("SELECT ID_Docente from docente where Nombre_D='$val[0]'");
    $val3=mysqli_fetch_assoc($datos2);
    $contr1=true;
}else{
    echo "Ha ocurrido un error de comunicaciones por favor intenta mas tarde, si el error persiste contacta al administrador";
}
if($datos2){
    $datos3=$con->query("insert into alumno(Carrera, Edad, Nombre_A, Sexo_A, Telefono_A, Correo_A, Id_Docente,Id_usuario)values('$val2[2]',$val2[1], '$val2[0]','$val2[3]','$val2[4]','$val2[5]',$val3[ID_Docente],$id[0])");
    $contr2=true;
}else{
    echo "Ha ocurrido un error de comunicaciones por favor intenta mas tarde, si el error persiste contacta al administrador";
}
if($contr1||$contr2){
    echo "<script>alert('Datos ingresados correctamente');window.location.href='/index.html';</script>";

}else{
    echo "aguanta que algo salio mal";
}

 
//select delegaciones.Nombre, escuelas.nombre from delegaciones INNER JOIN escuelas ON delegaciones.IdDelegacion=escuelas.IdDelegaciones


?>