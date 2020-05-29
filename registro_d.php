<?php
require("Conexion.php");
$con=Connect::conectar();
?>
<html lang="es">
<head>
    <script type="text/javascript" src="funciones.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pruebas/Formulario.css">
    <title>Registro de Docentes</title>
</head>
<body>
<h1>Registro de alumno</h1>
    <form action="ingresa_registro.php" method="POST" enctype="multipart/form-data" name="registro"class="form-register">
    <button><a href="salir.php">Regresar</a></button>
        Ingresa tu datos
        <div class="Contenedor-inputs">
           <p><input type='text' name='us' placeholder='Usuario'></p>
           <p><input type='password' name='pass' placeholder='Contraseña'></p>
           <p><input type='password' name='passc' placeholder='Repite la contraseña'></p>

                <p><input type="text" name="nomint" placeholder="Nombre" required></p>
                <p><input type="number" name="edadint" placeholder="Edad" required></p>
                <p><input type="text" name="carrint" placeholder="Carrera (si aplica)"></p>
                <p>Selecciona tu género:</p>
                <p><input type="radio" name="sexoint" value="M"><label>Masculino</label>
                <input type="radio" name="sexoint" id="F"><label>Femenino</label></p>
</br>
                <p><input type="tel" name="telint" placeholder="teléfono" required></p>
                <p><input type="email" name="correoint1" placeholder="Correo" required></p>
            </div>
           <p>
           Dependencia
               <select>
               <option default>Selecciona una opcion</option>
                   <?php
                        $datos3=$con->query("SELECT * FROM escuelas LEFT JOIN docente on Nombre = Dependencia") or die($con->error());
                        foreach($datos3 as $filas2){
                            echo "<option indice='$filas[ID_docente]' carga='$filas2[Nombre]' name='Dependencia'>$filas2[Nombre]</option>";
                         }             
                   ?>
               </select>
               <input type="submit" value="Enviar Registro" name="enviar" onclick="confirmar()">
           </p>
        </fieldset>
    </form>
</body>
</html>