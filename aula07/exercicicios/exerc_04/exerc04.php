<?php
    $vogal1=$_POST["a"];
    $vogal2=$_POST["e"];
    $vogal3=$_POST["i"];
    $vogal4=$_POST["o"];
    $vogal5=$_POST["u"];

    if ($vogal1 == $vogal2 . $vogal2 == $vogal3 . $vogal3 == $vogal4 . $vogal4 == $vogal5 . $vogal5 == $vogal1) {
        echo "VOGAL";
    } else {
        echo "consoante";
    }
?>