<?php

//include 'funcoes.php';
require 'funcoes.php';
//require_once 'funcoes.php';

$contasCorrentes = [
    '402.681.758-02' => [
        'titular' => 'Fabricio',
        'saldo' => 5000
    ],
    '456.698.222-10' => [
        'titular' => 'Viviane',
        'saldo' => 6000
    ],
    '995.564.363-22' => [
        'titular' => 'Davi Augusto',
        'saldo' => 10000
    ]
];


$contasCorrentes['402.681.758-02'] = sacar ($contasCorrentes['402.681.758-02'], 2000);

$contasCorrentes['456.698.222-10'] = depositar ($contasCorrentes['456.698.222-10'], 500); //passagem por valor

$contasCorrentes['995.564.363-22'] = sacar ($contasCorrentes['995.564.363-22'], 800);


titularLetrasMaiusculas($contasCorrentes['402.681.758-02']); //passagem de parametro por referencia
titularLetrasMaiusculas($contasCorrentes['456.698.222-10']);
titularLetrasMaiusculas($contasCorrentes['995.564.363-22']);

//unset ($contasCorrentes['995.564.363-22']);  //remover item na lista

/*foreach ($contasCorrentes as $indice => $conta) {
    ['titular' => $titular , 'saldo' => $saldo] = $conta; //list
    exibeMensagem ("$indice $titular : $saldo");
    //exibeMensagem ("$indice {$conta['titular']}  :  {$conta['saldo']}");
}
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>

        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>

        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'];?>
        </dd>

        <?php } ?>
    </dl>
</body>
</html>