<?php
include('security.php');
//antes de insertar al alumno se tiene que hacer una consulta para sacar el ID del docente y asi poderlo vicular
require("Conexion.php");
$val=[$_POST["nom"],$_POST["ape"],$_POST["cargo"],$_POST["correo"],$_POST["sexo"],$_POST["dep"],$_POST["equipo"]];
$integrantes=$_POST['integrantes'];
$val2=[$_POST["nomint1"],$_POST["edadint1"],$_POST["carrint1"],$_POST["sexoint1"],$_POST["telint1"],$_POST["correoint1"],$_POST["nom"]];

$con=Connect::conectar();
$datos3=$con->query("insert into equipo (nombre) values('$val[6]')") or die ($con->error." linea 1");
 $datos=$con->query("insert into alumno(Equipo_id_Equipo, Carrera, Edad, Nombre_A, Sexo_A, Telefono_A, Correo_A)values(1,'$val2[2]',$val2[1], '$val2[0]','$val2[3]','$val2[4]','$val2[5]')") or die ($con->error." linea 2");
 $datos2=$con->query("insert into docente (Usuarios_idUsuarios, Equipo_id_Equipo, Cargo, Nombre_D, Sexo_D, Dependencia) values(1,1,'$val[2]','$val[0]','$val[4]','$val[5]')") or die ($con->error." linea 3");
//select delegaciones.Nombre, escuelas.nombre from delegaciones INNER JOIN escuelas ON delegaciones.IdDelegacion=escuelas.IdDelegaciones


?>