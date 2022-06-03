<?php

$salario = $_POST["salario"];

$salarioAnterior = $salario;

if ($salario <= 280) { 
    $salario = $salario * 1.2;
    echo "Percentual de aumento: ", "20%" . "<br>";
    echo "Valor do aumento: ", $salario * 0.2 . "<br>";
    echo "Salario antes do aumento:  $salarioAnterior" . "<br>";
    echo "Salario após o aumento:  $salario" . "<br>";
} elseif ($salario > 280 and $salario < 700) {
    $salario = $salario * 1.15;
    echo "Percentual de aumento: ", "15%" . "<br>";
    echo "Valor do aumento: ", $salario * 0.15 . "<br>";
    echo "Salario antes do aumento:  $salarioAnterior" . "<br>";
    echo "Salario após o aumento:  $salario" . "<br>";
} elseif ($salario >= 700 and $salario < 1500) {
    $salario = $salario * 1.1;
    echo "Percentual de aumento: ", "10%" . "<br>";
    echo "Valor do aumento: ", $salario * 0.1 . "<br>";
    echo "Salario antes do aumento:  $salarioAnterior" . "<br>";
    echo "Salario após o aumento:  $salario" . "<br>";
} elseif ($salario >= 1500) {
    $salario = $salario * 1.05;
    echo "Percentual de aumento: ", "5%" . "<br>";
    echo "Valor do aumento: ", $salario * 0.05 . "<br>";
    echo "Salario antes do aumento:  $salarioAnterior" . "<br>";
    echo "Salario após o aumento:  $salario" . "<br>";
}
?>