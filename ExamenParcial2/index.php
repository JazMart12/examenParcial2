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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

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
                <li><a class="active" href="#">&lt; Inicio &gt;</a></li>
                <li><a class="" href="Servicios.html">Servicios</a></li>
                <li><a class="" href="contacto.html">Contacto</a></li>
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
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
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
                                    
                                    <small><a href="php/logout.php" id="cerrar_sesion">Cerrar sesion</a></small>
                                    
                                    
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small>
                                    
                                </div>
                            </form>
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

    <section id="content-body">
        <div class="body-part-1">
            <div class="developer-intro">
                <p>Software</p>
                <p>Hardware</p>
            </div>
            <div class="body-title">
                <!-- <h1>Talk is cheap<br>Show me the code</h1> -->
                <h1 style="font-size: 35px; font-weight: 600; ">Hola!<br>Somos Code Crafters</h1>
                <p style="font-size: 25px;">Nos gusta diseñar cosas simples y bien<br>estructuradas y compartirlas con el mundo.</p>
                <a href="#">Conocenos más!</a>
            </div>
            <div class="body-tail">
                <h1>+</h1>
                <p>Tu Puerta al Mundo<br>del Software</p>
                <h2>100,000</h2><br><p>PROYECTOS <br> Alrededor del mundo</p>
            </div>
        </div>
        <div class="body-part-2">
            <div class="hoodie-guy-animation-class">
                <div class="hoodie-guy"></div>
                <div class="circle">
                    <img src="../iconos/" alt="">
                    <span style="--i:1;"><img src="../iconos/mouse-svgrepo-com.svg" height="70px"></span>
                    <span style="--i:2;"><img src="../iconos/software-developer-work-on-computer-programmer-coder-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:3;"><img src="../iconos/screencast-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:4;"><img src="../iconos/software-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:5;"><img src="../iconos/translation-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:6;"><img src="../iconos/code-merge-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:7;"><img src="../iconos/code-file-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:8;"><img src="../iconos/software-platform-computer-software-system-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:9;"><img src="../iconos/copy-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:10;"><img src="../iconos/code-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:11;"><img src="../iconos/file-smile-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:12;"><img src="../iconos/annotation-user-svgrepo-com.svg" height="70px"></span>
                    <span style="--i:13;"><img src="../iconos/folder-cloud-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:14;"><img src="../iconos/cloud-download-svgrepo-com.svg" height="75px"></span>
                    <span style="--i:15;"><img src="../iconos/gallery-download-svgrepo-com.svg" height="75px"></span>
                </div>
            </div>
            <div class="background-circle">
                <span></span>
            </div>
        </div>
    </section>
    <section id="introduction">
        <div class="cards">
            <div class="design-card active">
                <div>
                    <h3 style="font-weight: 800; font-size: 28px;">¿Quiénes somos?</h3>
                    <i class="fa-solid fa-users"></i>
                </div>
                <p>Creadores de sistemas para la era digital.</p>
                <a href="">CREADORES</a>
            </div>
            <div class="design-card">
                <div>
                    <h3 style="font-weight: 800; font-size: 28px;">Nuestro Propósito</h3>
                    <i class="fa-solid fa-quote-left"></i>
                </div>
                <p>Crear un mejor futuro juntos.</p>
                <a href="">CRECER</a>
            </div>
            <div class="design-card">
                <div>
                    <h3 style="font-weight: 800; font-size: 28px;">Servicios</h3>
                    <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <p>* Aceleracion de adopcion digital. <br> * Trasformación de portafolio de aplicaciones. <br> * Transformación de servicios para ti.</p>
                <a href="">MEJORES</a>
            </div>
        </div>
        
        <div class="introduction-text">
            <p>Introducción</p>
            <h4 style="font-size: 20px;">Hola!</h4>
            <h2>Nuestro equipo</h2>
            <p>Somos un grupo de desarrolladores comprometidos con nuestro trabajo, en este caso, con el desarrollo
                de crear e innovar, para nosotros es un reto, pero sin embargo Code Crafters nos a dado las herramientas
                necesarias para esto, es por eso que pertencer a este equipo de trabajo nos hace sentir muy bien.</p>
        </div>
        <div class="introduction-text" style="display: none;">
            <p>Introducción</p>
            <h4 style="font-size: 20px;">Hola!</h4>
            <h2> Aspiramos a...</h2>
            <p>Crecer, ser mejores, poder imaginar y hacer un mejor mundo para todas las personas que son capaces de imaginar y crear,
                esa es una de nuestros principales propósitos.
            </p>
        </div>
        <div class="introduction-text" style="display: none;">
            <p>Introducción</p>
            <h4 style="font-size: 20px;">Hola!</h4>
            <h2>Servicios</h2>
            <p>Nos esforzamos para que los nuevos miembros y usuarios de Code Crafters se lleven un buen servicio, siempre
                tratamos de la mejor manera posible de brindar un excelente sirvicio que sea de ayuda para los usuarios y nuevos
                miembros. </p>
        </div>
    </section>

    <section id="carrucel">
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="../imagenes/Presentación Astronauta Azul Oscuro.jpg" alt="Imagen 1">
        </div>
        <div class="carousel-slide">
            <img src="../imagenes/2.jpg" alt="Imagen 2">
        </div>
        <div class="carousel-slide">
            <img src="../imagenes/oo.jpg" alt="Imagen 3">
        </div>
    </div>
    </section>

    <section id="latest-works">
        <div class="left-project">
            <div class="latest-work-title">
                <h3>Información</h3>
                <br>
                <p>Un poco sobre nosotros...</p>
            </div>

            <div class="project-card project-card-1">
                <div class="title">
                    <h3>Paginas Web</h3>
                    <div class="tech-stack">
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <img src="../imagenes/Error 404 __ Web concept series.jfif" alt="" class="project-img-2">
            </div>

            <div class="all-projects">
                <a href="">
                    <h3>TODOS LOS SERVICIOS</h3>
                    <h4>Paginas Web</h4>
                    <h4>Marketing</h4>
                    <h4>Software Personalizado</h4>
                </a>
                <p><br> <a href="">DESARROLLADORES</a>
                    <h4>Jazmin Martinez Chavez</h4>
                    <h4>Asly Lizbeth Salinas Morales</h4>
                    <h4>Carlos Alberto Contreras Martinez</h4>
                </p>
            </div>
        </div>
        <div class="right-project">
            <div class="project-card project-card-2">
                <div class="title">
                    <h3>Marketing</h3>
                    <div class="tech-stack">
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <img src="../imagenes/Atelier _ Brand Identity.jfif" alt="" class="project-img-1">
            </div>
            <div class="project-card project-card-3">
                <div class="title">
                    <h3>Software Personalizado</h3>
                    <div class="tech-stack">
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <img src="../imagenes/Cursos de AutoCAD Civil 3D para empresas en Barcelona.jfif" alt="" class="project-img-3">
            </div>
        </div>
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
                <h4>correo electronico</h4>
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
    </section>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>