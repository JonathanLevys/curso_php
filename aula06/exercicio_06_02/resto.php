<?php

$Valor1 = $_POST['valor1'];
$Valor2 = $_POST['valor2'];
$resultado = $Valor1 % $Valor2;
header("Location: form_resto.php?result=$resultado");

?>
