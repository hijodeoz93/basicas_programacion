<?php
include('security.php');
?>
<html lang="es">
<head>
    <script type="text/javascript" src="funciones.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de aspitantes</title>
</head>
<body>
    <form action="ingresa_registro.php" method="POST" enctype="multipart/form-data" name="registro">
    <button><a href="salir.php">Salir</a></button>
        <fieldset>
        <legend>Ingesa tu datos</legend>
        <div id="integrante">
           <p><label>Integrante 1</label></p>
                <p><input type="text" name="nomint1" placeholder="Nombre" required></p>
                <p><input type="number" name="edadint1" placeholder="Edad" required></p>
                <p><input type="text" name="carrint1" placeholder="Carrera (si aplica)"></p>
                <p>Selecciona su género:</p>
                <p><input type="radio" name="sexoint1" value="M"><label>Masculino</label></p>
                <p><input type="radio" name="sexoint1" id="F"><label>Femenino</label></p>

                <p><input type="tel" name="telint1" placeholder="teléfono" required></p>
                <p><input type="email" name="correoint1" placeholder="Correo" required></p>
            </div>
            <legend>Ingresa los datos de tu asesor</legend>
           <p> <input type="text" name="nom" id="" placeholder="Nombre" required=true></p>
           <p> <input type="text" name="ape" id="" placeholder="Apellidos" required></p>
           <p> <input type="text" name="cargo" id="" placeholder="Cargo"></p>
           <p> <input type="email" name="correo" id="" placeholder="Correo" ></p>
           <!-- <p> <input type="number" name="no_control" id="" placeholder="No. de control" required></p>-->
           <p>Selecciona tu género:</p>
           <p><input type="radio" name="sexo" value="M"><label>Masculino</label></p>
           <p><input type="radio" name="sexo" value="F"><label>Femenino</label></p>
           <p><input type="text" name="dep" placeholder="Dependencia" required></p>
            
           <p>
               <select>
                   
               </select>
               <input type="submit" value="Enviar Registro" name="enviar" onclick="confirmar()">
           </p>
        </fieldset>
    </form>
</body>
</html>