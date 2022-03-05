<?php

   // $manha = $_POST["m"];
   // $vespertino = $_POST["v"];
   // $noite = $_POST["n"];
    $turno = $_POST["m"] or $_POST["v"] or $_POST ["n"];

    if ($turno == "m") {
        echo "BOM DIA !";
    } elseif ($turno == "v") { 
        echo "BOA TARDE !";
    } elseif ($turno == "n") {
        echo "BOA NOITE !";
    } else
        echo "valor invalido";
    
?>
