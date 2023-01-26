<?php

$nome = [
    'Fabricio Santos',
    'Viviane Calixto Santos',
    'José Santos',
    'Valeria Calixto',
    'Roberto Santos',
    'Lidiane Calixto'
];    

for ($i=0; $i < count($nome); $i++) { 
    $eDaMinhaFamilia = str_contains($nome[$i], 'Santos');  //verifica se uma String esta dentro de outra

    $daFamiliaEsposa = str_contains($nome[$i], 'Calixto');

    if ($eDaMinhaFamilia) {
        echo "$nome[$i] pertence à minha familia!" . PHP_EOL;
    } elseif ($daFamiliaEsposa) {
        echo "$nome[$i] pertence a familia da minha esposa" . PHP_EOL;
    } else {
        echo "$nome[$i] não pertence a Minha Familia" . PHP_EOL;
    }
    
}





