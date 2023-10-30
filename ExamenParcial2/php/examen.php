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



<h1 class="tit-exam">Examen de conocimientos</h1>

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

        if(!$band){
            echo '<script> window.alert("Por favor consigue tu clave de acceso rellenando el formulario");</script>';
            $domain = $_SERVER['HTTP_HOST'];
            $scheme = $_SERVER['REQUEST_SCHEME'];
            $uri = $_SERVER['REQUEST_URI'];
            $uri = substr($uri,0,-14);// Elimina los últimos 14 caracteres
            $url =  $scheme . "://" . $domain. $uri;
            echo '<script>window.location="'.$url.'"</script>'; 
            exit();
        }
    ?>
<h1>Examen de conocimientos</h1>

  <form class="exam">
    <ol>
      <li>
        <p>1. ¿Qué es un bucle?</p>
        <input type="radio" name="q1" value="A"> A) Una función en Python.<br>
        <input type="radio" name="q1" value="B"> B) Una estructura de control que repite una serie de instrucciones.<br>
        <input type="radio" name="q1" value="C"> C) Un tipo de variable en Java.<br>
        <input type="radio" name="q1" value="D"> D) Un error en un programa.<br>
      </li>
      <li>
        <p>2. ¿Qué es la programación orientada a objetos (POO)?</p>
        <input type="radio" name="q2" value="A"> A) Un lenguaje de programación.<br>
        <input type="radio" name="q2" value="B"> B) Un paradigma de programación que utiliza objetos como componentes de software.<br>
        <input type="radio" name="q2" value="C"> C) Un tipo de base de datos.<br>
        <input type="radio" name="q2" value="D"> D) Un sistema operativo.<br>
      </li>
      <li>
        <p>3.  ¿Cuál es la función principal de una variable en programación?</p>
        <input type="radio" name="q3" value="A"> A) Almacenar datos temporales.<br>
        <input type="radio" name="q3" value="B"> B) Imprimir texto en la pantalla.<br>
        <input type="radio" name="q3" value="C"> C) Ejecutar una función.<br>
        <input type="radio" name="q3" value="D"> D) Controlar el flujo de un programa.<br>
      </li>
      <li>
        <p>4.  ¿Qué significa "DRY" en programación?</p>
        <input type="radio" name="q4" value="A"> A)	No programar en días de lluvia.<br>
        <input type="radio" name="q4" value="B"> B)	"Don't Repeat Yourself", un principio que promueve la reutilización de código.<br>
        <input type="radio" name="q4" value="C"> C)	Una herramienta de desarrollo web.<br>
        <input type="radio" name="q4" value="D"> D)	Una palabra clave en C++.<br>
      </li>
      <li>
        <p>5. ¿Cuál es el propósito principal de un array en programación?</p>
        <input type="radio" name="q5" value="A"> A)	Almacenar una única variable.<br>
        <input type="radio" name="q5" value="B"> B)	Realizar operaciones matemáticas.<br>
        <input type="radio" name="q5" value="C"> C)	Almacenar múltiples valores del mismo tipo.<br>
        <input type="radio" name="q5" value="D"> D)	Controlar el flujo de un programa.<br>
      </li>
      <li>
        <p>6. ¿Qué es la depuración en programación?</p>
        <input type="radio" name="q6" value="A"> A)	Un proceso de ocultar errores en el código.<br>
        <input type="radio" name="q6" value="B"> B)	Un proceso de eliminar el código innecesario.<br>
        <input type="radio" name="q6" value="C"> C)	Un proceso de encontrar y corregir errores en el código.<br>
        <input type="radio" name="q6" value="D"> D)	Un proceso de crear un nuevo programa.<br>
      </li>
      <li>
        <p>7. ¿Qué es un algoritmo?</p>
        <input type="radio" name="q7" value="A"> A)	Un error en un programa.<br>
        <input type="radio" name="q7" value="B"> B)	Un conjunto de instrucciones para resolver un problema.<br>
        <input type="radio" name="q7" value="C"> C)	Un lenguaje de programación.<br>
        <input type="radio" name="q7" value="D"> D)	Un sistema operativo.<br>
      </li>
      <li>
        <p>8. ¿Qué es la recursividad en programación?</p>
        <input type="radio" name="q8" value="A"> A)	Un tipo de error de lógica.<br>
        <input type="radio" name="q8" value="B"> B)	Un bucle que se ejecuta infinitamente.<br>
        <input type="radio" name="q8" value="C"> C)	Un enfoque en el que una función se llama a sí misma para resolver un problema.<br>
        <input type="radio" name="q8" value="D"> D)	Una estructura de datos en Python.<br>
      </li>
      <li>
        <p>9. ¿Cuál es el propósito de un IDE (Entorno de Desarrollo Integrado) en programación?</p>
        <input type="radio" name="q9" value="A"> A)	Imprimir código en papel.<br>
        <input type="radio" name="q9" value="B"> B)	Ejecutar programas en un servidor.<br>
        <input type="radio" name="q9" value="C"> C)	Proporcionar herramientas para escribir, depurar y compilar código.<br>
        <input type="radio" name="q9" value="D"> D)	Controlar la velocidad de ejecución de un programa.<br>
      </li>
      <li>
        <p>10. ¿?</p>
        <input type="radio" name="q10" value="A"> A)	Un sistema de clasificación de lenguajes de programación.<br>
        <input type="radio" name="q10" value="B"> B)	Una técnica para ocultar el código fuente.<br>
        <input type="radio" name="q10" value="C"> C)	Un proceso de seguimiento de cambios en el código a lo largo del tiempo.<br>
        <input type="radio" name="q10" value="D"> D)	Un método para optimizar algoritmos.<br>
      </li>
    </ol>
    <button type="submit">Enviar Respuestas</button>
  </form>



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