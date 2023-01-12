<?php

$numImpar = 0;

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        echo "# $i" . PHP_EOL;

        $numImpar++;
    }   
}

echo "São $numImpar números impares de 0 a 100!";