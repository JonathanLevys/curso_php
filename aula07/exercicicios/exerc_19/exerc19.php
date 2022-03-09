<?php

$num1 = $_POST["valor1"];
$num2 = $_POST["valor2"];
$num3 = $_POST["valor3"];

$menor = 0;
$maior = 0;

    if ($num1 > $num2 and $num1 > $num3) {
        echo $maior = $num1 . "<br>";
    }    elseif ($num2 > $num1 and $num2 > $num3) {
            echo $maior = $num2 . "<br>";
    }    elseif ($num3 > $num1 and $num3 > $num2) {
            echo $maior = $num3 . "<br>";
    }

    if ($num1 < $num2 and $num1 < $num3) {
        echo $menor = $num1 . "<br>";
    }    elseif ($num2 < $num1 and $num2 < $num3) {
            echo $menor = $num2 . "<br>";
    }    elseif ($num3 < $num1 and $num3 < $num2) {
            echo $menor = $num3 . "<br>";
    }

     