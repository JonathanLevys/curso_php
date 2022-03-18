<?php
    $x = $_POST["valorx"];
    $y = $_POST["valory"];
    $auxilio = 0;
    $auxilio = $x;
    $x = $y;
    $y = $auxilio;

    echo "Este é o valor de X" . $x ." ". "Este é o valor de Y" . $y;
