<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $resultado = $valor1 % $valor2;
    
// tarefa nao foi concluida.
header("Location: form_resto.php?resultado=$resultado");
//Notice: Undefined index: valor1 in C:\xampp\htdocs\curso_php\aula06\exercicio_06_02\resto.php on line 2

//Notice: Undefined index: valor2 in C:\xampp\htdocs\curso_php\aula06\exercicio_06_02\resto.php on line 3

//Fatal error: Uncaught DivisionByZeroError: Modulo by zero in C:\xampp\htdocs\curso_php\aula06\exercicio_06_02\resto.php:4 Stack trace: #0 {main} thrown in C:\xampp\htdocs\curso_php\aula06\exercicio_06_02\resto.php on line 4
?>
