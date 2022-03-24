<?php 

$continuar = 1;
$contador_lula = 0;
$contador_bozo = 0;
$contador_moro = 0;

while ($continuar != 0) {
    echo "programa de votacao v1.0 \n";
    echo "cadidatos para votacao \n";
    echo "13 - Lula \n";
    echo "17 - Bozo \n";
    echo "24 - Moro \n";
    echo "0 - para sair \n";
    $continuar = (int)readline("Faça sua votação >> ");

    if($continuar == 13) {
        $contador_lula++;
    } elseif ($continuar == 17) {
        $contador_bozo++;
    } elseif ($continuar == 24){
        $contador_moro++;
    }

    if($continuar == 0) {
        echo "Você saiu do programa. \n";
    }
}

if($contador_lula > $contador_bozo && $contador_lula > $contador_moro) {
    echo "Lula venceu \n";
} elseif ($contador_bozo > $contador_lula && $contador_bozo > $contador_moro) {
    echo "Bozo venceu \n";
} else {
    echo "Moro venceu \n";
}

echo "votaçao lula ".$contador_lula."\n";
echo "votaçao bozo ".$contador_bozo."\n";
echo "votaçao moro ".$contador_moro."\n";