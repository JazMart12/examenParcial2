<?php


session_start();

 
$_SESSION['usuario']="";
session_destroy();
$domain = $_SERVER['HTTP_HOST'];
$scheme = $_SERVER['REQUEST_SCHEME'];
$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri,0,-15);// Elimina los últimos 15 caracteres
$url =  $scheme . "://" . $domain. $uri;
echo '<script>window.location="'.$url.'"</script>'; 
?>