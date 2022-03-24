<?php
    $contador = $_POST["valor"];

    while ($contador <= 2000) {
        if ($contador % 11 == 2) {
            echo "Numeros: " . $contador;
        }
        $contador++;
        
    }


?>