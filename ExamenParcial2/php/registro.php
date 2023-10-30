<body>
    

<?php
 
require '../index.php';

?>
<div style="margin:100px;">
<?php
     
 
    $usuario = $_POST["usser"];
    $correo = $_POST["mail"];
    $contra = $_POST["contra"];
    $fileContent = file_get_contents("contras.txt"); //leer el contenido del archivo

    $file = fopen("contras.txt","a+");
    if (strpos($fileContent, $usuario) !== false || strpos($fileContent, $contra) !== false) {
        echo '<script> window.alert("El usuario y/o la contraseña ya existen en el archivo");</script>';
    }else{
        fwrite($file, $usuario." ".$contra."\r\n");
    }
    fclose($file);
    $domain = $_SERVER['HTTP_HOST'];
    $scheme = $_SERVER['REQUEST_SCHEME'];
    $uri = $_SERVER['REQUEST_URI'];
    $uri = substr($uri,0,-13);// Elimina los últimos 14 caracteres
    $url =  $scheme . "://" . $domain. $uri;
    echo '<script>window.location="'.$url.'"</script>';
    //echo "<br><a href='formulario.php'>regresar</a>";
    exit();
    
?>
</div>
</body>

