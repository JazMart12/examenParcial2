<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
ob_start();
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"];
?>
<?php 
    require('fpdf.php');
    //session_start();
     $nombre = $_SESSION["nombre"];
     $apellido1 = $_SESSION["apellido1"];
     $apellido2 = $_SESSION["apellido2"];
     $dia = $_SESSION["dia"];
     $mes = $_SESSION["mes"];
     $anio = $_SESSION["anio"];
     $correo = $_SESSION["correo"];
     $telefono = $_SESSION["telefono"];
     $imagen = $_SESSION["imagen"];
     $lenguajesSeleccionados = $_SESSION["lenguajes"];
     $ingles = $_SESSION["ingles"];
     $viajar = $_SESSION["viajar"];
     $puesto = $_SESSION["puesto"];
    

     function generarClaveAleatoria($longitud) {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
        $clave = '';
        $caracteresLength = strlen($caracteres);
    
        for ($i = 0; $i < $longitud; $i++) {
            $clave .= $caracteres[rand(0, $caracteresLength - 1)];
        }
    
        return $clave;
    }
    date_default_timezone_set('America/Mexico_City');
    $claveAleatoria = generarClaveAleatoria(8);
$ban = 1;
$usuario = $_SESSION["usuario"];

$file = fopen("claves.txt","a+");
$fileContent = file_get_contents("claves.txt");

 if (strpos($fileContent, $usuario) !== false){//ya existe un usuario con clave
        $ban = 0;
        $claveAleatoria = "El usuario ya tiene una clave";
 }
if($ban !== 0){
    fwrite($file, $usuario." ".$claveAleatoria."\r\n");
    }
    
   fclose($file);
    $file3 = fopen("correos.txt","a+");

    fwrite($file3,$usuario." ".$correo."\r\n");
    fclose($file3);

// Obtiene la fecha actual en la zona horaria de México
$fechaActual = date("Y-m-d H:i:s"); // Formato: Año-Mes-Día Hora:Minuto:Segundo
$pdf = new FPDF();
$pdf->AddPage();

// Logo
$pdf->Image('image/logo.jpg', 10, 10, 40);
// Configura el encabezado del documento
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Datos del Candidato', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 14);
$pdf->Ln(20);

$pdf->SetLineWidth(0.8);
$pdf->Line(10, $pdf->GetY(), 270, $pdf->GetY());
$pdf->SetLineWidth(0.2);
// Agregar la imagen al PDF
$imagePath = $imagen;
$x = 10;  // Coordenada X de la imagen
$y = 70; // Coordenada Y de la imagen
$width = 50; // Ancho de la imagen en el PDF
$height = 0; // Altura de la imagen en el PDF (0 para mantener la proporción original)

$pdf->Image($imagen, $x, $y, $width, $height);


$date = date('d/m/Y');

$text = "En la fecha, $date, el usuario con datos: $nombre $apellido1 $apellido2 esta solicitandoel puesto de $puesto en nuestra empresa.

Datos generales del solicitante: 
Telefono: $telefono 
Fecha de nacimiento: $dia de $mes de $anio.";

$text2 = "Lenguajes y/o frameworks que maneja: $lenguajesSeleccionados. 
Dispuesto a viajar: $viajar. 

Habla ingles: $ingles.";

$pdf->SetXY(70, 70);
$pdf->SetFont('Arial', '', 12,  'ISO-8859-1');
$pdf->MultiCell(0, 10, $text);

$pdf->SetXY(10, 140);
$pdf->MultiCell(0, 10, $text2);
$pdf->Cell(0, 10, "Clave generada: {$claveAleatoria}", 0, 1);



// Salto de línea
$pdf->Ln(10);

$logoWidth = 50;
$pdf->SetY(-45);
$pdf->SetFont('Arial', '', 12);
$pdf->Image('image/firma.jpg', 80, 240, $logoWidth);
$pdf->Cell(0, 10, '____________________________', 0, 1, 'C');
$pdf->Cell(0, 10, 'Director Carlos C. Contreras', 0, 1, 'C');

// Guarda y muestra el PDF
$pdf->Output('D', 'datos_usuario.pdf');
exit;

?>
