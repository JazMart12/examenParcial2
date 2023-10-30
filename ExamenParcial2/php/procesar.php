<?php 

    require('fpdf.php');

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
        $targetDir = "uploads/";  // Directorio donde se guardarán las imágenes
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
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
    $this->Cell(30,10,'Code Crafters',1,0,'C');
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

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Output();
?>