<?php

// include './functions/sacar.php';
// include './functions/exibeContas.php';


require_once './functions/sacar.php';
require_once './functions/exibeContas.php';

/*
include != require != require_once
if(!include.function) return warning
if(!require.function) return error

*/

$contas = [
    [
        'titular' => 'Ryan',
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

exibeContas($contas);


echo   PHP_EOL . "---------------------------------". PHP_EOL;
echo   PHP_EOL . "Depois de Sacar". PHP_EOL;
$contas[0] =  sacar($contas[0], 5000);


exibeContas($contas);


echo   PHP_EOL . "---------------------------------". PHP_EOL;
echo   PHP_EOL . "Depois de Sacar". PHP_EOL;



