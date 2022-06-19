<?php

function exibeContas($contas) {
    forEach($contas as $conta){
        echo  "conta: {$conta['titular']}, saldo: {$conta['saldo']}" . PHP_EOL . PHP_EOL;
    }
}