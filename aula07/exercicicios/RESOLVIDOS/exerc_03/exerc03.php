<?php

    $sexo1= $_POST["sexo"];

    if ($sexo1=="M") {
        echo "masculino";
    } elseif ($sexo1=="F") {
        echo "feminino";
    } else {
        echo "indefenido";
    }
        
?>