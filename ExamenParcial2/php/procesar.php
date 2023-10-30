<?php 
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    if(isset($_POST["ingles"])){
        $ingles = $_POST["ingles"];
    }else $ingles = "Sin contestar";

    if(isset($_POST["viajar"])){
        $viajar = $_POST["viajar"];
    }else $viajar = "Sin contestar";
    $puesto = $_POST["puesto"];

    $lenguajes = array();
    
    
?>