<?php

// indice igual a chave

// $familia = array(
//     "pai" => "jonata",
//     "mae" => "ane",
//     "filho" => "natan",
//     "filha" => "camile"
// );

// foreach($familia as $chave => $menbro) {
//     if($chave == "filho") {
//         echo $menbro;
//     }
// } 

// $arr2 = array("jonata","ane","natan","camile");

// foreach($arr2 as $chave => $menbro) {
//     if($chave == 1) {
//         echo $menbro;
//     }
// } 

// $familiaDetalhes = array(
//     "pai" => array(
//         "nome" => "jonata", 
//         "idade" => 37
//     ),
//     "mae" => array(
//         "nome" => "ane", 
//         "idade" => 33
//     ),
//     "filho" => array(
//         "nome" => "natan",
//         "idade" => 2
//     ),
//     "filha" => array(
//         "nome" => "camile", 
//         "idade" => 14
//     )
// );

// foreach($familiaDetalhes as $chave1 => $menbros) {
//     echo $chave1 . "<br>";
//     foreach($menbros as $chave2 => $item) {
//         echo $chave2 . "=>". $item ."<br>";
//     }
// }


$familiaDetalhes = array(
    "pai" => array(
        "nome" => "jonata", 
        "idade" => 37
    ),
    "mae" => array(
        "nome" => "ane", 
        "idade" => 33
    ),
    "filho" => array(
        "nome" => "natan",
        "idade" => 2
    ),
    "filha" => array(
        "nome" => "camile", 
        "idade" => 14
    )
);

foreach($familiaDetalhes as $chave1 => $menbros) {
    echo $chave1 ."<br>";
    if($chave1 == "pai") {
        foreach($menbros as $chave2 => $item) {
            echo $chave2 . "=>". $item ."<br>";
        }
        break;
    }
}

// continue
foreach($familiaDetalhes as $chave1 => $menbros) {
    echo $chave1 ."<br>";
    if($chave1 == "pai") {
        foreach($menbros as $chave2 => $item) {
            echo $chave2 . "=>". $item ."<br>";
        }
        continue;
    }
}