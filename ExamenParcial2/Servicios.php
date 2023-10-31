<?php
// Iniciar o reanudar una sesión
session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION["usuario"])) {
    $sesionActiva = false;
} else {
    $sesionActiva = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Crafters</title>
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="imagenes/logo-ConvertImage.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="styles.css">
</head>

<body style="background-color: #222;">
    <!-- Encabezado -->
    <section id="header">
        <div class="navbar-title">
            <h3 class="title-first-name" style="font-weight: 900; font-size: 40px;">
                Code
            </h3>
            <h3 class="title-last-name" style="font-weight: 900; font-size: 40px;">
                Crafters
            </h3>
        </div>
        <div>
            <ul class="navbar-menu">
                <li><a class="" href="index.php">Inicio</a></li>
                <li><a class="active" href="Servicios.php">&lt; Servicios &gt;</a></li>
                <li><a class="" href="contacto.php">Contacto</a></li>
                <?php
                    if(!$sesionActiva){
                        echo '<li><a href="php/contrataciones.php">Contrataciones</a></li>';
                    }
                ?>
            </ul>
        </div>
        <div>
            <ul class="social-media">
                <li>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <a href="#" target="_blank">LinkedIn</a>
                </li>
                <li>
                    <i class="fa-brands fa-github"></i>
                    <a href="#" target="_blank">Github</a>
                </li>
            </ul>
        </div>

        <div >
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    
                       
                       <?php
                    if($sesionActiva){
                        echo 
                        '<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right mt-2">
                           <li class="px-3 py-2">
                        <form class="form" role="form" action="php/login.php" method="post">
                                <div class="form-group">
                                    <input name="usuario" id="emailInput" placeholder="Usuario" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input name="pass" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-center">
                            
                            
                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small>
    
                        </div>
                            </form>';
                        } else {
                            echo '<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">'.$_SESSION["usuario"].' <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right mt-2">
                               <li class="px-3 py-2">
                            <form class="form" role="form" action="php/login.php" method="post">
                            <div class="form-group text-center">
                                    
                            <small><a href="php/logout.php" id="cerrar_sesion">Cerrar sesion</a></small>
    
                        </div>
                    </form>';
                        }
                        ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
  </section>

  <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h3>Registro</h3>
                  <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <form class="form" role="form" action="php/registro.php" method="post">
              <div class="modal-body">
              
                  <p style="color: black;">Usuario: <input type="text" name="usser" required autofocus> </p>
                  <p style="color: black;">Correo: <input type="email" name="mail" required></p>
                  <p style="color: black;">Contraseña: <input type="text" name="contra" required> </p>
               
                  
              </div>
              <div class="modal-footer">                
                  <div class="form-group">                  
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                 </div>
              </div>
              </form>
          </div>
      </div>
  </div>
    </section>
<!-- fin Encabezado -->

<!-- Aqui empieza el collage-->
<section id="content-collage">
<div class="container-img">
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage1.jpg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage2.jpeg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage3.jpeg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage7.jpeg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage5.jpeg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage6.jpeg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
      <a href="#">
          <figure>
              <img src="imagenes/collage8.jpeg" alt="img-galeria">
          </figure>
      </a>
  </div>
  <div class="box-img">
    <a href="#">
        <figure>
            <img src="imagenes/collage4.png" alt="img-galeria">
        </figure>
    </a>
</div>
<div class="box-img">
  <a href="#">
      <figure>
          <img src="imagenes/collage9.jpeg" alt="img-galeria">
      </figure>
  </a>
</div>
</div>
<br>
</section>
<br>
<br>
<!--Aqui termina el collage-->

<section style="padding-top: -20px;">
<div class="boxesContainer">
  <h1 id="tit-ser">Nuestros servicios</h1>

    <div class="cardBox">
      <div class="card">
        <div class="front">
          <h3>Data & Analytics</h3>
          <p>Ver Mas...</p>
          <i class="fas fa-solid fa-database"></i>
        </div>
        <div class="back">
          <h3></h3>
          <p style="text-align: justify; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color: black;">Impulsando conocimientos de inteligencia y toma de decisiones mas efectiva.</p>
          <a href="#"></a>
        </div>
      </div>
    </div>
   
    <div class="cardBox">
      <div class="card">
        <div class="front">
          <h3>Desarrollo de Software</h3>
          <p>Ver Mas...</p>
          <i class="fas fa-solid fa-code"></i>
        </div>
        <div class="back">
          <h3></h3>
          <p style="text-align: justify; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color: black;">Hoy en dia la versativilidad y adaptabilidad es vital, 
            la velocidad de cambios en el negocio nos obliga a estar 
            atentos y ser eficientes en nuestros servicios.</p>
          <a href="#"></a>
        </div>
      </div>
    </div>
   
    <div class="cardBox">
      <div class="card">
        <div class="front">
          <h3 >IA</h3>
          <p>Ver Mas...</p>
          <i class="fas fa-solid fa-rocket"></i>
        </div>
        <div class="back">
          <h3></h3>
          <p style="text-align: justify; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color: black;">Desarrollamos estrategias personalizadas y
          creamos un plan detallado para implementar soluciones
          de IA en tu empresa.</p>
          <a href="#"></a>
        </div>
      </div>
    </div>
   
    <div class="cardBox">
      <div class="card">
        <div class="front">
          <h3>Gobierno de Datos</h3>
          <p>Ver Mas...</p>
          <i class="fas fa-solid fa-sitemap"></i>
        </div>
        <div class="back">
          <h3></h3>
          <p style="text-align: justify; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; color: black;">Creer en el poder de los datos y aprender a manejarlos.</p>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<div id="projectFacts" class="sectionClass" style="padding-top: 0;">
  <div class="fullwidth height columns">
    <div class="factswrap" onscroll="myFunction()">
      <div class="item fadeupbig animated animated" data-number="300" style="visibility: visible;">
        <img src="" alt="">
        <p id="number1" class="number" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">0</p>
        <span class=""></span>
        <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Clientes satisfechos</p>
      </div>
      <div class="item fadeupbig animated animated" data-number="20" style="visibility: visible;">
        <img src="" alt="">
        <p id="number2" class="number" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">0</p>
        <span class=""></span>
        <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Innovándonos en el mercado</p>
      </div>
      <div class="item fadeupbig animated animated" data-number="100000" style="visibility: visible;">
        <img src="" alt="">
        <p id="number3" class="number" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">0</p>
        <span class=""></span>
        <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Líneas de código</p>
      </div>
      <div class="item fadeupbig animated animated" data-number="200" style="visibility: visible;">
        <img src="" alt="">
        <p id="number4" class="number" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">0</p>
        <span class=""></span>
        <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Desarrollos de software a la medida</p>
      </div>                  
    </div>
  </div>
</div>
</div>
<script style="padding-top: 0;">
$(document).ready(function() {
    $(window).on("scroll", function() {
      myFunction();
    });
  });

  function myFunction() {
    incrementNumber("number1", 300);
    incrementNumber("number2", 20);
    incrementNumber("number3", 100000);
    incrementNumber("number4", 200);
  }

  function incrementNumber(id, targetNumber) {
  var $number = $("#" + id);
  var currentNumber = parseInt($number.text().replace("+", ""));
  var step = Math.max(Math.floor(targetNumber / 200), 1);
  if (currentNumber < targetNumber) {
    currentNumber += step;
    if (currentNumber > targetNumber) {
      currentNumber = targetNumber;
    }
    $number.text("+" + currentNumber);
    setTimeout(function() {
      incrementNumber(id, targetNumber);
    }, 50);
  } else {
    isCounting = false;
  }
}

</script>
</section>
<section>

    <div class="container marketing" style="padding-top: 3rem;
    padding-bottom: 3rem;
    color: rgb(var(--bs-tertiary-color-rgb));">

        <div class="row">
          <div class="col-lg-4">
            <img src="imagenes/po1.jpeg" alt="Descripción de la imagen 1" class="im-car">
            <h2 class="fw-normal">Consultoría en TI 2022</h2>
            <p> Los consultores en TI desempeñaron un papel fundamental en la planificación, implementación y optimización de soluciones tecnológicas.</p>
            <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="imagenes/po4.jpeg" alt="Descripción de la imagen 2"  class="im-car">
            <h2 class="fw-normal">Staffing TI 2023</h2>
            <p>Las agencias de staffing en TI desempeñan un papel fundamental en la identificación de candidatos calificados y en la creación de equipos tecnológicos sólidos.</p>
            <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="imagenes/po3.jpeg" alt="Descripción de la imagen 3" class="im-car">
            <h2 class="fw-normal">Consultoría en Desarrollo 2023</h2>
            <p>La consultoría en desarrollo en 2023 abarca una amplia gama de servicios destinados a mejorar la eficiencia, la competitividad y la sostenibilidad de las empresas.</p>
            <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">¿Para qué sectores aplica el desarrollo y servicio de <span class="text-body-secondary"> Software a la Medida?</span></h2>
            <p class="lead">Negocios, construcción,eduacación, ingeniería y arquitectura, inmobiliario, consumo y finanzas.</p>
          </div>
          <div class="col-md-5">
            <img src="imagenes/rr1.png" alt="Descripción de la imagen 1" class="img-fluid" style="max-width: 100%;">
          </div>
        </div>
        
        <hr class="featurette-divider">
        
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">¿Cómo se despliega el servicio de<span class="text-body-secondary">desarrollo de software?</span></h2>
            <p class="lead">En Code Crafters desarrollamos software a la medida. Abarcamos todo el procesos desde la fase de consultoría previa, diseño y arquitectura, desarrollo, pruebas, control de calidad y puesta en marcha.</p>
          </div>
          <div class="col-md-5 order-md-1">
             <img src="imagenes/rr2.png" alt="Descripción de la imagen 1" class="img-fluid" style="max-width: 100%;">
          </div>
        </div>
        
        <hr class="featurette-divider">
        
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Plataformas <span class="text-body-secondary"> de trabajo.</span></h2>
            <p class="lead">Trabajamos en plataformas como:HTML5, CSS3, Node, C#, Java, Angular, React, TypeScript, Phyton, PHP y .NET.</p>
          </div>
          <div class="col-md-5">
            <img src="imagenes/rr5.png" alt="Descripción de la imagen 1" class="img-fluid" style="max-width: 100%;">
          </div>
        </div>
        
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
</section>

<section id="footer">
    <div class="footer-left">
        <h2>Vamos Hagamos cosas increibles juntos!</h2>

        <div class="email-form">
            <h2>Empezar <span>diciendo hola</span></h2>
            <input type="text" name="name" id="" placeholder="Tu nombre">
            <input type="email" name="email" id="" placeholder="Ingresa tu Email">
            <div>
                <input type="Numero" name="Numero de telefono" id="" placeholder="Numero de telefono">
                <button type="submit">Enviar</button>
            </div>
        </div>

        <div class="footer-title">
            <h3 class="title-first-name">
                Code
            </h3>
            <h3 class="title-last-name">
                Crafters
            </h3>
        </div>
    </div>
    <div class="footer-right">
        <div class="footer-email-intro">
            <h3>Informacion:</h3>
            <h6>Email:</h6>
            <h4>codecrafters@gmail.com</h4>
        </div>
        <div class="footer-nav-menu">
            <ul class="footer-menu">
                <li><a class="active" href="#">&lt; Servicio &gt;</a></li>
                <li><a class="" href="#">Trabajos</a></li>
                <li><a class="" href="#">Notas</a></li>
                <li><a class="" href="#">Contactos</a></li>
            </ul>
        </div>
        <div class="social-icons">
            <a href="" target="_blank">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>
    </div>
    <footer>
      <hr>
      <p>Última actualización: <span id="last-updated"></span></p>
    </footer>
    
    <script>
      // JavaScript para mostrar la fecha de última actualización
      document.addEventListener("DOMContentLoaded", function() {
          var lastUpdated = document.lastModified;
          var lastUpdatedElement = document.getElementById("last-updated");
          lastUpdatedElement.textContent = lastUpdated;
      });
    </script>
</section>



<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>