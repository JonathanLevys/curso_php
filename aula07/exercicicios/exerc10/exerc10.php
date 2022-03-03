<?php

    $idade = $_POST["idade"];

    if ($idade >= 18 && $idade <= 67) {
        echo "DOADOR";
    } else {
        echo "NÃO DOADOR";
    }