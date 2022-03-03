<?php
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];

    if ($dia >= 1 || $dia <= 31 || $mes >= 1 || $mes <= 12 || $ano >= 0 || $ano <= 2014) {
        echo "data válida";
    } else {
        echo "Data inválida";
    }
?>