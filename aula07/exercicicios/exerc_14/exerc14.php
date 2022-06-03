<?php

    $turno = $_POST["turno"];

    if ($turno == "m") {
        echo "BOM DIA !";
    } elseif ($turno == "v") { 
        echo "BOA TARDE !";
    } elseif ($turno == "n") {
        echo "BOA NOITE !";
    } else
        echo "valor invalido";
    
?>
