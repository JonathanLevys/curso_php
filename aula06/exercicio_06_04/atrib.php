<?php
    $resposta = 0;
  $resposta= $_POST["valor1"];
  $resposta+= $_POST["valor1"];


  echo $resposta;
  
  
  header("Location: form_atrib.php?result=$resposta");
    
?>
