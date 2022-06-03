<?php
    $x = $_POST["num1"];
    $contador = 1;

    while ($contador <= 10) {
        echo   $x."+" . $contador . " = " . ($x+$contador) . "<br>";
        $contador++;
    }


?>