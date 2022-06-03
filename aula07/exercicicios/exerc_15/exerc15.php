<?php
    $num = $_POST["numero"];

        if ($num == 1) {
        echo ("Domingo");
    
        }  elseif ($num == 2) {
        echo ("Segunda-feira");
    
        }   elseif ($num == 3) {
        echo("terça-feira");
    
        }   elseif ($num == 4) {
        echo("quarta-feira");
    
        }  elseif ($num == 5) {
        echo("quinta-feira");
    
        }  elseif ($num == 6) {
        echo("sexta-feira");
    
        }   elseif ($num == 7) {
        echo("Sabado");

        }  else
            echo "valor invalido";

?>