<?php

$notas = 
[
    [
        'aluno' => 'Fabricio',
        'nota' => 8
    ],

    [
        'aluno' => 'Viviane',
        'nota' => 7
    ],

    [
        'aluno' => 'Davi Augusto',
        'nota' => 10
    ],

    [
        'aluno' => 'José',
        'nota' => 3
    ]
    
];

function ordenarNotas (array $nota1, array $nota2) : int
{
    /*if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }
    
    return 0;*/

    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenarNotas');

var_dump ($notas);
