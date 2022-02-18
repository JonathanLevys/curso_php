<?php
$num1 = $_POST["valor1"];
$num2 = $_POST["valor2"];
$resultado = $num1 % $num2;

header("Location: form_resto.php?resultado=$resultado");
?>
