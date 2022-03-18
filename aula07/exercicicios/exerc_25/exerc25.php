<?php

$litros = $_POST["litros"];
$combustivel = $_POST["combustivel"];

$preco = 0;

if($combustivel == "G") {
        if ($litros <= 20) {
                $preco = $litros * 4 / 100;
              
        
       } else {
                $preco = $litros * 6 / 100;
       } 
} elseif($combustivel == "A") {
        if ($litros <= 20) {
                $preco = $litros * 3 / 100;
        
         } else {
                $preco = $litro * 5 / 100;
        }


}
        echo $preco;
?>