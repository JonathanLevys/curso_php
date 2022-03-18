<?php

    $pergunta1 = $_POST['r1'];
    $pergunta2 = $_POST['r2'];
    $pergunta3 = $_POST['r3'];
    $pergunta4 = $_POST['r4'];
    $pergunta5 = $_POST['r5'];
    $contagem = 0;

    if ($pergunta1 == "sim") {
        $contagem = $contagem + 1;
    }
    if ($pergunta2 == "sim") {
        $contagem = $contagem + 1;
    }
    if ($pergunta3 == "sim") {
        $contagem = $contagem + 1;
    }
    if ($pergunta4 == "sim") {
        $contagem = $contagem + 1;
    }
    if ($pergunta5 == "sim") {
        $contagem = $contagem + 1;
    }
        //var_dump($contagem);
    if ($contagem > 0 and $contagem <= 2) {
        echo "suspeito";
    } elseif ($contagem > 2 and $contagem <= 4) {
        echo "cumplice";
    } elseif ($contagem > 4 and $contagem < 6) {
        echo "assassino";
    } else {
        echo "Inocente";
    }    

?>