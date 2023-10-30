<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido/a</title>
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../../imagenes/logo-ConvertImage.ico">
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
                <li><a class="" href="../index.php">Inicio</a></li>
                <li><a class="active" href="../Servicios.html">&lt; Servicios &gt;</a></li>
                <li><a class="" href="../contacto.html">Contacto</a></li>
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
    </section>
        <?php
        if (empty($_SESSION["usuario"])) {
            # Lo redireccionamos al formulario de inicio de sesión
            header("Location: ../index.php");
            # Y salimos del script
            exit();
        }
            date_default_timezone_set("America/Mexico_City");
            $hora = date('H'); // Obtiene la hora actual en formato de 24 horas (0-23)
            if ($hora >= 6 && $hora < 12) {
                $saludo = "Buenos días";
            } elseif ($hora >= 12 && $hora < 18) {
                $saludo = "Buenas tardes";
            } else {
                $saludo = "Buenas noches";
            }
           
        ?>
    <h3 class="h3" style="color: white; font-family: Arial, Helvetica, sans-serif;"><?php echo $saludo?></h3>
    <h2 class="h2">Bienvenido <?php echo $_SESSION['usuario']?></h2>
    
    <?php 
    $domain = $_SERVER['HTTP_HOST'];
    $scheme = $_SERVER['REQUEST_SCHEME'];
    $uri = $_SERVER['REQUEST_URI'];
    $uri = substr($uri, 0, -18); // Elimina los últimos 14 caracteres
    
    $newURL = $scheme . "://" . $domain . $uri;
    
    header("Refresh: 5; URL=" . $newURL);
   // sleep(3);
   // $url = "http://localhost/cursoPHP/examen/examenParcial2/ExamenParcial2/";
   // echo '<script>window.location="'.$url.'"</script>';  
    ?>


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
</section>

</body>
</html>