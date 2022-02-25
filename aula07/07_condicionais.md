# Condicionais

Em PHP temos as seguintes declarações condicionais:

- ```if``` instrução - executa algum código se uma condição for verdadeira<br>
- ```if...else``` instrução - executa algum código se uma condição for verdadeira e outro código se essa condição for falsa<br>
- ```if...else if...else``` instrução - executa códigos diferentes para mais de duas condições<br>
- ```switch``` instrução - seleciona um dos muitos blocos de código a serem executados<br>

inglês\português
- if(se)
- else(senão)
- switch(caso)

# A instrução if
O ```if``` A instrução executa algum código se uma condição for verdadeira. 
## Sintax
```php
if (codição) {
  executado se a condição for verdadeira;
} 
```


# A instrução if...else

O ```if...else``` A instrução executa algum código se uma condição for verdadeira e outro código se essa condição for falsa.
```php
if (codição) {
  executado se a condição for verdadeira;
} else {
  executado se a condição for falsa;
} 
```

## EXEMPLO
```php
 <?php
$hora = 01;

if ($hora <= 12) {
  echo "Tenha uma bom dia!";
} else {
  echo "Tenha uma boa noite!";
}
?> 
```

# A instrução if...elseif...else
O ```if...elseif...else``` instrução executa códigos diferentes para mais de dois condições

## SINTAX
```php
if (codição) {
  executado se a condição for verdadeira;
} elseif (codição) {
  código a ser executado se a primeira condição for falsa e esta condição for verdadeira;
} else {
  executado se a condição for falsa;
} 
```

## EXEMPLO
Saída "Tenha um bom dia!" se a hora atual for menor que 10, e "Tenha um bom dia!" se a hora atual for menor que 20. Caso contrário, output "Tenha uma boa noite!":
```php
 <?php
$hora = 01;

if ($hora <= 12) {
  echo "Tenha uma bom dia!";
} else if ($hora <= 18) {
  echo "Tenha uma boa tarde!";
} else {
  echo "Tenha uma boa noite!";
}
?> 
```

# Frase
”A arte de programar consiste em organizar e dominar a complexidade.“
Edsger W. Dijkstra



# Lista de exercícios

Obs: utilize em todos os exericios ```html com Form```

Exercicio 1 - ```Fácil``` - Faça um programa que peça dois números e verifique (usando if e else) e imprima o maior deles

Exercicio 2 - ```Fácil``` - Faça um programa que peça um valor e mostre na tela se o valor é positivo ou negativo

Exercicio 3 - ```Fácil``` - Faça um programa que verifique (usando if e else) se a letra digitada é “F” ou “M”. Conforme a letra, imprima na tela: F – Feminino, M- Masculino, se nemhum letra for "F" ou "M" Sexo inválido.

Exercicio 4 - ```Fácil``` - Faça um programa que verifique (usando if e else) se uma letra digitada é vogal ou consoante.

Exercicio 5 - ```Fácil```- Faça um programa para a leitura de duas notas parciais de um aluno.
```
    A mensagem “Aprovado”, se a média alcançada for maior ou igual a sete;
    A mensagem “Aprovado com excelência”, se a média for igual a dez;
    A mensagem “Reprovado” se a média for menor de do que sete;
```

Exercicio 6 -```Fácil``` - Faça um programa que peça dois números ao usuário e mostre qual o maior e qual o menor  

Exercicio 7 -```Fácil``` – Faça um programa que receba três inteiros e diga qual deles é o maior e qual o menor.

Exercicio 8 - ```Fácil``` – Faça um programa que recebe um inteiro e diga se é par ou ímpar. Use o operador aritmético % (resto da divisão ou módulo) e o teste condicional if. 

Exercicio 9 -```Fácil``` – Escreva um programa que pergunte o raio de uma circunferência, e sem seguida mostre o diâmetro, comprimento e área da circunferência 

Exercicio 10 -```Fácil```- Para doar sangue é necessário ter entre 18 e 67 anos. Faça um aplicativo que pergunte a idade de uma pessoa e diga se ela pode doar sangue ou não. Use alguns dos operadores lógicos OU (||) e E (&&).

Exercicio 11 -```Fácil``` – Escreva um programa que pergunte o dia, mês e ano do aniversário de uma pessoa e diga se a data é válida ou não. Caso não seja, diga o motivo. Suponha que todos os meses tem 31 dias e que estejamos no ano de 2013.

Exercicio 12 -```Fácil``` – Crie um programa que peça um número ao usuário e armazene ele na variável x. Depois peça outro número e armazene na variável y. Mostre esses números. Em seguida, faça com que x passe a ter o valor de y, e que y passe a ter o valor de x.

Exercicio 13 - ```Fácil``` - Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre o mais barato.

Exercicio 14 - ```Fácil``` - Faça um programa que pergunte em que turno você estuda. Peça para digitar M-matutino ou V-vespertino ou N-noturno. Imprima a mensagem “Bom dia!” ou  “Boa Noite” ou “Valor inválido”, conforme o caso.

Exercicio 15 -```Fácil``` – Faça um Programa que leia um número e exiba o dia correspondente da semana. (1- Domingo , 2- Segunda, etc.) se digitar outro valor deve aparecer “valor inválido)

