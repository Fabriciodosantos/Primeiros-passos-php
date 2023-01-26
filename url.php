<?php

$url = 'https: Alura.com.br/';

if (str_starts_with ($url, 'https')) {
    echo 'Esta é uma URL Segura' . PHP_EOL;
} else {
    echo 'Esta não é uma URL Segura.' . PHP_EOL;
}

echo PHP_EOL;


if (str_ends_with ($url, '.br')) {
    echo 'Esta URL é um dominio brasileiro.' . PHP_EOL;
} else {
    echo 'Esta URL não é uma dominio brasileiro.' . PHP_EOL;
}

echo PHP_EOL;