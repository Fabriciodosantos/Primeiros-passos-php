<?php

$idadeList = [25 , 36 , 40 , 80 , 90, 70, 95, 200];

$totalLista = count ($idadeList);

for ($i = 0; $i < $totalLista; $i++) {
    echo "# $idadeList[$i] " . PHP_EOL;
}