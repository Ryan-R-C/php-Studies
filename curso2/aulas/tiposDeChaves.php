<?php

$array = [

    1 => 'a',    // 1 convertido para inteiro é 1
    '1' => 'b',  // '1', em formato de string convertido para inteiro é 1
    1.5 => 'c',  // 1.5 convertido para inteiro é 1
    true => 'd', // true convertido para inteiro é 1
];

// PHP converte tenta converter as chaves para inteiros 

foreach($array as $chave => $item){
    echo $chave . ' ' . $item . PHP_EOL;
}

// 1 d