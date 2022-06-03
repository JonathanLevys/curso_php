<?php

$num1 = $_POST["valor1"];
$num2 = $_POST["valor2"];
$num3 = $_POST["valor3"];

    if ($num1 > $num2 and $num1 > $num3) {
        echo $num1;
    }    elseif ($num2 > $num1 and $num2 > $num3) {
            echo $num2;
    }    elseif ($num3 > $num1 and $num3 > $num2) {
            echo $num3;
    }