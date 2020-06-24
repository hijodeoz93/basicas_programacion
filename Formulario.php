<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Instituto Tecnologico de Tlahuac 2</title>
    <link rel="icon" href="favicon.ico" type="image/png" />
    <script type="text/javascript" src="funciones.js"></script>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<style>
  select{width:80% !important;}
  label{color:white !important;}
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
<link rel="stylesheet" type="text/css" href="static/css/indexf.css" th:href="@{/css/indexf.css}">
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
                      <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Regresar</a>
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
<center><div class="modal-dialog text-center">
<br></br>
  <br></br>
  <center><font face="Leelawadee"><h3><strong>INTER-TecNM PROGRAMMER CDMX</strong></h3></font></center>    
  <center><font face="Leelawadee"><h3><strong>Registro Alumnos</strong></h3></font></center>
  <br></br>
    <div class="col-sm-8 main-section">
        <center><div class="modal-content">
            <div class="col-20 user-img">
                <img src="pleca-lobo.png" th:src="@{/pleca-gob.png}"/>
            </div>
                <form action="ingresa_registro.php" method="post" enctype="multipart/form-data" name="registro">
                    <label for="exampleFormControlInput1">Ingresa tus Datos</label>
                    <div class="row">
                      <div class="col">
                         <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                        <input type="text" class="form-control" name='nomint' placeholder="Nombre(s)">
                      </div>
                      </div>
                      <div class="col">
                      <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                        <input type="text" class="form-control" name='apeint' placeholder="Apellidos">
                      </div>
                      </div>
                      </div>
                      <div class="col-auto">
                        <label for="exampleFormControlInput1">Escribe tu nombre de usuario</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                          </div>
                          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" name='us'>
                        </div>
                      </div>
                    
                      <div class="col-auto">
                        <label for="inputPassword6">Escribe tu contraseña</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Contraseña" name="pass">
                        </div>
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword">Repite la contraseña</label>
                            <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                              <input type="password" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          <div class="col-auto">
                        <label for="exampleFormControlInput1">Escribe tu e-mail</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" name="correoint">
                      </div>
                      <label for="exampleFormControlInput1">Escribe tu carrera</label>
                      <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Carrera" name="carint">
                      </div>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label for="exampleFormControlInput1">Genero</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sexoint">
                        <option selected>Selecciona una opcion</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                      </select>
                    </div>
                     </div>
                    <div class="col-auto">
                            <label for="inputTelephone" >Telefono</label>
                            <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                            <input type="tel" class="form-control" id="inputTelephone" name="telint">
                          </div>
                          </div>
                    </div>
                      <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <label for="exampleFormControlInput1">Docente</label>
                            <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"></div>
                            </div>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" width="25" name='Docente'>
                            <option selected>Selecciona una opcion</option>
                            <?php
                   require("Conexion.php");
                   $con=Connect::conectar();
                        $datos3=$con->query("SELECT Nombre_D,ID_docente FROM docente") or die($con->error());
                        foreach($datos3 as $filas2){
                            echo "<option indice='$filas2[ID_docente]' name='$filas2[Nombre_D]'>$filas2[Nombre_D]</option>";
                         }         
           echo" </select>
           </div>
           </div>
           <label for='exampleFormControlInput1' text-align='center'>Dependencia</label>
           <div class='input-group mb-2'>
           <div class='input-group-prepend'>
             <div class='input-group-text'></div>
             </div>
           <select class='custom-select mr-sm-2' id='inlineFormCustomSelect' name='Escuela' width='25'>
           <option selected>Selecciona una opcion</option>";
                        $datos4=$con->query("SELECT IdEscuela,Nombre FROM escuelas") or die($con->error());
                        foreach($datos4 as $filas3){
                            echo "<option carga='$filas3[Nombre]' name='$filas3[Nombre]'>$filas3[Nombre]</option>";
                         }             
                   ?>
                          </select>
                        </div>
                        <button type="Button" class="btn btn-primary mb-2" onclick="confirmar()">Registrar</button>
                        </form>
                        
                        
                    
                  </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div></center>
                        </div></center>

        </form>
                        </body>
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
</html>
