<?php

    $valor1 = $_POST["valor"];
    $resultado = $valor1 % 2;

    if ($resultado == 0) {
        echo "O resultado é par.";
    } else {
        echo "O valor é impar.";
    }