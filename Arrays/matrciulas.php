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

var_dump ($alunos2024);


