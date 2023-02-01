<?php

$nome = 'Fabrício Santos';
$email = 'fsan4344@gmail.com';
$senha = '856';

echo mb_strlen($senha) . PHP_EOL;

if (strlen ($senha) < 8) {
    echo "Sua senha deve ter no minimo 8 caracteres." . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); 



$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtolower($usuario) . PHP_EOL;  //retorna uma string com todos os caracteres minusculos 

echo mb_strtoupper($usuario) . PHP_EOL; // retorna uma string com todos os caracteres maiusculos

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

[$nome, $sobrenome] = explode(' ', $nome); //função de array "LIST"

var_dump(explode(' ', $nome)); //função explode divide a string e retorna um Array com os elementos divididos

echo "Nome: $nome" . PHP_EOL;

echo "Sobrenome: $sobrenome" . PHP_EOL;
