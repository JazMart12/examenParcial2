<?php
ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente
require '../index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Login</title>
    
</head>

<body>

    <?php

    $usuario = $_POST["usuario"];
    $password = $_POST["pass"];


    $file = fopen("contras.txt", "r");
    $band = 0; //para saber si la cuenta y contrasena estan en el archivo
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea); 
            $user = $aux[0];
            $contrasena = $aux[1];

            if ($user === $usuario && $contrasena === $password) {
                $band = 1;
                break;
            }
        }
    }
    fclose($file);

    # Luego de haber obtenido los valores, ya podemos comprobar:
    if ($band == 1) {

        session_start();
        $_SESSION["usuario"] = $usuario;

       $url = "http://localhost/cursophp/examenParcial2/ExamenParcial2/php/bienvenida.php";

        $domain = $_SERVER['HTTP_HOST'];
        $scheme = $_SERVER['REQUEST_SCHEME'];
        $uri = $_SERVER['REQUEST_URI'];
        $uri = substr($uri,0,-14);
        $url =  $scheme . "://" . $domain. $uri. "/php/bienvenida.php";

       echo '<script>window.location="'.$url.'"</script>';
       exit();        
    } else {
        # No coinciden, asi  que simplemente imprimimos un
        # mensaje diciendo que es incorrecto
         
        echo '<script> window.alert("Usuario y/o contraseña incorrecto");</script>';
        //sleep(3);

        $url = "http://localhost/cursophp/examenParcial2/ExamenParcial2/index.php";

        $domain = $_SERVER['HTTP_HOST'];
        $scheme = $_SERVER['REQUEST_SCHEME'];
        $uri = $_SERVER['REQUEST_URI'];
        $uri = substr($uri,0,-14);// Elimina los últimos 14 caracteres
        $url =  $scheme . "://" . $domain. $uri;
        echo '<script>window.location="'.$url.'"</script>'; 
        exit(); 
        

    }

    ?>