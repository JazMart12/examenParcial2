<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <?php
        session_start();
        $clave = $_POST["codigo"];
        $usuario = $_SESSION["usuario"];
        $file = fopen("claves.txt","r");
        $band = 0; //para saber si la clave es correcta
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea); 
            $user = $aux[0];
            $contrasena = $aux[1];

            if ($user === $usuario && $contrasena === $clave) {
                $band = 1;
                break;
            }
        }
    }
    fclose($file);

    if($band == 0){
        $domain = $_SERVER['HTTP_HOST'];
        $scheme = $_SERVER['REQUEST_SCHEME'];
        $uri = $_SERVER['REQUEST_URI'];
        $uri = substr($uri,0,-17);
        $url =  $scheme . "://" . $domain. $uri;
        echo '<script>window.alert="Clave incorrecta"</script>';
       echo '<script>window.location="'.$url.'"</script>';
    }
   
    $preg1 = '<p> .¿Qué es un bucle?</p>';
    $preg2 = '<p> .¿Qué es la programación orientada a objetos (POO)?</p>';
    $preg3 = '<p> .¿Cuál es la función principal de una variable en programación?</p>';
    $preg4 = '<p> .¿Qué significa "DRY" en programación?</p>';
    $preg5 = '<p> .¿Cuál es el propósito principal de un array en programación?</p>';
    $preg6 = '<p> .¿Qué es la depuración en programación?</p>';
    $preg7 = '<p> .¿Qué es un algoritmo?</p>';
    $preg8 = '<p> .¿Qué es la recursividad en programación?</p>';
    $preg9 = '<p> .¿Cuál es el propósito de un IDE (Entorno de Desarrollo Integrado) en programación?</p>';
    $preg10 = '<p> .¿Qué es el versionado de código?</p>';

    $preguntas = array(0 => $preg1,1=>$preg2,2 =>$preg3,3=>$preg4,
    4=>$preg5,5=>$preg6,6=>$preg7,7=>$preg8,8=>$preg9,9=>$preg10);
    
    $respuestas = array(
        //Respuestas pregunta 1
        array('<input type="radio" name="q1" value="false">Una función en Python.<br>',
        '<input type="radio" name="q1" value="true">Una estructura de control que repite una serie de instrucciones.<br>',
        '<input type="radio" name="q1" value="false">Un tipo de variable en Java.<br>',
        '<input type="radio" name="q1" value="false">Un error en un programa.<br>'),
        //Respuestas pregunta 2
        array('<input type="radio" name="q2" value="false">Un lenguaje de programación.<br>',
        '<input type="radio" name="q2" value="true">Un paradigma de programación que utiliza objetos como componentes de software.<br>',
        '<input type="radio" name="q2" value="false">Un tipo de base de datos.<br>',
        '<input type="radio" name="q2" value="false">Un sistema operativo.<br>'),
        //Respuestas pregunta 3
        array('<input type="radio" name="q3" value="true">Almacenar datos temporales.<br>',
        '<input type="radio" name="q3" value="false">Imprimir texto en la pantalla.<br>',
        '<input type="radio" name="q3" value="false">Ejecutar una función.<br>',
        '<input type="radio" name="q3" value="false">Controlar el flujo de un programa.<br>'),
        //Respuestas pregunta 4
        array('<input type="radio" name="q4" value="false">No programar en días de lluvia.<br>',
        '<input type="radio" name="q4" value="true">Dont Repeat Yourself, un principio que promueve la reutilización de código.<br>',
        '<input type="radio" name="q4" value="false">Una herramienta de desarrollo web.<br>',
        '<input type="radio" name="q4" value="false">Una palabra clave en C++.<br>'),
        //Respuestas pregunta 5
        array('<input type="radio" name="q5" value="false">Almacenar una única variable.<br>',
        '<input type="radio" name="q5" value="false">Realizar operaciones matemáticas.<br>',
        '<input type="radio" name="q5" value="true">Almacenar múltiples valores del mismo tipo.<br>',
        '<input type="radio" name="q5" value="false">Controlar el flujo de un programa.<br>'),
        //Respuestas pregunta 6
        array('<input type="radio" name="q6" value="false">Un proceso de ocultar errores en el código.<br>',
        '<input type="radio" name="q6" value="false">Un proceso de eliminar el código innecesario.<br>',
        '<input type="radio" name="q6" value="true">Un proceso de encontrar y corregir errores en el código.<br>',
        '<input type="radio" name="q6" value="false">Un proceso de crear un nuevo programa.<br>'),
        //Respuestas pregunta 7
        array('<input type="radio" name="q7" value="false">Un error en un programa.<br>',
        '<input type="radio" name="q7" value="true">Un conjunto de instrucciones para resolver un problema.<br>',
        '<input type="radio" name="q7" value="false">Un lenguaje de programación.<br>',
        '<input type="radio" name="q7" value="false">Un sistema operativo.<br>'),
        //Respuestas pregunta 8
        array('<input type="radio" name="q8" value="false">Un tipo de error de lógica.<br>',
        '<input type="radio" name="q8" value="false">Un bucle que se ejecuta infinitamente.<br>', 
        '<input type="radio" name="q8" value="true">Un enfoque en el que una función se llama a sí misma para resolver un problema.<br>',
        '<input type="radio" name="q8" value="false">Una estructura de datos en Python.<br>'),
        //Respuesta pregunta 9
        array('<input type="radio" name="q9" value="false">Imprimir código en papel.<br>',
        '<input type="radio" name="q9" value="false">Ejecutar programas en un servidor.<br>',
        '<input type="radio" name="q9" value="true">Proporcionar herramientas para escribir, depurar y compilar código.<br>',
        '<input type="radio" name="q9" value="false">Controlar la velocidad de ejecución de un programa.<br>'),
        //Respuestas pregunta 10
        array('<input type="radio" name="q10" value="false">Un sistema de clasificación de lenguajes de programación.<br>',
        '<input type="radio" name="q10" value="false">Una técnica para ocultar el código fuente.<br>',
        '<input type="radio" name="q10" value="true">Un proceso de seguimiento de cambios en el código a lo largo del tiempo.<br>',
        '<input type="radio" name="q10" value="false">Un método para optimizar algoritmos.<br>')
    );
    ?>
    <h3>Examen de seleccion</h3>
    <h2></h2>
    <form method="post" action="resultados.php">
    <legend>Usuario: <?php echo $usuario?></legend>
        <?php

        $orden = array(1,2,3,4,5,6,7,8,9,0);
        shuffle($orden);
            for($i=0;$i<10;$i++){
                $posPregunta = $orden[$i];
                echo '<label for="">'.($i+1).$preguntas[$posPregunta] .'</label><br>';
                shuffle($respuestas[$posPregunta]);
                for($j=0;$j<4;$j++){
                    echo $respuestas[$posPregunta][$j];
                }
            }
        ?>

        <input type="submit" value="enviar">
    </form>
</body>
</html>