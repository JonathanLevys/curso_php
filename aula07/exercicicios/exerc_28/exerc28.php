<?php

$salario = $_POST["salario"];
$descontos = 0;

echo "salário bruto: "  . $salario . "<br>";

if ($salario > 900 and $salario <= 1500) {
        echo "( - ) IR (5%): " . $salario * 0.05 . "<br>";
    $descontos += $salario * 0.05;
        echo "( - ) INSS ( 10% ):  " . $salario *0.10 . "<br>";
    $descontos += $salario * 0.1;
        echo "FGTS ( 11% ): " . $salario * 0.11 . "<br>";
    $descontos += $salario * 0.11;
        echo "descontos: " . $descontos . "<br>";
        echo "Salário Líquido: " . $salario - $descontos . "<br>";
} elseif ($salario > 1500  and $salario <= 2500) {
        echo  "( - ) IR (5%): " . $salario * 0.1 . "<br>";
    $descontos += $salario * 0.1;
        echo "( - ) INSS ( 10% ):  " . $salario *0.10 . "<br>";
    $descontos += $salario * 0.1;
        echo "FGTS ( 11% ): " . $salario * 0.11 . "<br>";
    $descontos += $salario * 0.11;
        echo "descontos: " . $descontos . "<br>";
        echo "Salário Líquido: " . $salario - $descontos . "<br>";
} elseif ($salario > 2500) {
        echo  "( - ) IR (5%): " . $salario * 0.2 . "<br>";
    $descontos += $salario * 0.2;
        echo "( - ) INSS ( 10% ):  " . $salario *0.10 . "<br>";
    $descontos += $salario * 0.1;
        echo "FGTS ( 11% ): " . $salario * 0.11 . "<br>";
    $descontos += $salario * 0.11;
        echo "descontos: " . $descontos . "<br>";
        echo "Salário Líquido: " . ($salario -$descontos ) . "<br>";
}

?>