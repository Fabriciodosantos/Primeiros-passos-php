<?php

$numeroTabuada = 5;
$resultado = 0;

for ($i = 0; $i <= 10; $i++) {
    $resultado = $numeroTabuada * $i;

    echo "$numeroTabuada x $i = $resultado" . PHP_EOL;
}
