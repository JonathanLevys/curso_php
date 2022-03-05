<?php

    $num1 = $_POST["valor1"];
    $num2 = $_POST["valor2"];

    if ($num1 > $num2) {
        echo "maior" . $num1 . "<br>";
        echo "menor" . $num2 . "<br>";
    } else {
        echo "maior" . $num2 . "<br>";
        echo "menor" . $num1 . "<br>";
    }
?>