<?php

function geraEmail(string $nome) :void
{
    $email = <<<FIM
    Olá $nome,
    Estamos entrando em contato para
    informar sobre o seu 
    aumento de salario

    att Chefe.
    FIM;

    echo $email;
}


geraEmail('Fabricio Santos');
