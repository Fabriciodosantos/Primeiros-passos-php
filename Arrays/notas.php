<?php

$notas =[
    'Fabricio' => 9, 
    'Viviane' => 5, 
    'Davi' => 6, 
    'José' => 8, 
    'Madalena' => 7, 
    'Roberto' => 1, 
    'Joãozinho' => 3
];


krsort ($notas); 

var_dump ($notas);

/* sort = Ordena o array de forma cerscente!
* rsort = Ordena Decrescente!
* 
* asort =  Ordena array Associativo, de forma Crescente!
* arsort = Ordena array Associativo, de forma Decrescente!
*
* ksort = Ordena forma alfabetica, Crescente!
* krsort = Ordena forma alfabetica, Decrescente!
*/