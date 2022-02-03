# Comentarios

Um comentário no código PHP é uma linha que não é executada como parte do programa. Seu único propósito é ser lido por alguém que esteja olhando o código.

Os comentários podem ser usados ​​para:

- Permita que outras pessoas entendam seu código
- Lembre-se do que você fez - A maioria dos programadores experimentou voltar ao seu próprio trabalho um ou dois anos depois e ter que re-descobrir o que eles fizeram. Os comentários podem lembrá-lo do que você estava pensando quando escreveu o código

PHP suporta várias maneiras de comentar: 

## Exemplo 01
Sintaxe para comentários de linha única:
```php
<!DOCTYPE html>
<html>
<body>

<?php
// Este é um comentário de uma linha

# Este também é um comentário de uma linha
?>

</body>
</html> 
```

## Exemplo 02
Sintaxe para comentários de várias linhas:
```php
<!DOCTYPE html>
<html>
<body>

<?php
/*
Este é um bloco de comentários de várias linhas
que se estende por vários
linhas
*/
?>

</body>
</html> 
```

## Exemplo 03
Usando comentários para descrever partes do código:
```php
 <!DOCTYPE html>
<html>
<body>

<?php
// Este calculo retornara 10

$x = 5 + 5;
echo $x;
?>

</body>
</html> 
```
