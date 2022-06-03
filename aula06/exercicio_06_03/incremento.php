<?php
$resposta= ++$_POST["valor1"];


echo $resposta;


header("Location: form_increm.php?result=$resposta");
?>