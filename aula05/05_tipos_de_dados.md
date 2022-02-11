# Tipos de dados

Variáveis ​​podem armazenar dados de diferentes tipos, e diferentes tipos de dados podem fazer coisas diferentes. 

O PHP suporta os seguintes tipos de dados:
- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL

## String
Uma string é uma sequência de caracteres, como "Hoje e segunda-feira!".
Uma string pode ser qualquer texto entre aspas. Você pode usar aspas simples ou duplas:
```php
<?php
    $x = "Hoje e segunda-feira!";
    $y = 'Hoje e terça-feira!';

    echo $x;
    echo "<br>";
    echo $y;
?> 
```

## Integer
Um tipo de dados inteiro é um número não decimal entre -2.147.483.648 e 2.147.483.647.
Regras para números inteiros:

- Um número inteiro deve ter pelo menos um dígito
- Um número inteiro não deve ter um ponto decimal
- Um inteiro pode ser positivo ou negativo

No exemplo a seguir, ```$x``` é um número inteiro. O PHP ```var_dump()``` A função retorna o tipo de dados e o valor: 
```php
<?php
    $x = 5985;
    var_dump($x);
?> 
```

## Float
Um float (número de ponto flutuante) é um número com um ponto decimal ou um número na forma exponencial.
No exemplo a seguir $x é um float. O PHP ```var_dump() ``` A função retorna o tipo de dados e o valor:
```php
<?php
    $x = 10.365;
    var_dump($x);
?> 
```

## Boolean
Um booleano representa dois estados possíveis: ```TRUE``` ou ```FALSE```.
Booleanos são frequentemente usados ​​em testes condicionais.
```php
<?php
    $x = true;
    $y = false;
?> 
```

## Array
Uma matriz armazena vários valores em uma única variável.
No exemplo ```$cars``` é um array. O PHP ```var_dump()``` A função retorna o tipo de dados e o valor: 
```php 
<?php
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
?> 
```

## Object
Classes e objetos são os dois principais aspectos da programação orientada a objetos.
Uma classe é um modelo para objetos e um objeto é uma instância de uma classe.
</br>
Quando os objetos individuais são criados, eles herdam todas as propriedades e comportamentos da classe, mas cada objeto terá valores diferentes para o propriedades.
</br>
Vamos supor que temos uma classe chamada Car. Um carro pode ter propriedades como modelo, color, etc. Podemos definir variáveis ​​como ```$model```, ```$color```, e assim por diante, para manter o valores dessas propriedades.
</br>
Quando os objetos individuais (Volvo, BMW, Toyota, etc.) herdar todas as propriedades e comportamentos da classe, mas cada objeto têm valores diferentes para as propriedades.
</br>
Se você criar uma função ```__construct()```, o PHP chamará isso automaticamente função quando você cria um objeto de uma classe. 

```php 
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "Meu Carro é um " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar->message();
?> 
```

## NULL
```Null``` é um tipo de dado especial que pode ter apenas um valor: ```NULL```.
Uma variável do tipo de dados ```NULL``` é uma variável que não tem valor atribuído a ela.
Dica: Se uma variável for criada sem um valor, ela é atribuído automaticamente um valor de ```NULL```.
As variáveis ​​também podem ser esvaziadas definindo o valor como ```NULL```: 

```php
<?php
    $x = "Eu tenho 1 carro!";
    $x = null;
    var_dump($x);
?> 
```


# Exericios

01 - Declare uma variavel para cada dia da semana e atribua o nome de cada dia da semana, para cada variavel, e imprima o resultado na tela, utiliza a estrutura **html** e o elemento ```<br>``` para quebra a linha.

Exemplo de Saida:
```
  Segunda-feira
  Terça-feira
  Quarta-feira
  Quinta-feira
  Sexta-feira
  Sabado
  Domingo
```


02 - Declare 3 variaveis, e atribua valores númericos, e imprima na tela o resultado, use a estrutura **html** e o elemento ```<br>``` para quebra a linha. 

Exemplo de Saida:
```
  Primeiro Valor: 4
  Segundo Valor: 67
  Terceiro Valor: 94
```

03 - Declare 1 variavel, e atribua a ela o salario minio, e imprima na tela o resultado, use a estrutura **html**. 

Exemplo de Saida:
```
  O Salario minimo é : R$ 1.212,00
```

04 - Declare 1 variavel sou **solteiro**, e atribua a ela o valor de **True** se você e solteiro, ou **false** se você e casado, e imprima o resultado na tela. use a estrutura **html**.

Exemplo de Saida:
```
  Sou solterio? R: (false ou true)
```

05 - Declare 1 variavel do tipo array, e atribua a ela todas as marcas de roupa que você usa, use a estrutura **html** e a função ```var_dump()``` para ele mostrar o resultado.


06 - Declare 6 variaveis e uma delas seja um arry, e atribua a ela todos os menbros de sua familia, e as demais variaveis atribua seu nome, email, idade, salario, casado sim ou não, e imprima na tela, utilize o ```var_dump()``` para mostrar os membros de sua familia. use a estrutura **html**, e o elemento ```<br>``` para quebra a linha.

Exemplo de Saida:
```
  Meu nome é:
  Meu e-mail é:
  Tenho a idade de:
  Meu Salario é:
  Sou casado:
  Minha Familia:
```