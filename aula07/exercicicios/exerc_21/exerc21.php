<?php

$nota1 = $_POST["valor1"];
$nota2 = $_POST["valor2"];

$media = ($nota1 + $nota2) / 2;


if ($media < 4) {
    echo " E " . "REPROVADO";
} elseif ($media > 4 and $media < 6) {
    echo " D " . "REPROVADO";
} elseif ($media > 6 and $media < 7.5) {
    echo "C " . "APROVADO";
} elseif ($media >7.5 and $media < 9) {
    echo "B " . "APROVADO";
} else {
    echo " A " . "APROVADO";
}

?>
     