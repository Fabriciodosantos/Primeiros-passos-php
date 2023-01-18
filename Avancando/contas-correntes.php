<?php

$conta1 = [
    'titular' => 'Fabricio',
    'saldo' => 5000
];

$conta2 = [
    'titular' => 'Viviane',
    'saldo' => 6000
];

$conta3 = [
    'titular' => 'Davi Augusto',
    'saldo' => 10000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i <= count($contasCorrentes); $i++) {
    echo $contasCorrentes [$i] ['saldo'] . PHP_EOL;
}