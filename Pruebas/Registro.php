<?php
?>
<html lang="es">
<head>
    <script type="text/javascript" src="funciones.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pruebas/Formulario.css">
    <title>Registro de aspitantes</title>
</head>
<body>
<h1>Registro de alumno</h1>
    <form action="ingresa_registro.php" method="POST" enctype="multipart/form-data" name="registro"class="form-register">
    <button><a href="salir.php">Regresar</a></button>
        Ingresa tu datos
        <div class="Contenedor-inputs">
           <p><input type='text' name='us' placeholder='Usuario' required></p>
           <p><input type='password' name='pass' placeholder='Contraseña' required></p>
           <p><input type='password' name='passc' placeholder='Repite la contraseña' required></p>

                <p><input type="text" name="nomint" placeholder="Nombre" required></p>
                <p><input type="number" name="edadint" placeholder="Edad" required></p>
                <p><input type="text" name="carrint" placeholder="Carrera (si aplica)" required></p>
                <p>Selecciona tu género:</p>
                <p><input type="radio" name="sexoint" value="M"><label>Masculino</label>
                <input type="radio" name="sexoint" value="F"><label>Femenino</label></p>
</br>
                <p><input type="tel" name="telint" placeholder="teléfono" required></p>
                <p><input type="email" name="correoint1" placeholder="Correo" required></p>
            </div>
            <p>Selecciona a tu docente</p>
            <select id="Docente" name="Docente">
            <?php
                   require("Conexion.php");
                   $con=Connect::conectar();
                        $datos3=$con->query("SELECT Nombre_D,ID_docente FROM docente") or die($con->error());
                        foreach($datos3 as $filas2){
                            echo "<option indice='$filas2[ID_docente]' name='$filas2[Nombre_D]'>$filas2[Nombre_D]</option>";
                         }         
           echo" </select>
           <p>
           Dependencia
               <select id='Dependencia' name='Dependencia'>
               <option default>Selecciona una opcion</option>";
                        $datos4=$con->query("SELECT IdEscuela,Nombre FROM escuelas") or die($con->error());
                        foreach($datos4 as $filas3){
                            echo "<option indice='$filas3[IdEscuela]' carga='$filas3[Nombre]' name='$filas3[Nombre]'>$filas3[Nombre]</option>";
                         }             
                   ?>
               </select>
               <input type="button" value="Enviar Registro" name="enviar" onclick="confirmar()">
           </p>
        </fieldset>
    </form>
</body>
</html>