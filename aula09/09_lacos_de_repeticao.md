# PHP Loops 

## PHP While

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

## PHP For

O ```for``` loop é usado quando você sabe com antecedência quantas vezes o script deve ser executado


Sintaxe
```
for (contador inicial; contador de teste; contador de incrementos) {
  codigo a ser executado para cada iteração;
}
```

Parâmetros:
```
  contador inicial : Inicializa o valor do contador de loop
  contador de teste : Avaliado para cada iteração de loop. Se for avaliado como TRUE, o loop continua. Se for avaliado como FALSE, o loop termina.
  contador de incrementos : Aumenta o valor do contador de loops
```

Exemplo
O exemplo abaixo exibe os números de 0 a 10:
```php
<?php
    for ($x = 0; $x <= 10; $x++) {
      echo "Numero: $x <br>";
    }
?>
```

# Exercicios FOR
01 ```Fácil``` - Escreva um aplicativo que percorra de 0 a 50 e mostre somente os número ímpares.</br>
02 ```Intermediário``` - Escreva um aplicativo que exiba todos os múltiplos de 3 de 0 a 100.</br>
03 ```Fácil``` Escreva um aplicativo que exiba em ordem decrescente todos os números de 20 até 10;</br>
04 ```Fácil``` Escreva um aplicativo que exiba em todos valores de 5 em 5 de 0 até 50 exemplo: 5, 10, 15, 20, 25;</br>

## PHP Foreach

O foreach funciona apenas em arrays e é usado para percorrer cada par chave/valor em um array.

Sintax
```
foreach ($array as $value) {
  codigo a ser executado;
}
```

Para cada iteração do loop, o valor do o elemento da matriz atual é atribuído a $value e o ponteiro da matriz é movido por um, até atingir o último elemento do array.
Exemplos

O exemplo a seguir produzirá os valores do determinado array ($colors):
### Exemplo
```php
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
```

O exemplo a seguir produzirá as chaves e os valores do determinado array ($idade):
### Exemplo
```php
<?php
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

  foreach($age as $x => $val) {
    echo "$x = $val<br>";
  }
?>
```


01 ```Fácil``` - Crie uma lista de compras, com varios items adicionados no array, exemplos, carne, banana etc, e percorra cada item com o foreach.</br>
```
Item 1: Banana
Item 2: Carne
Item 3: Ovo
...
...
```

02 ```Fácil``` - Crie uma lista de carros com array, e percorra cada item com o foreach.</br>