<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$resultado = $valor1 ** $valor2;

header("Location: form_expo.php?result=$resultado");

//falhou tbm.
?>