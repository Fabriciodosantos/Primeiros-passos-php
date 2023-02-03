<?php

$telefones = ['(18) 1111 - 2222', '(18) 3333 - 4444', '(18) 5555 - 6666'];

foreach ($telefones as $telefones) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    $telefoneValido = preg_match( $regex, $telefones, $correspondencia);


    if ($telefoneValido) {
        echo 'Telefone Valido.' . PHP_EOL;
    } else {
        echo 'Telefone Invalido.' . PHP_EOL;
    }

    echo preg_replace($regex, '(xx) \2', $telefones ) . PHP_EOL;

}

$data = '2022-06-08';
$regexData = '/^([0-9]{4})(\-)([0-9]{2})(\-)([0-9]{2})$/';

echo preg_replace($regexData, '\5/\3/\1', $data);
