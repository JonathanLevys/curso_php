<?php

$a = $_POST["num1"];
$b = $_POST["num2"];
$c = $_POST["num3"];

if ($a > $b) {
    if ($b > $c) {
        echo "A ordem decrescente é $a , $b e $c " . "<br>";
        // echo "A ordem crescente é $c , $b e $a";
    } else {
        if ($a > $c) {
            echo "A ordem decrescente é $a , $c e $b " . "<br>";
            echo "A ordem crescente é $b , $c e $a";
        } else {
            echo "A ordem decrescente é $c , $a e $b " . "<br>";
            echo "A ordem crescente é $b , $a e $c";
        }
    }
} else {
    if ($b > $c) {
        if ($a > $c) {
            echo "A ordem decrescente é $b , $a e $c " . "<br>";
            echo "A ordem crescente é $c , $a e $b";
        } else {
            echo "A ordem decrescente é $b , $c e $a " . "<br>";
            echo "A ordem crescente é $a , $c e $b";
        }
    } else {
        echo "A ordem decrescente é $c , $b e $a " . "<br>";
        echo "A ordem crescente é $a , $b e $c";
    }
}

// if (($a >= $b and $a >= $c and $b >= $c) and $c <= $a and $c <= $b and $b <= $a)  { 
//     echo "A ordem decrescente é $a , $b e $c " . "<br>";
//     echo "A ordem crescente é $c , $b e $a";
// } elseif (($a >= $b and $a >=$c and $c >= $b) and $c <= $a and $c <= $b and $a <= $b) {
//     echo "A ordem decrescente é $a , $c e $b" . "<br>";
//     echo " A ordem crescente é $c , $a e $b";
// } elseif (($b >= $a and $b >= $c and $a >= $c) and $b <= $a and $b <= $c and $a <= $c) {
//     echo "A ordem decrescente é $b , $a e $c" . "<br>";
//     echo "A ordem crescente é $b , $c e $a";
// } elseif (($b >= $a and $b >= $c and $c >= $a) and $b <= $a and $b <= $c and $c <= $a) {
//     echo "A ordem decrescente é $b , $c e $a" . "<br>";
//     echo "A ordem crescente é $b , $a e $c";
// } elseif (($c >= $a and $c >= $b and $a >= $b) and $a <= $b and $a <=$c and $c <= $b) {
//     echo " A ordem decrescente é $c , $a e $b" . "<br>";
//     echo "A ordem crescente é $a , $c e $b";
// } elseif (($c >= $a and $c >= $b and $b >= $a) and $a <= $b and $a <= $c and $b <= $c) {
//     echo "A ordem decrescente é $c , $b e $a" . "<br>";
//     echo "A ordem crescente é $a , $b e $c ";  
// }
