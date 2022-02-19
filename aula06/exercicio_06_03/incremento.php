<?php
$num1=2;
$num2=1;

$resposta= --$num1 + $num2;

header("Location: form_increm.php?result=$resposta");
?>