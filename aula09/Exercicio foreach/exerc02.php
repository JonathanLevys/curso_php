<?php

    $carros = [
        'FIAT ' => array(
            'hatch ' => ' palio',
            'ano ' => 2012
        ),
        'FORD ' => array(
            'sedan ' => ' Fusion',
            'ano ' => 2018
        ),
        'GM ' => array(
            'pickup ' => ' S10',
            'ano ' => 2019
        ),
        'VOLKS ' => array(
            'suv ' => ' nivus',
            'ano ' => 2020
        )
    ];

    foreach ($carros as $chave1 => $valor) {
        echo $chave1 . '<br>';
        if ($chave1 == 'FIAT') {
            foreach ($valor as $chave2 => $item) {
                echo $chave2 . '=>'. $item .'<br>';
            }
            continue;
        }
    }
?>