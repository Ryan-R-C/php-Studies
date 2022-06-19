<?php

$multiplicador = 5;

for($multiplicando = 1; $multiplicando <= 10; $multiplicando++ ){
    $resultado = $multiplicador * $multiplicando;

    echo " $multiplicador x $multiplicando =  $resultado" . PHP_EOL;
}


// for (valor_inicial; valor_limite, incremento_ou_decremento);