<?php
include("security.php");
@session_start();
require("Conexion.php");
$con=Connect::conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Instituto Tecnologico de Tlahuac II - Pizarra de jueces</title>
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
	<link rel="stylesheet" type="text/css" href="css/juez.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
	input{
  	margin:auto !important;
  	background-color:lightgrey !important;
	}
</style>
   
    <!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="sselect.js"></script>
	<script src="agrega_filas.js"></script>
    
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
                  <a class="nav-link" href="Salir.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item active">
                  <a class="nav-link" href="Actividades.php">Subir actividades<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Salir.php">Salir</a>
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
								<center><font face="Leelawadee"><h2><strong>Módulo Juez</strong></h2></font></center>
								<th class="column1">Delegación</th>
								<th class="column2">Dependencia</th>
								<th class="column3">Nombre del Alumno</th>
								<th class="column4">Archivo a evaluar</th>
								<th class="column5">Avance del Alumno</th>
								<th class="column6">Calificación</th>
							</tr>
						</thead>
						<tbody>
									<tr><td class="column1"><select id='delegaciones' name='delegaciones'>
										<option selected>Selecciona una opcion</option>
									<?php
									foreach($tareas=$con->query("SELECT * FROM delegaciones")as $colDelegaciones){
										
										echo "<option value='$colDelegaciones[IdDelegacion]'>$colDelegaciones[Nombre]</option>"; 
										 }
										 //Se hara una modificacion a la tabla para poder filtrar a los alumnos por escuelas.
									?>
									</select>
									<td class="column2"><div class="escuelas"></div>
    								<td class="column3"><div class="alumno"><select id='lista3' name='lista3'><option value='0'>Selecciona una opcion</option></div></td>
    								<td class="column4"><div class="archivo"><select id='lista4' name='lista4'><option value='0'>Selecciona una opcion</option></div></td></div></td>
    								<td class="column5"><div class="avance"></div></td></tr>
						</tbody>
					</table>
						<br>
						<br>
					<table>
						<thead>
							
							<tr class="table100-head">
								<th class="column1">Visualizador de Archivos</th>
							</tr>
						</thead>
						<tbody>
								<tr>
								<td class="column1"><embed src="pruebas/archivos/algo.pdf" type="application/pdf" width="800" height="600"></embed></td>
								</tr>
						</tbody>
					</table>
					<br>
				<form id="tareas">
					<table>
						<thead>
							
							<tr class="table100-head">
								<th class="column1">Calificacion</th>
								<th class="column2">Calificacion Total</th>
							</tr>
						</thead>
						<tbody>
    					<tr><td class="column1"><input type="text" name="calif" id="calif"></td>
						<td class="column2"><input align="center" type="text" name="calif" id="califT" disabled placeholder="algo"></td>
						</tr>
						</tbody>
					</table>
					<br>
					<br>
					<center><font face="Leelawadee"><h2><strong>Modulo para actividades</strong></h2></font></center>
					<table class="table100-head" id="acti">
						<thead>
						<th class="column1">Nombre de actividad</th>
						<th class="column2">Tiempo de entrega</th>
						<th class="column3">Eliminar campos</th>
						
						</thead>
						<tbody>
						<tr>
							<td class="column1"><input type="text" name="N_actividad[]" id=""></td>
							<td class="column2"><input type="text" name="Tiempo[]"></td>
							<td class="column3"><button type="button" class="remove-item borrar btn btn-danger"><span class="fa fa-window-close"></span></button></td>
						</tr>
						</tbody>
					
					</table>
					<table class="table100-head">
						<thead>
						<th class="column1">Instructivo de las actividades</th>
						</thead>
						<tbody>
						<tr><td class="column1"><input type="file" name="Instructivo"></td></tr>
						</tbody>
					</table>
					<button type="button" class="btn btn-default" id="masfilas">Agregar una actividad más</button>
					<button type="Submit" class="btn btn-success" id="btne">Enviar</button>


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