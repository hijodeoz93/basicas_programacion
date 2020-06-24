<?php
include("security.php");
@session_start();
require("Conexion.php");

function prom($var){
    $con=Connect::conectar();
    $t=$con->query("select count(Id_tarea) from tareas");
    $ta=$con->query("SELECT COUNT(Id_tareas) from avances WHERE Id_alumno=$var");
    $total=mysqli_fetch_array($t);
    $tareas=mysqli_fetch_array($ta);
    $res=($tareas[0]*100)/$total[0];
    $dato=$res;
    return $dato;
    $con->close();
    }

    $con=Connect::conectar();
$session=$con->query("SELECT idAlumno from alumno where Id_usuario=$_SESSION[id]");
$id=mysqli_fetch_assoc($session);
$cal=$con->query("select count(Id_tarea) as totalT from  tareas");
$calt=mysqli_fetch_assoc($cal);
$mid=$con->query("select count(Tipo_tarea) as maxId from avances where Id_alumno=$id[idAlumno]");
$max=mysqli_fetch_assoc($mid);
$_SESSION['tarea']=$max['maxId'];
$resta=$calt['totalT']-$max['maxId'];
$_SESSION['ciclos']=$resta;
$datos=$con->query("select COUNT(Nombre_archivo) as entregado, (SUM(Calificacion))/".$calt['totalT']." as calTotal from avances where Id_alumno=$id[idAlumno]");
$val2=mysqli_fetch_assoc($datos);
$prom=prom($id['idAlumno']);
 /*   


            SELECT a.Tipo_tarea, b.Nombre_archivo from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea LEFT JOIN alumno c ON b.Id_alumno=c.idAlumno
        </th>*/
    //$tareas=$con->query("select a.Tipo_tarea from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea where a.Id_tarea>$max[maxId]");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzara de avance</title>
    <link rel="stylesheet" href="estilo.css"/>
</head>
<body>
<button class="boton_salir"><a href="salir.php">Salir</a></button>
<div class="principal">
<h1>Listado de actividades</h1>
<embed src="pruebas/archivos/algo.pdf" type="application/pdf" width="800" height="600"></embed>
<h1>Tabla de avance</h1>
    <table border=1> 
        <th>Tareas totales</th>
        <th>Tareas entregadas</th>
        <th>Calificaion total</th>
        <th>Porcentraje de avance</th>
        <tr>
            <?php echo "<td>$calt[totalT]</td>" ?>
            <?php echo "<td>$val2[entregado]</td>" ?>
            <?php echo "<td>$val2[calTotal]</td>" ?>
            <?php echo "<td><progress id='algo' value='$prom' max='100'> ".$prom."% </progress></td>" ?>
            </table>
</br>
    <form action="sube.php" method="post" enctype="multipart/form-data" id="form_subir">

        <table border=1> 
        <th>Tareas pendientes</th>
        <th>Tareas entregadas</th>
            <?php 
            //while($colTareas=mysqli_fetch_assoc($tareas)or die($con->error)){
            foreach($tareas=$con->query("select a.Tipo_tarea from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea where a.Id_tarea>$max[maxId]")as $colTareas){
            echo "<tr>
                <td>$colTareas[Tipo_tarea]</td>
                <td>
            <div class='form-1-2'>
                    <input type='file' name='archivo[]'>
                    </td>
                </tr>
            </div>"; 
             }
            ?>
     
        </table>
        <div class="barra">
			<div class="barra-azul" id="barra_estado">
				<span></span>
		    </div>
		</div>
        <div class="acciones">
		<input type="submit" class="bnt" value="Enviar">
		<input type="button" class="cancelar" id="cancelar" value="Cancelar">
        </div> 
    </form>
</div>
</body>
<script src="funciones.js"></script>
</html>