<?php
    $media1 = $_POST["media1"];
    $media2 = $_POST["media2"];
    $media3 = $_POST["media3"];
    $media4 = $_POST["media4"];

    $resultado = 0;
    $resultado += $media1;
    $resultado += $media2;
    $resultado += $media3;
    $resultado += $media4;
    $resultado /= 2;

    echo "A media dos resultados: " . $resultado;

?>