<?php


$funcao = [
    [
        'nome' => 'Fabricio',
        'idade' => 27,
        'nota' => 10
    ],

    [
        'nome' => 'Viviane',
        'idade' => 27,
        'nota' => 8
    ],

    [
        'nome' => 'Madalena',
        'idade' => 50,
        'nota' => 6
    ],

    [
        'nome' => 'Jose',
        'idade' => 60,
        'nota' => 5
    ]
];

foreach ($funcao as ['nome' => $nome, 'nota' => $nota]) {
    echo "O Aluno $nome, tirou a nota: $nota". PHP_EOL;
}

//list ('nome' => $nome, 'idade' => $idade, 'nota' => $nota) = $funcao;

//echo $nome . PHP_EOL;

//echo $idade . PHP_EOL;

//echo $nota. PHP_EOL;