<?php

$nota1 = $_POST["valor1"];
$nota2 = $_POST["valor2"];

$media = ($nota1 + $nota2) / 2;


if ($media < 4) {
    echo " E";
} elseif ($media > 4 and $media < 6) {
    echo " D";
} elseif ($media > 6 and $media < 7.5) {
    echo "C";
} elseif ($media >7.5 and $media < 9) {
    echo "B";
} else {
    echo "A";
}

?>
     