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
        echo "El usuario y/o contraseña ya existen en el archivo";

    }else{
        fwrite($file, $usuario." ".$contra."\r\n");
    }
    fclose($file);
    $url = "http://localhost/cursoPHP/examen/examenParcial2/ExamenParcial2/";
    echo '<script>window.location="'.$url.'"</script>';
    echo "<br><a href='formulario.php'>regresar</a>";
    exit();
    
?>
</div>
</body>

