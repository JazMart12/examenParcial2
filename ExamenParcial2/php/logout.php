<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
ob_start();
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"];
?>
<?php


//session_start();

 
    $_SESSION['usuario']="";
    $_SESSION["nombre"]="";
    $_SESSION["apellido1"]="";
     $_SESSION["apellido2"]="";
    $_SESSION["dia"]="";
    $_SESSION["mes"]="";
    $_SESSION["anio"]="";
    $_SESSION["correo"]="";
    $_SESSION["telefono"]="";
     $_SESSION["imagen"]="";
    $_SESSION["lenguajes"]="";
     $_SESSION["ingles"]="";
    $_SESSION["viajar"]="";
    $_SESSION["puesto"]="";
    
session_destroy();
$domain = $_SERVER['HTTP_HOST'];
$scheme = $_SERVER['REQUEST_SCHEME'];
$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri,0,-15);// Elimina los últimos 15 caracteres
$url =  $scheme . "://" . $domain. $uri;
echo '<script>window.location="'.$url.'"</script>'; 
?>