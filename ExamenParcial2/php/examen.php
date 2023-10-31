<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haz tu examen</title>
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../../imagenes/logo-ConvertImage.ico">
    <style>
        .tit-exam{
            font-weight: 800;
            color: #64f4ac;
            padding-bottom: 15px;
            text-align: center;
        }
        .form-group{
            padding-top: 100px;
            text-align: center;

        }
        label{
            color: white;

        }
        #footer{
            padding-top: 30px;
        }
        .input-form{

        }

    </style>
  
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



<h1 class="tit-exam">Exámen de conocimientos</h1>

    <?php
        session_start();
        $usuario = $_SESSION["usuario"];    
        $clave = "";
        $file = fopen("claves.txt", "r");
        $band = 0; //para saber si la cuenta y contrasena estan en el archivo
        while (!feof($file)) {
            $linea = fgets($file);
            if ($linea != "") {
                $aux = preg_split("/[\s,]+/", $linea); 
                $user = $aux[0];
                $aux = $aux[1];
                if ($user === $usuario) {
                    $clave = $aux;
                    $band = 1;
                    break;
                }
            }
        }
        fclose($file);

        if($band==0){
            echo '<script> window.alert("Por favor consigue tu clave de acceso rellenando el formulario");</script>';
            $domain = $_SERVER['HTTP_HOST'];
            $scheme = $_SERVER['REQUEST_SCHEME'];
            $uri = $_SERVER['REQUEST_URI'];
            $uri = substr($uri,0,-14);// Elimina los últimos 14 caracteres
            $url =  $scheme . "://" . $domain. $uri;
            echo '<script>window.location="'.$url.'"</script>'; 
            exit();
        }

        $file2 = fopen("examen.txt", "r");
        $band2 = 0; //para saber si el usuario ya hizo el examen
        while (!feof($file2)) {
            $linea = fgets($file2);
            if ($linea != "") {
                $aux = preg_split("/[\s,]+/", $linea); 
                $existe = $aux[0];
                if ($existe === $usuario) {
                    $band2 = 1;
                    break;
                }
            }
        }
        fclose($file2);
        if($band2==1){
            echo '<script> window.alert("El usuario ya realizo el examen");</script>';
            $domain = $_SERVER['HTTP_HOST'];
            $scheme = $_SERVER['REQUEST_SCHEME'];
            $uri = $_SERVER['REQUEST_URI'];
            $uri = substr($uri,0,-14);// Elimina los últimos 14 caracteres
            $url =  $scheme . "://" . $domain. $uri;
            echo '<script>window.location="'.$url.'"</script>'; 
            exit();
        }
    ?>

    <form action="preguntas.php" method="post">
        <div class="form-group">
            <label for="codigo">Ingresa tu codigo:</label>
            <input type="text" class="input-form" require name="codigo" id="codigo"><br>
            <br>
            <br>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
    </form>
<br>
<br>
<br>
<br>
<br>
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