<?php

$notas =[
    'Fabricio' => null, 
    'Viviane' => 5, 
    'Davi' => 6, 
    'José' => 8, 
    'Madalena' => 7, 
    'Roberto' => 1, 
    'Joãozinho' => 3
];

$naoEumArray = 0;

asort ($notas); 



var_dump (is_array ($notas)) . PHP_EOL;

var_dump (array_is_list ($notas));

var_dump (array_key_exists ('Roberto', $notas));  //verifica se essa cheve esta presente no array

var_dump (isset ($notas['Fabricio']));  //Verifica se o elemento esta setado.

var_dump (in_array(9, $notas, true)); 

var_dump (array_search (8 , $notas, true));  //Procura a chave que pertence a esse valor

var_dump ($notas);

/* sort = Ordena o array de forma crescente!
* rsort = Ordena Decrescente!
* 
* asort =  Ordena array Associativo, de forma Crescente!
* arsort = Ordena array Associativo, de forma Decrescente!
*
* ksort = Ordena forma alfabetica, Crescente!
* krsort = Ordena forma alfabetica, Decrescente!
*/