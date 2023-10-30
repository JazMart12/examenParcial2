<head>
    <title>Subir imagen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body style="margin:50px;width: 30%;">


    <?php
     session_start();
     $_SESSION["nombre"] = $_POST["nombre"];
     $_SESSION["apellido1"] = $_POST["apellido1"];
     $_SESSION["apellido2"] = $_POST["apellido2"];
     $_SESSION["dia"] = $_POST["dia"];
     $_SESSION["mes"] = $_POST["mes"];
     $_SESSION["anio"] = $_POST["anio"];
     $_SESSION["correo"] = $_POST["correo"];
     $_SESSION["telefono"] = $_POST["telefono"];
 
     
 
     if(isset($_POST["ingles"])){
         $_SESSION["ingles"] = $_POST["ingles"];
     }else $_SESSION["ingles"] = "Sin contestar";
 
     if(isset($_POST["viajar"])){
         $_SESSION["viajar"] = $_POST["viajar"];
     }else $_SESSION["viajar"] = "Sin contestar";
 
     $_SESSION["puesto"] = $_POST["puesto"];
 
     $lenguajesSeleccionados = array();
     
     if (isset($_POST["lenguajes"])) {
         $lenguajesSeleccionados = $_POST["lenguajes"];
         // $lenguajesSeleccionados es un array que contiene los valores seleccionados
     } else {
         $lenguajesSeleccionados[] = "No se seleccionaron lenguajes";
     }
     $lenguajes ="";
     for($i=0;$i<sizeof($lenguajesSeleccionados);$i++){
         $lenguajes .= $lenguajesSeleccionados[$i].", ";
     }
     $_SESSION["lenguajes"] = $lenguajes;

    if (isset($_FILES["file"]) && !(empty($_FILES["file"]["tmp_name"]))) {
        $targetDir = "image/";  // Directorio donde se guardarán las imágenes
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        // Verificar si el archivo es una imagen real
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) { ?>
            
                <div class="alert alert-success" role="alert">
                    <strong>El archivo </strong> <?php echo htmlspecialchars(basename($_FILES["file"]["name"]));   ?> se ha subido correctamente.
                </div>

                <?php
                   $domain = $_SERVER['HTTP_HOST'];
                   $scheme = $_SERVER['REQUEST_SCHEME'];
                   $uri = $_SERVER['REQUEST_URI'];
                   $uri = substr($uri, 0, -17); // Elimina los últimos 14 caracteres
                   $_SESSION["imagen"] = $targetFile;
                   $newURL = $scheme . "://" . $domain . $uri;
                   
                   header("Refresh: 3; URL=" . $newURL."/php/generarPDF.php");
                   exit();
                ?>

            <?php
            } else {
                echo "Hubo un problema al subir el archivo.";
                exit();
            }
        } else { ?>

            <div class="alert alert-warning" role="alert">
                <strong>El archivo </strong> no es una imagen válida.
            </div>

        <?php
        }
    } else { ?>
        <div class="alert alert-danger" role="alert">
            <strong>No se ha enviado ningún archivo.</strong>
        </div>
    <?php
    }
    ?>
</body>
