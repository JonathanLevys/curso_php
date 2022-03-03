<?php
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];

    if($dia > 0 && $dia < 32 && $mes > 0 && $mes < 13 && $ano > 0 && $ano < 2014) {
        echo "data válida";
    } else {
        echo "Data inválida";
    }
?>