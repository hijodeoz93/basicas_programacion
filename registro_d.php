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
<h1>Registro de docentes</h1>
    <form action="Ingresa_docente.php" method="POST" enctype="multipart/form-data" name="registro"class="form-register">
    <button><a href="salir.php">Regresar</a></button>
        Ingresa tu datos
        <div class="Contenedor-inputs">
           <p><input type='text' name='us' placeholder='Usuario'></p>
           <p><input type='password' name='pass' placeholder='Contraseña'></p>
           <p><input type='password' name='passc' placeholder='Repite la contraseña'></p>

                <p><input type="text" name="nomint" placeholder="Nombre" required></p>
                <p><input type="text" name="carint" placeholder="Cargo (opcional)"></p>
                <p>Selecciona tu género:
                <input type="radio" name="sexoint" value="M"><label>Masculino</label>
                <input type="radio" name="sexoint" value="F"><label>Femenino</label></p>
</br>
                <p><input type="tel" name="telint" placeholder="teléfono" required></p>
                <p><input type="email" name="correoint" placeholder="Correo" required></p>
            </div>
           <p>
           Dependencia de origen
               <select id="dependencia" name="dependencia">
               <option default>Selecciona una opcion</option>
                   <?php
                        $datos3=$con->query("SELECT * FROM escuelas") or die($con->error());
                        foreach($datos3 as $filas2){
                            echo "<option carga='$filas2[Nombre]'>$filas2[Nombre]</option>";
                         }             
                   ?>
               </select>
               </p>
               <input type="button" value="Enviar Registro" name="enviar" onclick="confirmar_()">

        </fieldset>
    </form>
</body>
</html>