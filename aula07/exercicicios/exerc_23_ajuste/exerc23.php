<?php

    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $c = $_POST["num3"];

    if ($a == 0) {
        echo "A equação não é de 2° grau";
    } else {
        $delta = ($b * $b) - 4 * $a * $c;
        if ($delta == 0) {
            $raiz1 = (-$b + sqrt ($delta))/ (2*$a);
            echo "Delta deu zero";
            echo "As raizes serao iguais a : %.2f" . $raiz1;
        } else {
            if ($delta < 0) {
                echo "O delta é negativo";
                echo "Não existe raiz reais";
            } else {
                $raiz1 = (-$b + sqrt ($delta))/ (2*$a);
                $raiz2 = (-$b + sqrt ($delta))/ (2*$a);
                echo "Delta é maior que zero";
                echo "A primweira raiz eh igual a: %.2f". $raiz1;
                echo "A segunda raiz eh igual a: %.2f" . $raiz2;
            }
        }    
    }

?>