Exercicio 16 -```Fácil```. Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual operação ele deseja realizar. O resultado da operação deve ser acompanhado de uma frase que diga se o número e:

    Par ou ímpar;
    Positivo ou negativo;

Exercicio 17 -```Fácil```. Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As perguntas são:
```
“Telefonou para a vítima? “
“Esteve no local do crime?”
“Mora perto da vítima? “
“Devia para a vítima? “
“Já trabalhou com a vítima? “
```

O programa deve no final emitir uma classificação sobre a participação da pessoa no crime. Se a pessoa responder positivamente a 2 questões ela deve ser classificada como “Suspeita”, entre 3 e 4 como “Cúmplice” e 5 como “Assassino“. Caso contrário, ele será classificado como “Inocente“.

Exercicio 18 - ```Intermediário``` - Faça um programa que leia três números, verifique (usando if e else), e mostre o maior deles.

Exercicio 19 - ```Intermediário``` - Faça um programa que leia três números, verifique (usando if e else) e mostre o maior e o menor deles;

Exercicio 20 - ```Intermediário``` - Faça um programa que leia três números e mostre-os em ordem decrescente.

Exercicio 21 - ```Intermediário``` – Faça um programa que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média. A atribuição de conceitos obedece à tabela abaixo:
```
Média de aproveitamento       Conceito 
Entre 9.0 e 10.0 A
Entre 7.5 e 9.0                    B
Entre 6.0 e 7.5                    C
Entre 4.0 e 6.0                    D
Entre 4.0 e 0                      E
```

O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente e a mensagem “APROVADO” se o conceito for A, B ou C “REPROVADO” se o conceito for D ou E.


Exercicio 22 - ```Intermediário```. Faça um programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.
Dicas:
```
Três lados formam um triangulo quando a soma de quaisquer dos dois lados é maior que o terceiro.
Triângulo Equilátero: três lados iguais;
Triângulo Isósceles: quaisquer dois lados iguais;
Triângulo Escaleno: três lados diferentes;
```

Exercicio 23 -```Intermediário```. Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:
 
```
a. Se o usuário informar o valor de A igual a zero. a equação não e do segundo grau e o programa não deve fazer pedir os demais valores, sendo encerrado;
b. Se o delta calculado for negativo, a equação não possui raízes reais. Informe ao usuário e encerre o programa;
c. Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe ao usuário;
d. Se o delta for positivo, a equação possui duas raízes reais; informe-as ao usuário;
```

Exercicio 24 -```Intermediário```. Faça um Programa que peça um número inteiro e determine se ele e par ou ímpar. Dica: utilize o operador módulo (resto da divisão).

Exercicio 25 -```Intermediário```. Um posto está vendendo combustíveis com a seguinte tabela de descontos:
 
Álcool:

```
Até 20 litros: desconto de 3% por litro
Acima de 20 litros: Desconto de 5% por litro 99.
```

Gasolina:
```
Até 20 litros: desconto de 4% por litro
Acima de 20 litros, desconto de 6% por litro
```

Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível (codificado da seguinte forma: A-álcool. G-gasolina), calcule e imprima o valor a ser pago pelo cliente.

Exercicio 26 -```Intermediário```. Faça um Programa que peça um número correspondente a um determinado ano e em seguida informe se este ano e ou não bissexto.
https://escolakids.uol.com.br/matematica/calculo-do-ano-bissexto.htm

Exercicio 27 - ```Difícil``` - As organizações CSM resolveram dar um aumento de salário aos seus colaboradores e lhe contrataram para desenvolver o programa que calculará os reajustes.

```
a. Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual;
b. Salários até R$ 280,00 (incluindo): aumento de 20%;
c. Salários entre R$ 280,00 e R$700,00: aumento de 15%;
d. Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%;
e. Salários de R$ 1500,00 em diante: aumento de 5% Após o aumento ser realizado; informe na tela;
f. O salário antes do reajuste;
g. O percentual de aumento aplicado;
h. O valor do aumento;
i. O novo salário, após o aumento.
```

Exercicio 28 -```Difícil``` - Faça um programa para o cálculo de uma folha de pagamento, sabendo que os descontos são do imposto de Renda, que depende do salário bruto (conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do salário bruto, mas não é descontado (é a empresa que deposita.) O salário líquido corresponde ao salário bruto menos os descontos O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês.
```
a.Desconto do IR;
b.Salário Bruto ate R$900,00 (inclusive) – Isento;
c.Salário Bruto de R$ 1500, 00 (inclusive) – desconto de 5%;
d.Salario bruto até R$ 2500,00 (Inclusive) – desconto de 10%;
e.Salário bruto acima de 2500 – Desconto de 20%. Imprima na tela as informações, dispostas conforme o exemplo abaixo, no exemplo valor da hora é 5 e a quantidade de horas é 220.
```
 
```
Salário bruto (5 * 220)           : R$   1100,00
( – ) IR (5%)                     : R$     55,00
( – ) INSS ( 10% )                : R$    110,00
FGTS ( 11%)                       : R$    121,00
Total de descontos                : R$    165,00
Salário Líquido                   : R$    935,00
```




