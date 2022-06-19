<?php

$peso = 75;

$altura = 1.75;


$imc = $peso / $altura ** 2;

// echo $imc;

echo "seu imc é $imc" . PHP_EOL . "Você está:";

if($imc < 18.5){
    echo "abaixo do peso ideal";
}
elseif($imc < 24.99){
    echo "no peso ideal";
}
elseif($imc < 29.99){
    echo "com sobrepeso";
}
else{
    echo "com obesidade";
}
