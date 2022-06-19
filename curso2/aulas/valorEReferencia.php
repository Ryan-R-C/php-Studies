<?php

$contas = [
    [
        'titular' => 'ryan',
        'saldo' => 4000
    ],
    [
        'titular' => 'Vagner',
        'saldo' => 20000
    ], 
    [
        'titular' => 'John',
        'saldo' => 00000
    ]
];


function capiltalizeConta (array $_conta) {
   $_conta["titular"] = ucfirst($_conta["titular"] );

   return $_conta;
};


capiltalizeConta($contas[0]);
echo $contas[0]['titular'] . PHP_EOL;
/*
Por mais que *A FUNÇÃO* referência a variável, ela não tem a possibilidade de alterar seu valor a não ser explicitamente como na linha abaixo
*/

$contas[0] = capiltalizeConta($contas[0]);
echo $contas[0]['titular'] . PHP_EOL;

/*
Ao chamar a função o php não passa o variavel, mas sim o valor dela, como uma cópia,
as informações do valor da variável, seu espaço de memória e endereçamento continuam as mesmas,
a não ser que retorne com uma atribuição como na segunda tentativa...
*/

/*
É possível passar a variável em si, não apenas a "cópia":
*/


/*
Por mais que *A FUNÇÃO* referência a variável, ela não tem a possibilidade de alterar seu valor a não ser explicitamente como na linha abaixo

Este caractér é resposável por passar a variável em si, com todas as suas informações

                                           V   */
function capiltalizeContaReferencia (array &$_conta) {
    $_conta["titular"] = ucfirst($_conta["titular"] );
 };
 
 
 capiltalizeConta($contas[1]);
 echo $contas[1]['titular'] . PHP_EOL;

 