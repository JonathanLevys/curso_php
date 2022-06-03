# Echo/Print

Com o PHP, existem duas maneiras básicas de obter saída: **echo** e **print**.

As diferenças são pequenas: **echo** não tem valor de retorno enquanto **print** tem um valor de retorno de 1 para que possa ser usado em expressões. **echo** pode receber vários parâmetros (embora tal uso seja raro) enquanto **print** pode receber um argumento. **echo** é marginalmente mais rápido que **print**.

## A declaração de eco do PHP

o **echo** declaração pode ser usada com ou sem parênteses: **echo** ou **echo()**.

## Exemplo 01
```php 
<?php
echo "<h2>PHP é Legal!</h2>";
echo "Olá Mundo!<br>";
echo ("Estou aprendendo php!<br>");
echo "Está ", "string ", "foi ", "feita ", "com multiplos parametros.";
?> 
```

## Exemplo 02
O exemplo mostra como gerar texto e variáveis ​​com o **echo** declaração:
```php
 <?php
$txt1 = "Aprendendo PHP";
$txt2 = "www.google.com";
$x = 5;
$y = 4;
$a = "5";
$b = "4";

echo "<h2>" . $txt1 . "</h2>";
echo "Estudando php com " . $txt2 . "<br>";
echo $x + $y;
echo $a + $b;
?> 
```

## Exemplo 03
```php
 <?php
$str = "Olá tudo bom!";
print $str;
print ("<br>Hoje é segunda feira!");
?> 
```