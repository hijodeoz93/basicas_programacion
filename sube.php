<?php 
require('conexion.php');
@session_start();
$con=Connect::conectar();
$tarea=$_SESSION['tarea']+1;
$session=$con->query("SELECT idAlumno from alumno where Id_usuario=$_SESSION[id]");
$id=mysqli_fetch_assoc($session);
$hora_fecha=date('Y-m-d H:i:s');
$hora=date('H:i:s');
//sentencia de insecion.
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
$ciclos=count(array_filter($nombre));
//print_r($_FILES);
for($i=0; $i<$ciclos; $i++){
	$datos=$con->query("INSERT into avances(Tipo_tarea, Hora_creacion, Hora_entrega, Ruta_archivo, Nombre_archivo, Id_alumno) values($tarea,'$hora_fecha','$hora','archivos/prueba','$nombre[$i]',$id[idAlumno]);");
	$up=mysqli_fetch_assoc($datos);
	if(!file_exists('archivos/prueba')){
		mkdir('archivos/prueba',0777,true);
		if(file_exists('archivos')){
			if(move_uploaded_file($guardado[$i], 'archivos/prueba/'.$nombre[$i])){
				$tarea++;
			}else{
				echo "Archivo no se pudo guardar";
			}
		}
	}else{
		if(move_uploaded_file($guardado[$i], 'archivos/prueba/'.$nombre[$i])){
			header("Location: pizara.php");
			$tarea++;
		}else{
			echo "Archivo no se pudo guardar";
		}
	}

}
header("Location: pizara.php");

?>