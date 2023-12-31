<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
ob_start();
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"];
?>
<?php
// Iniciar o reanudar una sesión
//session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION["usuario"])) {
    $sesionActiva = false;
} else {
    $sesionActiva = true;
}
//var_dump($_SESSION["usuario"]);
//die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Crafters</title>
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="imagenes/logo-ConvertImage.ico">

</head>

<body>
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
                <li><a class="" href="servicios.php">Servicios</a></li>
                <li><a class="active" href="contacto.php">&lt; Contacto &gt;</a></li>
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
                                    <button type="submit" class="bt n btn-primary btn-block">Login</button>
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
<!-- fin Encabezado -->

<div class="container" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="row">
        <div class="col-md-6">
            <div class="contact-info">
                <h2 style="font-weight: 800;">Contáctanos</h2>
                <br>
                <p>¡Estamos aquí para ayudarte! Contáctanos para cualquier pregunta o comentario.</p>
                <br>
                <br>
                <ul>
                    <li style="color: white;"><i class="fa fa-envelope" style="color: white;"></i>  codecrafters@gmail.com</li>
                    <br>
                    <li style="color: white;"><i class="fa fa-phone" style="color: white;"></i>  +52 465-200-1232</li>
                    <br>
                    <li style="color: white;"><i class="fa-solid fa-globe"  style="color: white;"></i>  Avenida Universidad 940, Ciudad Universitaria, Universidad Autónoma de Aguascalientes, 20100 Aguascalientes, Ags.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6" style="background-color: #64f4ac; color: black; padding-top: 30px;padding-bottom: 30px; border-radius: 30px; padding-left: 40px;padding-right: 40px;">
            <div class="contact-form">
                <h2 style="font-size: 25px;font-weight: 700;text-align: center;">Formulario de Contacto</h2>
                <form action="formulario_contactanos.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14806.125242757787!2d-102.
33626167245363!3d21.914116910620464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
1s0x8429eee23dfea56d%3A0xc2edcc935471e5fa!2sUniversidad%20Aut%C3%B3noma%20de%20Aguascalientes
%2C%2020100%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1698557861909!5m2!1ses!2smx" 
width="1525" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy=
"no-referrer-when-downgrade"></iframe>

<!-- Pie de pagina -->
    <section id="footer">
        <div class="footer-left">
            <h2>Vamos hagamos cosas increibles juntos!</h2>

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
    <!-- fin de pie de pagina 
    <script src="script.js"></script> -->
</body>

</html>