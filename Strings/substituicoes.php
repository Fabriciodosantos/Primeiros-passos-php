<?php

$texto = 'olha mas que poxa e caramba';


echo str_replace( // replace substitui as paravras 
    ['poxa', 'caramba'], 
    ['****', '@@@@@@@'],  
    $texto
) . PHP_EOL;


echo strtr($texto, 'poxa', '****') . PHP_EOL;

echo strtr($texto, ['poxa' => '----', 'caramba' => '///////']) . PHP_EOL;
