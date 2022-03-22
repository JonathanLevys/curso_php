# PHP Loops 

## Loops PHP

Muitas vezes, quando você escreve código, você quer que o mesmo bloco de código seja executado e novamente um certo número de vezes. Então, em vez de adicionar várias linhas de código quase iguais em um script, nós pode usar laços.

Os loops são usados ​​para executar o mesmo bloco de código repetidamente, desde que uma determinada condição é verdadeira.

Em PHP, temos os seguintes tipos de loop:

```while```- percorre um bloco de código enquanto a condição especificada for verdadeira </br>


O PHP while Loop

O whileloop executa um bloco de código enquanto a condição especificada for verdadeira.
Sintaxe
```
while (codicao for verdadeira) {
  codigo a ser executado;
}
```
Exemplos
O exemplo abaixo exibe os números de 1 a 5:
```php
 <?php
    $x = 1;

    while($x <= 5) {
        echo "Numero: $x <br>";
        $x++;
    }
?> 
```



# Exericios
01 ```Fácil``` - Faça um programa que receba um número e usando laços de repetição calcule e mostre a tabuada desse número.

02 ```Fácil``` - Faça um programa que verifique e mostre os números entre 1.000 e 2.000 que, quando divididos por 11 produzam resto igual a 2.

03 ```Intermediário``` - Faça um programa que leia três valores (A, B, C) e mostre-os na ordem lida.  Em seguida, mostre-os em ordem crescente e decrescente.