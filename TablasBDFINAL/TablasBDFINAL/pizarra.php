<?php
include("security.php");
@session_start();
require("Conexion.php");

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

    $con=Connect::conectar();
$session=$con->query("SELECT idAlumno from alumno where Id_usuario=$_SESSION[id]");
$id=mysqli_fetch_assoc($session);
$cal=$con->query("select count(Id_tarea) as totalT from  tareas");
$calt=mysqli_fetch_assoc($cal);
$mid=$con->query("select count(Tipo_tarea) as maxId from avances where Id_alumno=$id[idAlumno]");
$max=mysqli_fetch_assoc($mid);
$_SESSION['tarea']=$max['maxId'];
$resta=$calt['totalT']-$max['maxId'];
$_SESSION['ciclos']=$resta;
$datos=$con->query("select COUNT(Nombre_archivo) as entregado, (SUM(Calificacion))/".$calt['totalT']." as calTotal from avances where Id_alumno=$id[idAlumno]");
$val2=mysqli_fetch_assoc($datos);
$prom=prom($id['idAlumno']);
 /*   


            SELECT a.Tipo_tarea, b.Nombre_archivo from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea LEFT JOIN alumno c ON b.Id_alumno=c.idAlumno
        </th>*/
    //$tareas=$con->query("select a.Tipo_tarea from tareas a left join avances b on a.Id_tarea=b.Tipo_tarea where a.Id_tarea>$max[maxId]");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Instituto Tecnologico de Tlahuac II - Pizarra</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<style>
    .fondo{
    }
    .gris{
    background:rgba(0, 0, 0, 0.199);
    }
    .top-nav-colapse{
        background:rgba(41, 41, 43, 0.212); !important;
    }
</style>
   
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top">
        <div class="container">

            <a class="navbar-brand logo" href="#homepage"><img src="pleca-gob2.png" alt="" width="190" height="40"/></a>
            <a class="navbar-brand logo" href="#homepage"><img src="pleca-tecnm.png" alt="" width="120" height="55"/></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#homepage">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="Formulario.html">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Iniciar Sesion</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                </li>

              </ul>
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="http://www.ittlahuac2.edu.mx/" class="nav-link">
                        <i class="fab fa-facebook">
                        </i>   
                    </a>
                    <li class="nav-item">
                        <a href="https://twitter.com/TecNM_MX?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="nav-link">
                            <i class="fab fa-twitter">
                            </i>    
                        </a>
              </ul>
            </div>
        </div> 
      </nav>
      <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							
							<tr class="table100-head">
								<br></br>
								<br></br>
								<center><font face="Leelawadee"><h2><strong>Tabla de Avance</strong></h2></font></center>
								<th class="column1">Tareas totales</th>
								<th class="column2">Tareas entregadas</th>
								<th class="column3">Porcentaje de avance</th>
								<th class="column4">Calificación total</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">algo</td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
								<tr>
									<td class="column1"></td>
									<td class="column2"></td>
									<td class="column3"></td>
									<td class="column4"></td>
									
								</tr>
						</tbody>
					</table>
					<table>
					<thead>
						<tr class="table200-head">
							<br></br>
							<center><font face="Leelawadee"><h2><strong>Avance</strong></h2></font></center>
							<th class="column5"></th>
							<th class="column6">Tareas entregadas</th>
							<th class="column7">Tareas pendientes</th>
							<th class="column8"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="column5"></td>
							<td class="column6"></td>
							<td class="column7"></td>
							<td class="column8"></td>
							
						</tr>
						<tr>
							<td class="column5"></td>
							<td class="column6"></td>
							<td class="column7"></td>
							<td class="column8"></td>
							
						</tr>
						<tr>
							<td class="column5"></td>
							<td class="column6"></td>
							<td class="column7"></td>
							<td class="column8"></td>
							
						</tr>
						<tr>
							<td class="column5"></td>
							<td class="column6"></td>
							<td class="column7"></td>
							<td class="column8"></td>
							
						</tr>
				</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>