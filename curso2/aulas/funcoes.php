<?php


function showMessage($message){
    echo $message . PHP_EOL;
};


function sayHello(){
    echo "Hello!" . PHP_EOL;
};
// subrrotinas != função
/*
subrrotinas não retornam valor

funções retornam valor

*/

showMessage("Hello");
showMessage("Hello 2");
sayHello();


function sumTwo($value){
    return $value + 2; 
};

$value = sumTwo(5);
echo $value . PHP_EOL;


$value2 = sumTwo("5");
echo $value2 . PHP_EOL;



