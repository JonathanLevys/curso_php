<?php

    $idade = $_POST["idade"];

    if ($idade >= 18 && $idade <= 67) {
        echo "DOADOR";
        header("Location: pg2.php");
    } else {
        echo "NÃO DOADOR";
    }