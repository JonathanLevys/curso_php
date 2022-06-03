<?php
    $raio = $_POST["raio"];
    $diametro = 2 * $raio;
    const PI = 3.14;
    $comprimento = 2 * PI * $raio;
        echo $diametro . "diametro" . "<br>";
        echo $comprimento . "comprimento" . "<br>";