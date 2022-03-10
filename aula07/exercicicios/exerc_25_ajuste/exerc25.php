<?php

$litro = $_POST["litros"];
$gasolina = $_POST["G"];
$alcool = $_POST["A"];
$preco = 0;

if ($gasolina == "G") {
    echo ($preco = $litros * 2.50);
}   if ($litros <= 20) {
        echo ($preco -= 2.50 * $litros * 4 / 100);
}    else {
       echo ($preco -= 2.50 * $litros * 6 / 100);  
       
} if ($alcool == "A") {
     echo ($preco = $litros * 1.90);
}    if ($litros <= 20) {
        echo ($preco -= 1.90 * $litros * 3 / 100);
}   else {
        echo ($preco -= 1.90 * $litros * 5 / 100);
}
?>