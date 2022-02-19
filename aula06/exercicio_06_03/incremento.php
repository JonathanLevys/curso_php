<?php
$num1 = 1;
$num2 = 2;

$resposta = ++$num1 + $num2;

header("Location: form_increm.php?result=$resposta");
?>