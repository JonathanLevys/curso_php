<?php
declare(strict_types=1);

require('./exemplo01.php');
require('./exemplo02.php');
require('./exemplo03.php');

const A = "6";
const B = "3";

$c = 5;
$d = 10;

mostrarMsg();
mostrarOutraMsg();

soma($c,$d);
soma(6,6);

addMenbroDaFamilia("Jonata");
addMenbroDaFamilia("Anne");
addMenbroDaFamilia("Natan");
addMenbroDaFamilia("Camilly");

echo "Resultado da soma: " . sumNumeros(A,B) . "<br>";