<?php
//falta exportar a excel y oder subr datos para el cuestionario
include('security.php');
require("Conexion.php");
$x=0;
$con=Connect::conectar();
$datos=$con->query("SELECT * FROM alumno INNER JOIN docente on alumno.Id_Docente=docente.ID_Docente ") or die ($con->error." linea 1");
$datos2=$con->query("SELECT * FROM escuelas LEFT JOIN docente on Nombre = Dependencia") or die($con->error());
?>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="update.js"></script>
    <title>Modulo de administracion</title>
</head>
<body>
    <h1>Bienvenido al menu de administacion de registros</h1>
    <h3>Elige con sabiduria (esto se va a quitar)</h3>
    <button><a href="salir.php">Salir</a></button>
    <form action="#">
    <table border=1>
    <th>Nombre del Alumno</th>
    <th>Carrera</th>
    <th>Sexo del Alumno</th>
    <th>Telefono del alumno</th>
    <th>Correo del alumno</th>
    
       <?php
       //print_r($filas=mysqli_fetch_array($datos));
      
     foreach($datos as $filas){  
           echo 
           "<tr>
                    
                <td><input type='text' value='$filas[Nombre_A]' maxlength='45'name='Nombre_A' indice='$filas[idAlumno]'><button class='delete' name='Nombre_A' indice='$filas[idAlumno]'>Eliminar registro</button></td>
                <td><input type='text' value='$filas[Carrera]'maxlength='45' name='Carrera' indice='$filas[idAlumno]'></td>
                <td><input type='text' value='$filas[Sexo_A]'maxlength='1' name='Sexo_A' indice='$filas[idAlumno]'></td>
                <td><input type='text' value='$filas[Telefono_A]'maxlength='45' name='Telefono_A' indice='$filas[idAlumno]'></td>
                <td><input type='email' value='$filas[Correo_A]'maxlength='45' name='Correo_A' indice='$filas[idAlumno]'></td>
                </tr>
                
     ";}
     echo"
     </table>
     <br/>
     <table border=1>
    <th>Nombre del Docente</th>
    <th>Cargo</th>
    <th>Dependencia</th>
    <th>Sexo del Docente</th>
    ";
    $datos5=$con->query("SELECT * FROM alumno INNER JOIN docente on alumno.Id_Docente=docente.ID_Docente ") or die ($con->error." linea 5");
    $datos3=$con->query("SELECT * FROM escuelas LEFT JOIN docente on Nombre = Dependencia") or die($con->error());
    foreach($datos5 as $filas){
        echo "<tr>
                <td><input type='text' value='$filas[Nombre_D]'maxlength='45' name='Nombre_D' indice='$filas[ID_docente]'><button class='delete' name='Nombre_D' indice='$filas[ID_docente]'>Eliminar registro</button></td>
                <td><input type='text' value='$filas[Cargo]'maxlength='45' name='Cargo' indice='$filas[ID_docente]'></td>";
                echo " <td><select>";
       foreach($datos3 as $filas2){
          echo "<option indice='$filas[ID_docente]' carga='$filas2[Nombre]' name='Dependencia'>$filas2[Nombre]</option>";
       } echo"</select></td>
                <td><input type='text' value='$filas[Sexo_D]'maxlength='1' name='Sexo_D' indice='$filas[ID_docente]'></td>
           </tr>";
    }
       /*
       implementacion a futuro y posible implementacion en campo 'Dependencia'
       echo " <td><select>";
       while($filas2=mysqli_fetch_assoc($datos2)){
          echo "<option indice='$filas2[id_Equipo]'>$filas2[Nombre]</option>";
       }"</select></td>
        <td><input type='text' value='$filas[Dependencia]'maxlength='45' name='Dependencia' indice='$filas[ID_docente]'></td>x
*/
       ?>
    </table>
    </form>
</body>
</html>