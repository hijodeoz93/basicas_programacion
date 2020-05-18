<?php 
require('conexion.php');
$datos=$con->query("select COUNT(Nombre_archivo) as entregado, (SUM(Calificacion))/".$calt['totalT']." as calTotal from avances where Id_alumno=$id[idAlumno]");


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			header("Location: pizara.php");
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		header("Location: pizara.php");
	}else{
		echo "Archivo no se pudo guardar";
	}
}

?>