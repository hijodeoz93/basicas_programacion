<?php
//modificar la base para poder filtrar por escuela a los alumnos.
	require("Conexion.php");
	$con=Connect::conectar();
	$continente=$_POST['delegacion'];
	$val=$_POST['validador'];

	function prom($var){
		$con=Connect::conectar();
		$t=$con->query("select count(Id_tarea) from tareas");
		$ta=$con->query("SELECT COUNT(Id_tareas) from avances WHERE Id_alumno=$var");
		$total=mysqli_fetch_array($t);
		$tareas=mysqli_fetch_array($ta);
		$res=($tareas[0]*100)/$total[0];
		$dato=$res;
		return $dato;
		$con->close();
		}

	if($val==0){
		$t=$con->query("SELECT * FROM escuelas where IdDelegaciones='$continente'");
		$cadena="<select id='lista2' name='lista2'><option value='0'>Selecciona una opcion</option>";
		while ($ver=mysqli_fetch_row($t)) {
			$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
		}
	
		echo  $cadena."</select></td>";
	}else if($val==1){
		$a=$con->query("SELECT * FROM alumno where IdEscuela= $continente");
		$cadena2="<select id='lista3' name='lista3'><option value='0'>Selecciona una opcion</option>";
		while ($ver=mysqli_fetch_row($a)) {
			$cadena2=$cadena2.'<option value='.$ver[0].'>'.$ver[3].'</option>';
		}

		echo  $cadena2."</select></td>";

	}else if($val==2){
		$t=$con->query("SELECT * FROM avances where Id_alumno=$continente");
		$cadena="<select id='lista4' name='lista4'><option value='0'>Selecciona una opcion</option>";
		while ($ver=mysqli_fetch_row($t)) {
			$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[6].'</option>';
		}
		echo  $cadena."</select></td>";
	}else if($val==3){
		
	echo prom($continente)."%";
	}

?>