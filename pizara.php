<?php
include("security.php");
@session_start();
require("Conexion.php");
$con=Connect::conectar();
$session=$con->query("SELECT idAlumno from alumno where Id_usuario=$_SESSION[id]");
$id=mysqli_fetch_assoc($session);
$cal=$con->query("select count(Id_tarea) as totalT from  tareas");
$calt=mysqli_fetch_assoc($cal);

$mid=$con->query("select max(Tipo_tarea) as maxId from avances where Id_alumno=$id[idAlumno]");
$max=mysqli_fetch_assoc($mid);



$datos=$con->query("select COUNT(Nombre_archivo) as entregado, (SUM(Calificacion))/count(".$calt['totalT'].") as calTotal from avances where Id_alumno=$id[idAlumno]");
$disparador=$con->query("call avance(@avance,$id[idAlumno]);");
$datos2=$con->query("select @avance;");
$val=mysqli_fetch_array($datos2) or die($con->error);
$val2=mysqli_fetch_assoc($datos);
 /*   <h1>Tabla de avance</h1>
    <table border=1> 
        <th>Tareas totales</th>
        <th>Tareas entregadas</th>
        <th>Calificaion total</th>
        <th>Porcentraje de avance</th>
        <tr>
            <?php echo "<td>$calt[totalT]</td>" ?>
            <?php echo "<td>$val2[entregado]</td>" ?>
            <?php echo "<td>$val2[calTotal]</td>" ?>
            <?php echo "<td><progress id='algo' value='$val[0]' max='100'> ".$val[0]."% </progress></td>" ?>
            </table>


            SELECT a.Tipo_tarea, b.Nombre_archivo from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea LEFT JOIN alumno c ON b.Id_alumno=c.idAlumno
        </th>*/
    $tareas=$con->query("select a.Tipo_tarea, b.Nombre_archivo from tareas a inner join avances b on a.Id_tarea=b.Tipo_tarea where b.Id_alumno=$id[idAlumno]");
    $tareasI=$con->query("select a.Tipo_tarea from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea where a.Id_tarea>$max[maxId]");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzara de avance</title>
</head>
<body>
    <table id="uno" border=1>
    <th>Tareas</th>
    <th>Archivo</th>
        <?php
            while($colTareas=mysqli_fetch_assoc($tareas)or die($con->error)){
                echo "<tr><td>$colTareas[Tipo_tarea]</td><td>$colTareas[Nombre_archivo]</td></tr>";
            }
            while($colTareasI=mysqli_fetch_assoc($tareasI)or die($con->error)){
                echo "<tr><td>$colTareasI[Tipo_tarea]</td><td><input type='file' name='archivo'></td></tr>";
            }

        ?>
    </table>
    
</body>
</html>