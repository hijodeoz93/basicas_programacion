<?php
//include("security.php");
//@session_start();
require("Conexion.php");
$con=Connect::conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo de jueces</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script src="sselect.js"></script>
</head>
<body>
<h1>Modulo de Jueces</h1>
<table border=1>
<th><h3>Selecciona la delegación</h3></th>
<th><h3> Selecciona el instituto</h3></th>
<th><h3> Selecciona el nombre del alumno</h3></th>
<th><h3> Selecciona el archivo a evaluar.</h3></th>
<th><h3> Avance del alumno.</h3></th>
<tr><td><select id='delegaciones' name='delegaciones'>
        <option selected>Selecciona una opcion</option>
    <?php
    foreach($tareas=$con->query("SELECT * FROM delegaciones")as $colDelegaciones){
        
        echo "<option value='$colDelegaciones[IdDelegacion]'>$colDelegaciones[Nombre]</option>"; 
         }
         //Se hara una modificacion a la tabla para poder filtrar a los alumnos por escuelas.
    ?>
    </select>
    </td>
    <td><div class="escuelas"></div>
    <td><div class="alumno"><select id='lista3' name='lista3'><option value='0'>Selecciona una opcion</option></div></td>
    <td><div class="archivo"><select id='lista4' name='lista4'><option value='0'>Selecciona una opcion</option></div></td></div></td>
    <td><div class="avance"></div></td></tr>
    <tr><td colspan="5" align="center"><h4>Visualizador de archivos</h4></td></tr>
    <tr><td colspan="5" align="center"><embed src="pruebas/archivos/algo.pdf" type="application/pdf" width="800" height="600"></embed></td></tr>
    <tr><td colspan="3" align="center"><h4>Calificacion</h4></td><td colspan="3" align="center"><h4>Calificacion Total</h4></tr>
    <tr><td colspan="3" align="center"><input type="text" name="calif" id="calif"></td><td colspan="2" align="center"><input type="text" name="calif" id="califT" disabled></td></tr>

    </table>                 
</body>
</html>