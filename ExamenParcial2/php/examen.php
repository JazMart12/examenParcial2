<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirigir a la página de inicio de sesión
    exit();
}

// Verificar si el usuario ya completó el examen
if (isset($_SESSION['exam_completed']) && $_SESSION['exam_completed']) {
    echo "Ya has completado el examen.";
    exit();
}

// Configuración del examen (debes cargar las preguntas desde una base de datos)
$examen = [
    "titulo" => "Examen de Prueba",
    "fecha" => "29 de Octubre de 2023",
    "instrucciones" => "Responde a las siguientes 10 preguntas.",
    "puntaje_aprobatorio" => 70,
];

// Preguntas y respuestas simuladas (debes cargarlas desde una base de datos)
$preguntas = [
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es el río más largo del mundo?",
        "respuestas" => [
            ["texto" => "Nilo", "correcta" => true],
            ["texto" => "Amazonas", "correcta" => false],
            ["texto" => "Misisipi", "correcta" => false],
            ["texto" => "Yangtsé", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es el planeta más grande del sistema solar?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Júpiter", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    [
        "texto" => "¿Cuál es la capital de Francia?",
        "respuestas" => [
            ["texto" => "París", "correcta" => true],
            ["texto" => "Londres", "correcta" => false],
            ["texto" => "Madrid", "correcta" => false],
            ["texto" => "Berlín", "correcta" => false],
        ],
    ],
    // Agrega más preguntas aquí...
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar respuestas del examen
    $respuestas = $_POST;

    $puntaje = calcularPuntaje($respuestas, $preguntas);

    if ($puntaje >= $examen['puntaje_aprobatorio']) {
        echo "¡Felicidades! Has aprobado el examen con un puntaje de $puntaje.";
    } else {
        echo "Lo siento, no has aprobado el examen. Tu puntaje es $puntaje.";
    }

    // Marcar el examen como completado para este usuario
    $_SESSION['exam_completed'] = true;

    // Puedes almacenar el resultado en una base de datos aquí
}

// Función para calcular el puntaje del examen
function calcularPuntaje($respuestas, $preguntas) {
    $puntaje = 0;

    foreach ($preguntas as $indice => $pregunta) {
        $respuesta_usuario = $respuestas["q$indice"];
        if (isset($respuesta_usuario) && $respuesta_usuario === 'correcta') {
            $puntaje += 10; // Otorga 10 puntos por respuesta correcta
        }
    }

    return $puntaje;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $examen['titulo'] ?></title>
</head>
<body>
    <h1><?= $examen['titulo'] ?></h1>
    <p>Fecha: <?= $examen['fecha'] ?></p>
    <p><?= $examen['instrucciones'] ?></p>

    <form method="POST">
        <?php
        foreach ($preguntas as $indice => $pregunta) {
            shuffle($pregunta['respuestas']); // Mezcla las respuestas para que no estén siempre en el mismo orden
            echo "<p>Pregunta " . ($indice + 1) . ": {$pregunta['texto']}</p>";
            foreach ($pregunta['respuestas'] as $respuesta) {
                $valor = $respuesta['correcta'] ? 'correcta' : 'incorrecta';
                echo "<input type='radio' name='q$indice' value='$valor'> {$respuesta['texto']}<br>";
            }
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>