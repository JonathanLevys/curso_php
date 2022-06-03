<?php

    $numero = $_POST['valor'];

    if ($numero % 2 == 0){
        echo 'numero par';
    } else {
        echo 'numero impar';
    }

?>