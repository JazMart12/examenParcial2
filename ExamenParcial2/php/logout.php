<?php


session_start();

 
$_SESSION['usuario']="";
session_destroy();

$url = "http://localhost/cursoPHP/examen/examenParcial2/ExamenParcial2/";
echo '<script>window.location="'.$url.'"</script>'; 
?>