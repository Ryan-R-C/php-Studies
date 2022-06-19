<?php


function sacar( array $conta, float $valorSacado ): array {
    $novoValor = $conta['saldo'] - $valorSacado;

    if($novoValor < 0){
        echo  "Não foi possível realizar transferência". PHP_EOL; 
        return $conta;
    }

    $conta['saldo'] =  $novoValor;

    return $conta;    
}
