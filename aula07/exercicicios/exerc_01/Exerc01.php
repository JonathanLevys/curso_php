<?php

$num1 = $_POST["VALOR1"];
$num2 = $_POST["VALOR2"]; 

if ($num1 > $num2) {
    echo "ESTE VALOR É MAIOR " . $num1 ;
} else {
    echo "ESTE VALOR É MAIOR " . $num2 ;
}
?>