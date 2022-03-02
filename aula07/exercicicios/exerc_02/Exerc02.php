<?php

$numero1 = $_POST["VALOR1"] ;
 

if ($numero1 > 0) {
    echo "POSITIVO <br>";
} else if ($numero1 < 0) {
    echo "NEGATIVO <br>";
} else {
    echo "NEUTRO";
}
?>