<?php
    $compras = [
        'banana',
        'carne',
        'Ovo',
        'Arroz',
        'Feijao'
    ];

    echo '<h2>LISTA DE COMPRAS</h2>';

    foreach ($compras as $chave => $valor) {
        echo 'Item '.($chave + 1).': '.$valor.'<br/>';
    }

?>