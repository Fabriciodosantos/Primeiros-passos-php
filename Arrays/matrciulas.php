<?php

$alunos2022 =[
    'Fabricio',
    'Viviane', 
    'Davi', 
    'José', 
    'Madalena', 
    'Roberto', 
    'Joãozinho'
];


$novosAlunos = [
    'Aluno1',
    'Aluno2',
    'Aluno3'
];

$alunos2023 = array_merge ($alunos2022, $novosAlunos); //une dois arrays, quando as chaves são numericas, se as chaves forem string, e ter string iguais seram sobrepostaas.


$alunos2024 = [...$alunos2022,'Fabricio de novo' , ...$novosAlunos]; // ... operador unpacking, desmembra os arrays e adiciona em um novo

array_push($alunos2024, 'Rodrigo', 'Sam', 'Moroni'); // adiciona um ou mais elementos ao array

$alunos2024 [] = 'Esther'; // usado para adicionar um elemento ao array

array_unshift($alunos2024, 'Valeria'); // Adiciona um ou mais elementos no inicio do array

echo array_shift($alunos2024). PHP_EOL; 
 
echo array_pop($alunos2024). PHP_EOL;


var_dump ($alunos2024);


