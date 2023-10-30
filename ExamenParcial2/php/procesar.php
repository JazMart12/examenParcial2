<?php 

    require('fpdf.php');
    session_start();
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

    $lenguajesSeleccionados = array();
    
    if (isset($_POST["lenguajes"])) {
        $lenguajesSeleccionados = $_POST["lenguajes"];
        // $lenguajesSeleccionados es un array que contiene los valores seleccionados
    } else {
        $lenguajesSeleccionados[] = "No se seleccionaron lenguajes";
    }
    
    if(isset($_FILES["file"]) && !(empty($_FILES["file"]["tmp_name"]))){
        $targetDir = "imagenes/";  // Directorio donde se guardarán las imágenes
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        // Verificar si el archivo es una imagen real
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) { ?>
                        <script> window.alert(   <?php echo htmlspecialchars(basename($_FILES["file"]["name"]));?> "se a subido correctamente"   );</script>;                
            <?php
            } else {
                echo '<script> window.alert("Error al subit);</script>';
            }
        } 
    }

    class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Code Crafters','C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
date_default_timezone_set('America/Mexico_City');

// Obtiene la fecha actual en la zona horaria de México
$fechaActual = date("Y-m-d H:i:s"); // Formato: Año-Mes-Día Hora:Minuto:Segundo
// Creación del objeto de la clase heredada
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(90,25,"Fecha: $fechaActual",0,1);
$pdf->Cell(40,5,'Datos del Usuario:',0,1);
$pdf->SetFont('Arial','',12);

$pdf->Cell(40,10,"Nombre: $nombre",0,1);
$pdf->Cell(40,10,"Apellido Paterno: $apellido1",0,1);
$pdf->Cell(40,10,"Apellido Materno: $apellido2",0,1);
$pdf->Cell(40,10,"Fecha de nacimiento:",0,1);
$pdf->Cell(40,10,"Dia: $dia     Mes: $mes   Anio: $anio",0,1);

$pdf->Cell(40,10,"Correo electronico: $correo",0,1);
$pdf->Cell(40,10,"Telefono: $telefono",0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,"Habla ingles:",0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,"$ingles",0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,"Disponible para viajar:",0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,"$viajar",0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,"Puesto al que aplica:",0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,"$puesto",0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,"Lenguajes y/o frameworks que maneja:",0,1);

$pdf->SetFont('Arial','',12);
for($i=0;$i<sizeof($lenguajesSeleccionados);$i++){
    $pdf->Cell(40,10,"$lenguajesSeleccionados[$i]",0,1);
}
function generarClaveAleatoria($longitud) {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
    $clave = '';
    $caracteresLength = strlen($caracteres);

    for ($i = 0; $i < $longitud; $i++) {
        $clave .= $caracteres[rand(0, $caracteresLength - 1)];
    }

    return $clave;
}

$claveAleatoria = generarClaveAleatoria(8);
$pdf->Cell(60,55,"Tu clave: $claveAleatoria",0,1);

$usuario = $_SESSION["usuario"];
$file = fopen("claves.txt","a+");
fwrite($file, $usuario." ".$claveAleatoria."\r\n");
fclose($file);

$pdf->Image("imagenes/firma.jpg",20,230,33);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(60,55,"Firma del director ejecutivo",0);
$pdf->Cell(40,15,"Director Carlos C.  Martinez",0);
$pdf->Output();
?>