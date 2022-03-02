<?php
    $media1 = $_POST["media1"];
    $media2 = $_POST["media2"];
    
    $resultado = 0;
    $resultado = ($media1 + $media2) / 2;
    
if ($resultado >= 7 && $resultado < 10) {
    echo "APROVADO";
} elseif ($resultado == 10) {
    echo "APROVADO COM EXCELENCIA";
} else {
    echo "REPROVADO";
}  


?>
