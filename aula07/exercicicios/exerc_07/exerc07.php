<?php

    $num1 = $_POST["valor1"];
    $num2 = $_POST["valor2"];
    $num3 = $_POST["valor3"];
    
    if ($num1 > $num2 && $num1 > $num3) {
        echo  $num1 . " = " . "MAIOR" . "<br>";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo  $num2 . " = " . "MAIOR" . "<br>";
    } else  {
        echo  $num3 . " = " . "MAIOR" . "<br>";
    }

    if ($num1 < $num2 && $num1 < $num3) {
        echo $num1 . " = " . "MENOR" . "<br>";
    } elseif ($num2 < $num1 && $num2 < $num3) {
        echo $num2 . " = " . "MENOR" . "<br>";
    } else {
        echo $num3 . " = " . "MENOR" . "<br>";
    }
         
?>