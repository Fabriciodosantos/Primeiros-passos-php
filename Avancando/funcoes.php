<?php

function exibeMensagem (string $mensagem) 
{
    echo $mensagem . PHP_EOL;
};

function sacar (array $conta , float $valorSaque) : array 
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem ("Não pode sacar!");
    } else {
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;
};

function depositar (array $conta, float $valorDeposito) : array 
{
    $conta['saldo'] += $valorDeposito;

    return $conta;
}

function titularLetrasMaiusculas (array &$conta) 
{
    $conta['titular'] = mb_strtoupper ($conta['titular']);

}