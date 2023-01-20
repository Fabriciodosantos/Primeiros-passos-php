<?php

//Ordenação simples de Array com sort(), passa por referencia, que altera a variavel original

$notas = [4, 10, 8, 6, 7];

$notasOrdenadas = $notas;

sort ($notasOrdenadas);

echo "Notas desordenadas";
var_dump ($notas);


echo "Notas Ordenadas";
var_dump ($notasOrdenadas);
