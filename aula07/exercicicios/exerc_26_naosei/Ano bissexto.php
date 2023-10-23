<?php

$ano = $_POST["ano"];

    // if (($ano % 4 == 0 and $ano % 100 != 0) or $ano % 400 == 0) {
    //     echo "O ano é bissexto";
    // } else {
    //     echo "O ano não é bissexto";
    // }

    switch (($ano % 4 == 0 and $ano % 100 != 0) or $ano % 400 == 0) {
        case true:
            echo "O ano é bissexto";
            break;
        
        default:
            echo "O ano não é bissexto";
            break;
    }

?>
