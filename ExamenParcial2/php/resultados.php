<?php 
    $tot = 0;
    //$resultados = array();
    for($k=1;$k<11;$k++){
        $cad = "q".$k;
        if(isset($_POST[$cad]) && $_POST[$cad] == "true")
            $tot++; 
    }
    echo '<h1>Calificacion = '.$tot.'</h1>';
    
?>