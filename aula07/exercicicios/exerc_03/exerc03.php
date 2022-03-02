<?php

    $tipo1= $_POST["valor1"];
    $tipo2= $_POST["valor2"];

        if ($tipo1 == "M") {
            echo "MASCULINO";
        } else if ($tipo2 == "F") {
            echo "FEMININO";
        } else {
            echo "INDEFINIDO";
        }

        
?>