<?php 

/** Matriz com constants */
define("carros", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
 echo carros[1];

/** Constants globais */
 define("BEM_VINDO", "Seja Bem vindo!!");
function meuTeste1() {
    echo "Meu test 1" . BEM_VINDO . "</br>";
}

function meuTeste2() {
    echo "Meu test 2" . BEM_VINDO . "</br>";
}

//meuTeste1();
meuTeste2();