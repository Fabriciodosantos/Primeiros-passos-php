<?php

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


foreach ($contasCorrentes as $indice => $conta) {
    echo $indice . " " . $conta['titular'] . " : " . $conta['saldo'] . PHP_EOL;
}