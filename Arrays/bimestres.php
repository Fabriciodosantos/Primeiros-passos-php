<?php

$notasBimestre1 =[
    'Fabricio' => 10, 
    'Viviane' => 5, 
    'Davi' => 6, 
    'José' => 9, 
    'Madalena' => 7, 
    'Roberto' => 1, 
    'Joãozinho' => 3
];

$notasBimestre2 =[
    'Fabricio' => 8, 
    'Viviane' => 5, 
     
    'José' => 9,
    'Madalena' => 7, 
     
    'Joãozinho' => 3
];

//var_dump (array_diff ($notasBimestre1, $notasBimestre2));  //Mostra a diferença entre os elementos dos arrays

//var_dump (array_diff_key ($notasBimestre1, $notasBimestre2)); //Mostra a diferença entre as chaves dos arrays

//var_dump (array_diff_assoc ($notasBimestre1, $notasBimestre2)); //Mostra a diferença quando a chave ou o elemento estão diferente


$alunosFaltantes = array_diff_key ($notasBimestre1, $notasBimestre2);

$nomeAlunos = array_keys ($alunosFaltantes); //retorna todas as chaves do array

$notaAlunos = array_values ($alunosFaltantes); //retorna todos os valores dos arrays

var_dump (array_combine ($notaAlunos, $nomeAlunos)); //combina dois arrays desde que tenham a mesma quantidade de elementos

var_dump ($notaAlunos);

var_dump (array_flip ($alunosFaltantes)); // inverte a chave e o valor do array