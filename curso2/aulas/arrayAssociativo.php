<?php

$conta1 = [
    'titular' => 'Ryan',
    'saldo' => 50000
];


$conta2 = [
    'titular' => 'Vagner',
    'saldo' => 20000
];



$conta3 = [
    'titular' => 'John',
    'saldo' => 00000
];


echo $conta1['titular']  . PHP_EOL;

echo $conta1['saldo'] . PHP_EOL;

echo count($conta1). PHP_EOL;


$contas = [ $conta1, $conta2, $conta3];

// Caso nenhum índice for informado o php adicionará o ultimo + 1

$contas[] = [
    'titular' => 'Vagner Moura',
    'saldo' => 200000000
];





echo "For" . PHP_EOL;
for($i = 0; $i <= count($conta1);  $i++){
    echo $contas[$i]['saldo'] . PHP_EOL;
}


echo  PHP_EOL ."ForEach" . PHP_EOL;

foreach($contas as $conta){
    echo $conta['saldo'] . PHP_EOL;
}


foreach($contas as $chave => $conta){
    echo $chave . " ";
    echo $conta['saldo'] . PHP_EOL;
}


