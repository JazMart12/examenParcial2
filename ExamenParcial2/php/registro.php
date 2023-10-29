<body>
    

<?php
 
require '../index.php';

?>
<div style="margin:100px;">
<?php
     
 
    $usuario = $_POST["usser"];
    $correo = $_POST["mail"];
    $contra = $_POST["contra"];
     
    $file = fopen("contras.txt","a+");
     
    fwrite($file, $usuario." ".$contra."\r\n");
    
    fclose($file);
    $url = "http://localhost/cursoPHP/examen/examenParcial2/ExamenParcial2/";
    echo '<script>window.location="'.$url.'"</script>';
    echo "<br><a href='formulario.php'>regresar</a>";
?>
</div>
</body>

