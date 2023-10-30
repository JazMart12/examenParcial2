<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'PHPMailer.php';
    require 'SMTP.php';

    session_start();
    $usuario = $_SESSION["usuario"];
    $tot = 0;
    //$resultados = array();
    for($k=1;$k<11;$k++){
        $cad = "q".$k;
        if(isset($_POST[$cad]) && $_POST[$cad] == "true")
            $tot++; 
    }
    if($tot <= 6){
        $mensaje = "Lamentamos informarle que su resoltado no fue suficiente";
        echo '<h1>Reprobaste</h1>';    
    }else{
        $mensaje = "Felicidades, aprobaste el examen, en la brevedad nos contactaremos contigo";
        echo '<h1>Aprobaste</h1>';
    }
    echo '<h2>Calificacion = '.$tot.'</h2>';

    $file = fopen("correos.txt","r");
    $band = 0; //para saber si la cuenta esta en el archivo
    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea); 
            $user = $aux[0];
            $correo = $aux[1];

            if ($user === $usuario) {
                $band = 1;
                break;
            }
        }
    }
    fclose($file);
    //Enviar resultado al correo
    $asunto = "Resultados Examen";
    
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Dokkabaelol69@outlook.com';
        $mail->Password = 'Dokkabae69';
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Port = 587;

        $mail->setFrom('Dokkabaelol69@outlook.com');
        $mail->addAddress($correo);

        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        $mail->send();
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
    }
?>