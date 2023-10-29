<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Formulario</title>
</head>
<body>
    <?php
    // Verifica si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];

        // Puedes procesar los datos como lo desees, por ejemplo, enviar un correo electrónico o guardar en una base de datos.

        // En este ejemplo, simplemente mostraremos un mensaje de agradecimiento con los datos recibidos.
        echo "<h2>¡Gracias por contactarnos, $nombre!</h2>";
        echo "<p>Tu correo ($correo) y teléfono ($telefono) han sido registrados.</p>";
        echo "<p>Recibimos el siguiente mensaje de tu parte:</p>";
        echo "<p>$mensaje</p>";
    } else {
        // Si no se enviaron datos del formulario, muestra un mensaje de error o redirecciona al formulario.
        echo "<h2>Error: No se han recibido datos del formulario.</h2>";
    }
    ?>
</body>
</html>
