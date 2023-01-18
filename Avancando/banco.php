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


$contasCorrentes = [
    '402.681.758-02' => [
        'titular' => 'Fabricio',
        'saldo' => 5000
    ],
    '456.698.222-10' => [
        'titular' => 'Viviane',
        'saldo' => 6000
    ],
    '995.564.363-22' => [
        'titular' => 'Davi Augusto',
        'saldo' => 10000
    ]
];


$contasCorrentes['402.681.758-02'] = sacar ($contasCorrentes['402.681.758-02'], 2000);

$contasCorrentes['456.698.222-10'] = depositar ($contasCorrentes['456.698.222-10'], 500);

$contasCorrentes['995.564.363-22'] = sacar ($contasCorrentes['995.564.363-22'], 11000);


foreach ($contasCorrentes as $indice => $conta) {
    exibeMensagem ($indice . " " . $conta['titular'] . " : " . $conta['saldo']);
}

