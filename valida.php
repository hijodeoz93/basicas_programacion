<?php
require("Conexion.php");
if(isset($_POST['Enviar'])){
    $dat1=htmlentities($_POST['us']);
    $dat2=htmlentities($_POST['pw']);
    
    $con=Connect::conectar();
    $valida=$con->query("SELECT Usuario, Contraseña,Tipo, idUsuarios FROM usuarios where Usuario='$dat1' and Contraseña='$dat2'") or die ($con->error." -.-");
    $busqueda=$valida->fetch_assoc();
    if(is_null($busqueda)){
        echo"<script>alert('La contraseña del usuario no es correcta.'); window.location.href=\"index.html\"</script>"; 
    }else{
        @session_start();
        $_SESSION["aut"]=true;
        $_SESSION["id"]=$busqueda['idUsuarios'];
        if($busqueda["Tipo"]=='Sup'){
            header ("Location: Administrar.php");
        }else if($busqueda["Tipo"]=='dos'||$busqueda["Tipo"]=='Dos'){
            header ("Location: Registro.php");
        }
    }
}
else{
    print_r($_POST);
}


?>