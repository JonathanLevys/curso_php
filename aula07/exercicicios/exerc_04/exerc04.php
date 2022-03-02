<?php

    $vogal = $_POST["vogal"];

if ($vogal == 'a' ||
    $vogal == 'e' ||
    $vogal == 'i' ||
    $vogal == 'o' ||
    $vogal == 'u' 
) {
   echo "VOGAL"; 
} else{
    echo "CONSOANTE";
}
   
?>