<?php

$altura = 1.30;
$peso = 50;
$imc = $peso / ($altura ** 2);

$imc = number_format($imc, 2, '.', '');

echo "Seu IMC é de $imc, por isso está ";

if ($imc < 22) {
    echo "Abaixo ";
} else if ($imc < 27) {
    echo "Normal ";
}else if ($imc < 30) {
    echo "um pouco Acima ";
}else {
    echo "muito Acima ";
}

if ($imc > 22 && $imc < 27) {
    echo "como o recomendado!";
}else{
    echo "do recomendado!";
}

