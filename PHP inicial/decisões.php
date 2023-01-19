<?php

$idade = 18;
$pessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou com 16 anos, acompanhado!" . PHP_EOL ;

if ($idade >= 18) {
    echo "Você tem $idade anos," . PHP_EOL ;
    echo "Pode entrar! ";
}else if ($idade >= 16 && $pessoas > 1) {
    echo "Voce tem $idade anos, mas está acompanhado," . PHP_EOL ;
    echo "Pode entrar!";
}else{
    echo "Você tem apenas $idade anos, " . PHP_EOL;
    echo "Não pode Entrar!";
}
