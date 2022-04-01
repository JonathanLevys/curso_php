# PHP Functions
Além das funções internas do PHP, é possível criar suas próprias funções.

- Uma função é um bloco de instruções que pode ser usado repetidamente em um programa.
- Uma função não será executada automaticamente quando uma página for carregada.
- Uma função será executada por uma chamada para a função.

## Criar uma função em PHP
Uma declaração de função definida pelo usuário começa com a palavra ```function```:

**Nota**: Um nome de função deve começar com uma letra ou sublinhado. Os nomes das funções NÃO diferenciam maiúsculas de minúsculas.
**Dica**: Dê à função um nome que reflita o que o função faz! 

No exemplo abaixo, criamos uma função chamada "mostrarMsg()". A abertura chave ( { ) indica o início do código da função e o fechamento chave ( } ) indica o fim da função. A função exibe "Olá world!". Para chamar a função, basta escrever seu nome seguido de colchetes (): 

```php
<?php
    function mostrarMsg() {
        echo "Hello world!";
    }

    mostrarMsg();
?> 
```

## Argumentos da função PHP

As informações podem ser passadas para funções por meio de argumentos. Um argumento é apenas como uma variável.

Os argumentos são especificados após o nome da função, dentro dos parênteses. Vocês pode adicionar quantos argumentos quiser, basta separá-los com uma vírgula.

O exemplo a seguir tem uma função com um argumento ($fname). Quando o função familyName() é chamada, também passamos um nome (por exemplo, Jani), e o name é usado dentro da função, que gera vários nomes diferentes, mas um sobrenome igual:

```php

 <?php
function familyName($fname) {
  echo "$fname levys.<br>";
}

familyName("Jonata");
familyName("Natan");
familyName("Ane");
familyName("Camile");
?> 
```

## PHP é uma linguagem livremente tipada

No exemplo acima, observe que não precisamos informar ao PHP qual é o tipo de dado da variável.

O PHP associa automaticamente um tipo de dado à variável, dependendo de seu valor. Como os tipos de dados não são definidos em sentido estrito, você pode fazer coisas como adicionar uma string a um inteiro sem causar um erro.

No PHP 7, foram adicionadas declarações de tipo. Isso nos dá uma opção para especificar o tipo de dados esperado ao declarar uma função e adicionando o strict declaração, ele lançará um "Fatal Error" se o tipo de dados não corresponder.

No exemplo a seguir, tentamos enviar um número e uma string para o funcionar sem usar strict:


```php
<?php
    function sumNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo sumNumbers("Resultado da soma: ",5);
?> 
```

Especificar strict precisamos definir declare(strict_types=1);. Isso deve estar na primeira linha do arquivo PHP.

No exemplo a seguir, tentamos enviar um número e uma string para o função, mas aqui nós adicionamos o strict declaração:

```php
 <?php declare(strict_types=1);

    function sumNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo sumNumbers("Resultado da soma: ",5);
?>
```



O ```strict``` declaração força as coisas a serem usadas da maneira pretendida.


## Valor do argumento padrão do PHP

O exemplo a seguir mostra como usar um parâmetro padrão. Se chamarmos o função setHeight() sem argumentos, ela recebe o valor padrão como argumento: 

```php
 <?php declare(strict_types=1);
    function setHeight(int $minheight = 50) {
        echo "A altura é : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
?> 

```

## Funções PHP - Retornando valores

Para permitir que uma função retorne um valor, use o returndeclaração: 
```php
 <?php declare(strict_types=1);
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
?> 
```

## Declarações de tipo de retorno PHP

O PHP 7 também suporta declarações de tipo para o returndeclaração. Como com a declaração de tipo para argumentos de função, ao habilitar o requisito estrito, ele lançará um "Fatal Error" em uma incompatibilidade de tipo.

Para declarar um tipo para o retorno da função, adicione dois pontos ( :) e o tipo logo antes da abertura encaracolada ( {) colchete ao declarar a função.

No exemplo a seguir, especificamos o tipo de retorno para a função: 

```php
<?php declare(strict_types=1); // strict requirement
    function addNumbers(float $a, float $b) : float {
        return $a + $b;
    }
    echo addNumbers(1.2, 5.2);
?>
```


## Incluir arquivos PHP

O ```include```(ou ```require```) pega todo o texto/código/marcação que existe no arquivo especificado e o copia para o arquivo que usa a instrução include.

Incluir arquivos é muito útil quando você deseja incluir o mesmo PHP, HTML ou texto em várias páginas de um site.
PHP inclui e exige instruções

É possível inserir o conteúdo de um arquivo PHP em outro arquivo PHP (antes do servidor o executa), com a instrução include ou require.

As instruções include e require são idênticas, exceto em caso de falha:
- require produzirá um erro fatal (E_COMPILE_ERROR) e interromperá o script
- include produzirá apenas um aviso (E_WARNING) e o script continuará

Então, se você quiser que a execução continue e mostre aos usuários a saída, mesmo que o arquivo de inclusão está faltando, use a instrução de inclusão. Caso contrário, no caso de FrameWork, CMS ou um codificação de aplicativo PHP complexo, sempre use a instrução require para incluir um arquivo de chave para o fluxo de execução. Isso ajudará a evitar comprometer a segurança do seu aplicativo e integridade, apenas no caso de um arquivo de chave estar acidentalmente faltando.

Incluir arquivos economiza muito trabalho. Isso significa que você pode criar um arquivo de cabeçalho, rodapé ou menu padrão para todas as suas páginas da web. Então, quando o cabeçalho precisar ser atualizado, você só poderá atualize o arquivo de inclusão de cabeçalho. 


# Exercicio