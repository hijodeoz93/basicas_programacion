<?php
//falta exportar a excel y oder subr datos para el cuestionario
include('security.php');
require("Conexion.php");
$x=0;
$con=Connect::conectar();
$datos=$con->query("SELECT * FROM alumno INNER JOIN docente on alumno.Id_Docente=docente.ID_Docente ") or die ($con->error." linea 1");
$datos2=$con->query("SELECT * FROM escuelas LEFT JOIN docente on Nombre = Dependencia") or die($con->error());
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
	<link rel="stylesheet" type="text/css" href="css/adm.css">
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
	<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="update.js"></script>

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
                  <a class="nav-link" href="Index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Salir.php" id='salir'>Salir</a>
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
		<div class="table-responsive container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<form action="#">
					<table>
						<thead>
							
							<tr class="table100-head">
								<br></br>
								<br></br>
								<center><font face="Leelawadee"><h2><strong>Módulo de administración</strong></h2></font></center>
								<center><font face="Leelawadee"><h4><strong>Edicion del alumno</strong></h4></font></center>
								<th class="column1" scope="row">Nombre del alumno</th>
								<th class="column2" scope="row">Carrera</th>
								<th class="column3" scope="row">Sexo</th>
								<th class="column4" scope="row">Telefono</th>
								<th class="column5" scope="row">Correo</th>
								<th class="column6" scope="row">Eliminar registro</th>
								
							</tr>
						</thead>
						<tbody>
									<?php
									//print_r($filas=mysqli_fetch_array($datos));
									$row=mysqli_fetch_row($datos);
									if($row==0){
										echo "<tr><td>No hay datos para mostrar</td></tr>";
									}else{
								   
								  foreach($datos as $filas){  
										echo 
										"<tr>
												 
											 <td><input type='text' value='$filas[Nombre_A]' maxlength='45'name='Nombre_A' indice='$filas[idAlumno]' class='column1' scope='col'></td>
											 <td><input type='text' value='$filas[Carrera]'maxlength='45' name='Carrera' indice='$filas[idAlumno]' class='column2' scope='col'></td>
											 <td><input type='text' value='$filas[Sexo_A]'maxlength='1' name='Sexo_A' indice='$filas[idAlumno]' class='column3' scope='col'></td>
											 <td><input type='text' value='$filas[Telefono_A]'maxlength='45' name='Telefono_A' indice='$filas[idAlumno]' class='column4' scope='col'></td>
											 <td><input type='email' value='$filas[Correo_A]'maxlength='45' name='Correo_A' indice='$filas[idAlumno]' class='column5' scope='col'></td>
											 <td><button type='button' class='delete column6 btn btn-danger' name='Nombre_A' indice='$filas[idAlumno]'>Eliminar</button></td>
											 </tr>
											 
								  ";}
								}
								  
								  ?>
						</tbody>
					</table>
					<br>
					<br>
					<table>
						<thead>
							<center><font face="Leelawadee"><h4><strong>Edicion del docente</strong></h4></font></center>
							<tr class="table100-head">
								<h1></h1>
								<th class="column1" scope="row">Nombre del docente</th>
								<th class="column2" scope="row">Cargo</th>
								<th class="column3" scope="row">Sexo</th>
								<th class="column4" scope="row">Dependencia</th>
								<th class="column5" scope="row">Eliminar registro</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
						$datos5=$con->query("SELECT * FROM alumno INNER JOIN docente on alumno.Id_Docente=docente.ID_Docente ") or die ($con->error." linea 5");
	$datos3=$con->query("SELECT * FROM escuelas LEFT JOIN docente on Nombre = Dependencia order by ID_Docente DESC") or die($con->error());
	$row2=mysqli_fetch_row($datos5);
									if($row2==0){
										echo "<tr><td>No hay datos para mostrar</td></tr>";
									}else{
    foreach($datos5 as $filas){
        echo "<tr>
                <td><input type='text' value='$filas[Nombre_D]'maxlength='45' name='Nombre_D' indice='$filas[ID_docente]' class='column1' scope='col'></td>
                <td><input type='text' value='$filas[Cargo]'maxlength='45' name='Cargo' indice='$filas[ID_docente]' class='column2' scope='col'></td>";
				echo " <td><input type='text' value='$filas[Sexo_D]'maxlength='1' name='Sexo_D' indice='$filas[ID_docente]' class='column3' scope='col'></td>
				<td class='column4' scope='col'><select>";
       foreach($datos3 as $filas2){
          echo "<option indice='$filas[ID_docente]' carga='$filas2[Nombre]' name='Dependencia'>$filas2[Nombre]</option>";
	   } 
	   echo"</select></td>
				
				<td><button class='delete column5 btn btn-danger' name='Nombre_D' indice='$filas[ID_docente]'>Eliminar registro</button></td>
           </tr>";
	}
}
	?>
						</tbody>
					</table>
					</form>
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
 <!-- Site footer -->
 <footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>Dirección</h6>
        <p class="text-justify">Camino Real #625 Col. Jardines del Llano, San Juan Ixtayopan, 
            <p>Deleg. Tláhuac, C.P. 13550 México, CDMX</p>
            <li><a>www.ittlahuac2.edu.mx</a></li>

            
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Contacto</h6>
        <ul class="footer-links">
          <li><a>Teléfonos</a></li>
          <li><a>(55) 5848-4229</a></li>
          <li><a>(55) 5848-4218</a></li>
          <li><a>Email- ext_tlahuac2@tecnm.mx</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <a class="site footer" href="#homepage"><img src="pleca-lobo.png" alt="" width="110" height="140"/></a>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <center><p class="copyright-text">Copyright &copy; 2020 ITT2</p></center>
      </div>
    </div>
  </div>
</footer>

</body>
</html>