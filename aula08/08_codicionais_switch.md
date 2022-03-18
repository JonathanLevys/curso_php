# Codicionais Switch

O switchA instrução é usada para executar diferentes ações com base em diferentes condições. 

## A instrução do switch PHP

Use o switchinstrução para selecionar um dos muitos blocos de código a ser executado . 

```php 
switch (n) {
  case label1:
    código a ser executado if n=label1;
    break;
  case label2:
    código a ser executado if n=label2;
    break;
  case label3:
    código a ser executado if n=label3;
    break;
  default:
    código a ser executado if n é diferente de todos os rótulos;
} 
```

É assim que funciona: Primeiro temos uma única expressão n (na maioria das vezes um variável), que é avaliada uma vez. O valor da expressão é então comparado com os valores para cada caso na estrutura. Se houver uma correspondência, o bloco de código associado a esse caso é executado. Usar breakpara impedir o código seja executado no próximo caso automaticamente. O defaultdeclaração é usada se não correspondência é encontrada. 

```php
 <?php
$favcolor = "vermelho";

switch ($favcolor) {
  case "red":
    echo "Sua cor favorita é vermelho!";
    break;
  case "blue":
    echo "Sua cor favorita é is azul!";
    break;
  case "green":
    echo "Sua cor favorita é is verde!";
    break;
  default:
    echo "Sua cor favorita não é vermelho, azul ou verde!";
}
?> 
```

Exercicio 1 -```Fácil``` - Faça um programa que mostre o dia da semana, o programa vai pedir um valor e esse valor corresponde ao dia da semana exemplo a baixo, caso nemhum dos valores digitados correspoderem a o dia da semana mostre a messagem 'Valor Invalido':
```
    1 - Domingo
    2 - Segunda-Feira
    4 - Quarta-Feira
    5 - Quinta-Feira
    6 - Sexta-Feira
    7 - Sabado
```

Exercicio 2 -```Fácil``` - Faça um programa que mostre o mês, o programa vai pedir um valor e esse valor corresponde ao dia do mês exemplo a baixo, caso nemhum dos valores digitados correspoderem a o mês mostre a messagem 'Valor Invalido':
```
    1 - Janeiro
    2 - Fevereiro
    ...
    12 - Dezembro
```