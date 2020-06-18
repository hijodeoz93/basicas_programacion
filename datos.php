<?php
//modificar la base para poder filtrar por escuela a los alumnos.
	require("Conexion.php");
	$con=Connect::conectar();
	$continente=$_POST['delegacion'];
	$val=$_POST['validador'];
	if ($val==0){
		$t=$con->query("SELECT * FROM escuelas where IdDelegaciones='$continente'");
		$cadena="<select id='lista2' name='lista2'>";
		while ($ver=mysqli_fetch_row($t)) {
			$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
		}
	
		echo  $cadena."</select></td>";
		
	}else if($val==1){
		$t=$con->query("SELECT * FROM alumno");
		$cadena="<select id='lista2' name='lista2'>";
		while ($ver=mysqli_fetch_row($t)) {
			$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[3].'</option>';
		}
	
		echo  $cadena."</select></td>";
		
	}

?>