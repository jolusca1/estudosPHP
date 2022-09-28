<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '124.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '125.456.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes ['126.456.789-10'] = [
    'titular' => 'Claudia',
    'saldo' => 500
];
 
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] .PHP_EOL;
}