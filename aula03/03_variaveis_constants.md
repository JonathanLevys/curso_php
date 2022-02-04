# Variáveis e Constantes


## Criando (declarando) variáveis ​​PHP 
No PHP, uma variável começa com o **$** sinal, seguido do nome da variável: 
```php
<?php
$txt = "Olá mundo!";
$x = 5;
$y = 10.5;
?> 
```

## Variáveis ​​de saída

O PHP **echo** A instrução é frequentemente usada para enviar dados para a tela.
O exemplo gerar texto a uma variável: 

## Exemplo 01:
```php
<?php
$txt = "jesus";
echo "Eu amo $txt!";
?> 
```
## Exemplo 02:
O exemplo produzirá a soma de duas variáveis:
```php
<?php
$x = 5;
$y = 4;
echo $x + $y;
?> 
```

## Criando (declarando) Constantes ​​PHP
Constantes são como variáveis, exceto que, uma vez definidas eles não podem ser alterados ou indefinidos.
elas tambem são automaticamente globais e podem ser usadas em todo o roteiro, 
Para criar uma constante, use o ```define()``` função. 

### Sintax
```
define(name, value, case-insensitive)
```

## Exemplo 01 
Crie uma constante com um que diferencia maiúsculas de minúsculas : 
```php
<?php
define("BEM_VINDO", "Seja Bem vindo!");
echo BEM_VINDO;
?> 
```

## Exemplo 02
Crie uma constante com um que não diferencia maiúsculas de minúsculas :
```php
<?php
define("BEM_VINDO", "Seja Bem vindo!", true);
echo bem_vindo;
?>
```

## Matrizes Constantes PHP 
No PHP7, você pode criar uma constante Array usando o ```define()``` função.
## Exemplo
Crie uma constante de Array: 
```php
<?php
define("carros", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo carros[0];
?> 
```

## Exemplo de constantes globais
```php
 <?php
define("BEM_VINDO", "Seja Bem vindo!!");

function meuTeste() {
  echo BEM_VINDO;
}
 
meuTeste();
?> 
```