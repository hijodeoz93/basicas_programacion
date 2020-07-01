<?php 
require('Conexion.php');
/* 
Array ( [N_actividad] => Array ( [0] => sdfsdf [1] => adfdfs [2] => sdfsdf [3] => adfdfs [4] => sdfsdf ) 
[Tiempo] => Array ( [0] => 54754 [1] => 54754 [2] => 54754 [3] => 54754 [4] => 54754 ) ) 
Array ( [Instructivo] => Array ( [name] => IMG_20171011_103953.jpg 
[type] =>image/jpeg [tmp_name] => C:\xampp\tmp\phpCEDF.tmp [error] => 0 [size] => 2827829 ) )*/
$con=Connect::conectar();
//sentencia de insecion.
$nombre=$_FILES["ins"]["name"];
$guardado=$_FILES["ins"]["tmp_name"];
$act=$_POST["N_actividad"];
$t=$_POST["Tiempo"];
$ciclos=count($act);
//print_r($_FILES);
//print_r($_POST);
//print_r($act)."<br>".print_r($t)."<br>";echo $nombre;
for($i=0; $i<$ciclos; $i++){
	$datos=$con->query("INSERT into tareas (Tipo_tarea,Tiempo_entrega,Rubrica) values('$act[$i]',$t[$i],'$nombre');");
}

	if(!file_exists('archivos/prueba2')){
		mkdir('archivos/prueba2',0777,true);
		if(file_exists('archivos/prueba2')){
			if(move_uploaded_file($guardado, 'archivos/prueba2/'.$nombre)){	
			}else{
				echo "Archivo no se pudo guardar1";
			}
		}
	}else{
		if(move_uploaded_file($guardado, 'archivos/prueba2/'.$nombre)){
			//var_dump($guardado, 'archivos/prueba2/'.$nombre);
			//echo "Archivo no se pudo guardar2";
		}
	}
	header("Location: pizarra.php");

?>