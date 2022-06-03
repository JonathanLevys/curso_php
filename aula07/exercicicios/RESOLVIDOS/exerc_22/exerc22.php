<?php

    $a = $_POST["valor1"];
    $b = $_POST["valor2"];
    $c = $_POST["valor3"];
    
    if(($a < ($b + $c)) and ($b < ($a + $c)) and ($c < ($a + $b))) {
        echo "É um triangulo";
        if ($a == $b && $a == $c) {
            echo "Triângulo Equilátero: três lados iguais";
        } elseif ($a != $b && $a != $c) {
            echo "Triângulo Escaleno: três lados diferentes";
        } else {
            echo "Triângulo Isósceles: quaisquer dois lados iguais";
        }
    } else  {
        echo "Não é um triangulo";
    }